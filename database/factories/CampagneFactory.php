<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CampagneFactory extends Factory
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
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'resp_comte' => $this->faker->sentence(10),
            'saisie_libre' => true,
            'heure_nuit' => true,
            'type_planning' => $this->faker->sentence(10),
            'code_analy' => $this->faker->sentence(2),
            'date_up' => $this->faker->date(),
            'up_user' => $this->faker->name,
            'etat' => $this->faker->sentence(15),
        ];
    }
}
