<?php

use App\Models\GradeLevel;
use App\Models\Subject;
use App\Models\Teacher;

test('subject belongs to grade level', function () {
    $gradeLevel = GradeLevel::factory()->create();
    $subject    = Subject::factory()->create(['grade_level_id' => $gradeLevel->id]);

    expect($subject->gradeLevel)->not()->toBeNull();
});

test('subject belongs to teacher', function () {
    $teacher = Teacher::factory()->create();
    $subject = Subject::factory()->create(['grade_level_id' => $teacher->id]);

    expect($subject->teacher)->not()->toBeNull();
});

