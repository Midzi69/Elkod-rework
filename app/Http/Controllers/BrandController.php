<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function brendoviPocetna()
    {
        $brands = Brand::all();
        return view('brands.brendovi', compact('brands'));
    }

    public function create() 
    {
        return view('brands.create');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Update the project's name and description
        $brand->name = $request->name;

        // Check if there's a new picture
        if ($request->hasFile('picture')) {
            // Delete the old picture if it exists
            if ($brand->picture) {
                // Delete the old picture from storage
                \Storage::delete('public/' . $brand->picture);
            }

            // Store the new picture
            $brand->picture = $request->file('picture')->store('brands', 'public');
        }

        // Save the updated project
        $brand->save();

        // Redirect with a success message
        return redirect()->route('brands.index')->with('success', 'Brand updated successfully.');
    }

        
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $brand = new Brand();
        $brand->name = $request->name;


        if ($request->hasFile('picture')) {
            $brand->picture = $request->file('picture')->store('brands', 'public');
        }

        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand added successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Project deleted successfully.');
    }
}
