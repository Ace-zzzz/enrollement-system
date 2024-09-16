<?php

use App\Models\GradeLevel;
use App\Models\Section;
use App\Models\Subject;

test('grade level have many section', function () {
    $gradeLevel = GradeLevel::factory()->create();
    Section::factory(3)->create(['grade_level_id' => $gradeLevel->id]);

    expect($gradeLevel->sections)->toHaveCount(3);
});

test('grade level have many subjects', function () {
    $gradeLevel = GradeLevel::factory()->create();
    Subject::factory(3)->create(['grade_level_id' => $gradeLevel->id]);

    expect($gradeLevel->subjects)->toHaveCount(3);
});
