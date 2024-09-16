<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'teacher_id' => 1,
            'grade_level_id' => 1,
            'name' => fake()->unique()->randomElement([
                'Math', 
                'Science', 
                'English', 
                'Filipino', 
                'History', 
                'PE', 
                'TLE', 
                'EPP', 
            ]),
            'schedule' => fake()->time(),
        ];
    }
}
