<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = fake()->date();

        return [
            //
            "name"=>fake()->sentence(),
            "description" => fake()->paragraph(),
            "creation_date" => $startDate,
            'end_date' => fake()->dateTimeBetween($startDate, '+1 year')->format('Y-m-d'),
        ];
    }
}
