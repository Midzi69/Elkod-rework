<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); 
        return view('projects.index', compact('projects'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Update the project's name and description
        $project->name = $request->name;
        $project->description = $request->description;

        // Check if there's a new picture
        if ($request->hasFile('picture')) {
            // Delete the old picture if it exists
            if ($project->picture) {
                // Delete the old picture from storage
                \Storage::delete('public/' . $project->picture);
            }

            // Store the new picture
            $project->picture = $request->file('picture')->store('projects', 'public');
        }

        // Save the updated project
        $project->save();

        // Redirect with a success message
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    // Method to handle the project deletion
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }


    public function create() 
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;

        if ($request->hasFile('picture')) {
            $project->picture = $request->file('picture')->store('projects', 'public');
        }

        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project added successfully');
    }

    public function show($id)
    {   
        $project = Project::findOrFail($id);
        return view('projects.single-project', compact('project'));
    }


    
    
}
