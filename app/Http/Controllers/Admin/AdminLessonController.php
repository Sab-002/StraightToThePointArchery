<?php

namespace App\Http\Controllers\Admin;

use App\Models\LessonPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLessonController extends Controller
{
    public function index()
    {
        $packages = LessonPackage::latest()->get();
        return view('admin.lesson', compact('packages'));
    }

    public function create()
    {
        return view('admin.lesson.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        LessonPackage::create($request->all());

        return redirect()->route('lessons.index')
            ->with('success', 'Lesson Package created successfully.');
    }

    public function edit(LessonPackage $lesson)
    {
        return view('admin.lesson.edit', compact('lesson'));
    }

    public function update(Request $request, LessonPackage $lesson)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $lesson->update($request->all());

        return redirect()->route('lessons.index')
            ->with('success', 'Lesson Package updated successfully.');
    }

    public function destroy(LessonPackage $lesson)
    {
        $lesson->delete();

        return redirect()->route('lessons.index')
            ->with('error', 'Lesson Package deleted successfully.');
    }
}