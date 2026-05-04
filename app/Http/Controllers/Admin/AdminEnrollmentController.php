<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassCourse;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class AdminEnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with('classCourse')->get();

        return view('admin.enrollments', compact('enrollments'));
    }

    public function create()
    {
        $classes = ClassCourse::all();

        return view('admin.enrollment.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'class_course_id' => 'required|exists:class_courses,id',
            'schedule' => 'nullable',
        ]);

        Enrollment::create($request->all());

        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollment created successfully.');
    }

    public function edit(Enrollment $enrollment)
    {
        $classes = ClassCourse::all();

        return view('admin.enrollment.edit', compact('enrollment', 'classes'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'class_course_id' => 'required|exists:class_courses,id',
            'schedule' => 'nullable',
        ]);

        $enrollment->update($request->all());

        return redirect()->route('enrollments.index')
            ->with('success', 'Enrollment updated successfully.');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();

        return redirect()->route('enrollments.index')
            ->with('error', 'Enrollment deleted successfully.');
    }
}