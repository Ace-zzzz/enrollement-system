<?php

use App\Models\GradeLevel;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;



test('section have many students', function () {
    $section = Section::factory()->create();
    Student::factory(3)->create(['section_id' => $section->id]);

    expect($section->students)->toHaveCount(3);
});

test('section have assigned adviser', function () {
    $teacher = Teacher::factory()->create();
    $section = Section::factory()->create(['adviser' => $teacher->id]);

    expect($section->adviser)->not()->toBeNull();
});

test('section belongs to many teachers', function () {
    $teachers = Teacher::factory(3)->create();
    $section = Section::factory()->create();

    $section->teachers()->attach($teachers->pluck('id')->toArray());
    
    expect($section->teachers)->toHaveCount(3);
});

test('section is belong to specific grade level', function () {
    $gradeLevel = GradeLevel::factory()->create();
    $section = Section::factory()->create(['grade_level_id' => $gradeLevel->id]);

    expect($section->gradeLevel)->not()->toBeNull();
});


