<?php

namespace App\Http\Controllers;

use App\Models\ClassCourse;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassCourse::all();
        return view('classes', compact('classes'));
    }
}