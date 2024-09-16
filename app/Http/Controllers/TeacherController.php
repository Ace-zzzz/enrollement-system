<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController
{
    // FETCH ALL TEACHERS
    public function index()
    {
        $teacher = Teacher::with('assignedSection')->orderBy('last_name')->simplePaginate(6);
        return view('teachers.index', ['teachers' => $teacher]);
    }

    // VIEW SPECIFIC TEACHER's PROFILE
    public function profile(Teacher $teacher)
    {
        return view('teachers.profile', ['teacher' => $teacher]);
    }
}
