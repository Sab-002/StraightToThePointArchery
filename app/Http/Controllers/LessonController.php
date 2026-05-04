<?php

namespace App\Http\Controllers;

use App\Models\LessonPackage;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = LessonPackage::all();
        return view('lessons', compact('lessons'));
    }
}