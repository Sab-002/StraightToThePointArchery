<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\ClassCourse;

class EnrollmentController extends Controller
{
    public function create()
    {
        $classes = ClassCourse::all();
        return view('enroll', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'class_course_id' => 'required|exists:class_courses,id',
            'schedule' => 'required|string',
        ]);

        Enrollment::create($request->all());

        return redirect()->back()->with('success', 'Enrollment submitted successfully.');
    }
}