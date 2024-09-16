<?php

use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;

test('Teacher is adiviser to particular section', function () {
   $teacher =  Teacher::factory()->create();
   Section::factory()->create(['adviser' => $teacher]);

   expect($teacher->assignedSection)->not()->toBeNull();
});

test('Teacher is belongs to many sections', function () {
   $sections =  Section::factory(3)->create();
   $teacher = Teacher::factory()->create();

   $teacher->sections()->attach($sections->pluck('id')->toArray());

   expect($teacher->sections)->toHaveCount(3);
});

test('Teacher has to many subjects', function () {
   $teacher  = Teacher::factory()->create();
   Subject::factory(3)->create(['teacher_id' => $teacher->id]);

   expect($teacher->subjects)->toHaveCount(3);
});
