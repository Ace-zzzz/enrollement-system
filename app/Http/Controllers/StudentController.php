<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController
{
    /*
        FETCH STUDENTS WHOSE ENROLLED STATUS IS TRUE
        IN ALPHABETICAL ORDER OF THEIR LAST NAME AND PAGINATE THEM BY 6
    */
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $students = Student::search($request->search)->where('enrolled', true)->orderBy('last_name')->simplePaginate(6);
            $students->load('section');
            
            return view('students.index', ['students' => $students]);
        }

        $enrolled  = Student::with('section')->where('enrolled', true)->orderBy('last_name')->simplePaginate(6);
        return view('students.index', ['students' => $enrolled]);
    }

    /*
        FETCH STUDENTS WHOSE ENROLLED STATUS IS FALSE
        IN ALPHABETICAL ORDER OF THEIR LAST NAME AND PAGINATE THEM BY 7
    */
    public function newEnrollees()
    {
        $newEnrollees = Student::where('enrolled', false)->orderBy('last_name')->simplePaginate(7);

        return view('students.new-enrollees', ['enrollees' => $newEnrollees]);
    }

    // CREATE STUDENT
    public function create()
    {
        $sections = Section::orderBy('name')->get(['name', 'id']);

        return view('students.create', ['sections' => $sections]);
    }

    // STORE CREATED STUDENT INTO DATABASE   
    public function store(Request $request)
    {
        // validated data
        $validatedData = $request->validate([
            'section_id' => 'required|integer',
            'profile'    => 'required|image|mimes:jpeg,png,jpg,JPG|max:2048', 
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'birthday'   => 'required|date',  
            'gender'     => 'required|string',
            'address'    => 'required|string',
            'contact_no' => 'required|string',
            'email'      => 'required|email',
        ]);
      
        $file = $request->file('profile'); // get file
        $fileName = time() . "_" . $file->getClientOriginalName(); // set filename
        $file->storeAs('public/profile_pictures', $fileName); // store file
        $validatedData['profile'] = $fileName;

        Student::create($validatedData);

        return redirect(route('newEnrollees'));
    }
    
    /* 
        ACCEPT STUDENT INSTANCE AND PASS IT TO VIEW 
        USE TO SHOW SPECIFIC STUDENT
    */
    public function profile(Student $student)
    {
        $student = $student;
        $section = Section::orderBy('name')->with('gradeLevel')->get(['id', 'name', 'grade_level_id']);

        return view('students.profile', [
            'student' => $student,
            'sections' => $section,
        ]);
    }

    // Update student
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'section_id' => 'required|string',
            'profile'    => 'image|mimes:jpeg,jpg,png',
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'birthday'   => 'required|string|date',
            'gender'     => 'required|string',
            'address'    => 'required|string',
            'contact_no' => 'required|string',
            'email'      => 'required|string|email',
        ]);
        
        if($request->hasFile('profile'))
        {
            $file = $request->file('profile');
            $filename = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('public/profile_pictures/' . $filename);
            $validatedData['profile'] = $filename;
            $student->update($validatedData);
        }

        $student->update($validatedData);

        return redirect()->back();
    }

    // ACCEPT STUDENT INSTANCE AND UPDATE ITS ENROLLED STATUS TO BE TRUE
    public function enrolled(Student $student)
    {
        $student->update(['enrolled' => true]);
        
        return redirect()->back();
    }

    // ACCEPT STUDENT INSTANCE AND DELETE STUDENT
    public function deny(Student $student)
    {
        $student->delete();

        return redirect()->back();
    }

    // ACCEPT STUDENT INSTANCE AND DELETE STUDENT
    public function delete(Student $student)
    {
        $student->delete();

        return redirect(route('student.index'));
    }
}
