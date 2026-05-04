<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructor; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminInstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();
        return view('admin.instructors', compact('instructors'));
    }

    public function create()
    {
        return view('admin.instructor.create'); 
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio'   => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('instructors', 'public');
            $validated['image'] = 'storage/' . $path; 
        }

        Instructor::create($validated);
        return redirect()->route('instructors.index')->with('success', 'Instructor added!');
    }

    public function destroy($id)
    {
        Instructor::findOrFail($id)->delete();
        return redirect()->route('instructors.index')->with('error', 'Instructor removed.');
    }

    public function edit($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('admin.instructor.edit', compact('instructor'));
    }

    public function update(Request $request, $id)
    {
        $instructor = Instructor::findOrFail($id);

        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|max:2048', 
            'bio'   => 'nullable|string',
        ]);

        
        if ($request->hasFile('image')) {
            
            // Store the NEW image
            $validated['image'] = $request->file('image')->store('instructors', 'public');
        }

        $instructor->update($validated);

        // Make sure the route name matches your resource (usually instructors.index)
        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully!');
    }
}
