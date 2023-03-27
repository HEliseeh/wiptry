<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class chef_plateausFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'prenom' => $this->faker->name,
            'matricule' => $this->faker->sentence(1),
            'type' => $this->faker->sentence(1),
            'etat' => $this->faker->sentence(1),
        ];
    }
}
