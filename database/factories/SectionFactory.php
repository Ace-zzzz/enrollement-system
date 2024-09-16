<?php

namespace Database\Factories;

use App\Models\GradeLevel;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'grade_level_id' => GradeLevel::factory(),
            'adviser' => Teacher::factory(),
            'name' => fake()->unique()->country(),
        ];
    }
}
