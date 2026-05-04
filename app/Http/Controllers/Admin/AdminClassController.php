<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassCourse;

class AdminClassController extends Controller
{
    public function index() 
    {
        $classes = \App\Models\ClassCourse::all(); 
        return view('admin.classes', compact('classes'));
    }     
    public function create()
    {
        // If your classes need an instructor, fetch them to show in a dropdown
        $instructors = \App\Models\Instructor::all();
        return view('admin.classes.create', compact('instructors'));
    }

   public function store(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'code'          => 'required|unique:class_courses,code',
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'cost'          => 'required|numeric',
            'schedule'      => 'nullable|string',
            'prerequisite'  => 'nullable|string',
        ]);

        \App\Models\ClassCourse::create($validated);

        return redirect()->route('classes.index')->with('success', 'Course added successfully!');
    }

    public function destroy($id)
    {
        $course = \App\Models\ClassCourse::findOrFail($id);
        $course->delete();

        return redirect()->route('classes.index')->with('error', 'Course deleted forever!');
    }
        
    public function edit($id)
    {
        $course = \App\Models\ClassCourse::findOrFail($id);
        return view('admin.classes.edit', compact('course'));
    }

    public function update(\Illuminate\Http\Request $request, $id)
    {
        $course = \App\Models\ClassCourse::findOrFail($id);

        $validated = $request->validate([
            'code'          => 'required|unique:class_courses,code,' . $id,
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'cost'          => 'required|numeric',
            'schedule'      => 'nullable|string',
            'prerequisite'  => 'nullable|string',
        ]);

        $course->update($validated);

        return redirect()->route('classes.index')->with('success', 'Course updated successfully!');
    }
}