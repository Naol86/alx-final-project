<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'salary' => Arr::random(['$50,000', '$60,000', '$70,000', '$80,000', '$90,000']),
            'location' => 'New York',
            'schedule' => Arr::random(['Remote', 'Full Time', 'Part Time']),
            'url' => fake()->url,
            'featured' => Arr::random([true, false]),
            'employer_id' => Employer::factory()
        ];
    }
}
