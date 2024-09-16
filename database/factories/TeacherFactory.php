<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array 
    {
        return [
            'profile'    => 'https://api.dicebear.com/9.x/lorelei/svg',
            'first_name' => fake()->firstNameMale(),
            'last_name'  => fake()->firstNameMale(),
            'license'    => fake()->randomElement(['123456789012', '098765432112']),
            'rank'       => fake()->randomElement(['I', 'II', 'III', 'IV']),
            'contact_no' => fake()->randomElement(['09876543212', '09123456789']),
            'email'      => fake()->email()
        ];
    }
}
