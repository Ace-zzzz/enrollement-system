<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *cls
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'section_id' => 1,
            'profile' => 'https://api.dicebear.com/9.x/adventurer/svg',
            'first_name' => fake()->firstNameFemale(),
            'last_name'  => fake()->lastName('female'),
            'birthday'   => fake()->date(),
            'gender'     => 'female',
            'address'    => fake()->address(),
            'contact_no' => fake()->randomElement(['09876543212', '09123456789']),
            'email'      => fake()->email(),
            'enrolled'   => fake()->randomElement([true, false])
        ];
    }
}
