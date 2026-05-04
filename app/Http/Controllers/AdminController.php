<?php

namespace App\Http\Controllers;

use App\Models\ClassCourse;
use App\Models\Instructor;
use App\Models\ContactModel;
use App\Models\Enrollment;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalClasses = ClassCourse::count();
        $totalInstructors = Instructor::count();
        $totalMessages = ContactModel::count();
        $totalEnrollments = Enrollment::count();

        return view('admin.dashboard', compact(
            'totalClasses',
            'totalInstructors',
            'totalMessages',
            'totalEnrollments'
        ));
    }
}