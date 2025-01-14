<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('partners.index', compact('partners'));
    }
    
    
    public function partneriPocetna()
    {
        $partners = Partner::all();
        return view('partners.partneri', compact('partners'));
    }

    public function create() 
    {
        return view('partners.create');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Update the project's name and description
        $partner->name = $request->name;

        // Check if there's a new picture
        if ($request->hasFile('picture')) {
            // Delete the old picture if it exists
            if ($partner->picture) {
                // Delete the old picture from storage
                \Storage::delete('public/' . $partner->picture);
            }

            // Store the new picture
            $partner->picture = $request->file('picture')->store('partners', 'public');
        }

        // Save the updated project
        $partner->save();

        // Redirect with a success message
        return redirect()->route('partners.index')->with('success', 'Partner info updated successfully.');
    }

        
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $partner = new Partner();
        $partner->name = $request->name;


        if ($request->hasFile('picture')) {
            $partner->picture = $request->file('picture')->store('partners', 'public');
        }

        $partner->save();

        return redirect()->route('partners.index')->with('success', 'Partner added successfully');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully.');
    }
}
