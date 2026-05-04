<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassCourse;
use App\Models\LessonPackage;
use App\Models\Instructor;
use App\Models\Enrollment;
use App\Models\ContactMessage;

class HomeController extends Controller
{
    public function index()
    {
        $classes = ClassCourse::take(3)->get();
        return view('home', compact('classes'));
    }
}