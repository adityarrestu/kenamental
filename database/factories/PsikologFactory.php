<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Psikolog>
 */
class PsikologFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'tags' => 'Relationship, Parenting, Kecemasan',
            'sipp'=> fake()->numberBetween(0, 9999),
            'education' => fake()->city(),
            'about'=> fake()->paragraph(3),
        ];
    }
}
