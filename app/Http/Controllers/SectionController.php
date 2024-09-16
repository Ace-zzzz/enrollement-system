<?php

namespace App\Http\Controllers;

use App\Models\GradeLevel;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController
{
    // FETCH ALL SECTION
    public function index()
    {
        $section = Section::with('gradeLevel')->simplePaginate(12);
        return view('sections.index', ['sections' => $section]);
    }

    // SELECT SECTION
    public function info(Section $section)
    {
        return view('sections.section-info', ['section' => $section]);
    }

    // CREATE SECTION
    public function create()
    {
        return view('sections.create', ['gradeLevel' => GradeLevel::all()]);
    }

    // STORE SECTION
    public function store(Section $section, Request $request)
    {
        $section->create($request->validate([
            'grade_level_id' => 'required|integer',
            'name'           => 'required|string|min:5|unique:sections'
        ]));

        return redirect(route('section.index'));
    }
}
