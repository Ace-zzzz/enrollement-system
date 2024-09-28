<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminController
{
    // FETCH TWO GROUPS OF STUDENTS BASE ON THEIR ENROLLED STATUS AND FETCH ALL TEACHERS AT THE SAME TIME
    public function dashBoard()
    {
        return view('admin.dashboard', [
            'students'  => Student::where('enrolled', true)->get(),
            'enrollees' => Student::where('enrolled', false)->get(),
            'teachers'  => Teacher::all(),
            'sections'  => Section::all(),
            'male'      => Student::where(['enrolled' => true, 'gender' => 'male']),
            'female'    => Student::where(['enrolled' => true, 'gender' => 'female']),
        ]);
    }

    // JUST RETURN A VIEW LOGIN PAGE
    public function loginPage()
    {
        return view('admin.login');
    }

    // VALIDATE THE INPUT AND LOG IN THE ADMIN
    public function login(Request $request)
    {
        $admin = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required',
        ]);

        if( ! Auth::guard('adminKaba')->attempt($admin))
        {
            throw(ValidationException::withMessages([
                'username' => 'Ops ano yan?',
            ]));
        }

        $request->session()->regenerate();

        return redirect('/');
    }

    // LOGOUT ADMIN
    public function logout()
    {
        Auth::guard('adminKaba')->logout();

        return redirect('/login');
    }
}
