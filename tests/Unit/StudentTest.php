<?php

use App\Models\Section;
use App\Models\Student;

test('student belongs to one section', function () 
{
    $section = Section::factory()->create();
    $student = Student::factory()->create(['section_id' => $section->id]);

    expect($student->section)->not()->toBeNull();
});
