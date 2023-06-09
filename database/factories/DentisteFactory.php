<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dentiste>
 */
class DentisteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NomDent' => $this->faker->lastName(),
            'PrenomDent' => $this->faker->firstName(),
            'TelDent' => $this->faker->phoneNumber(),
            'EmailDent' => $this->faker->unique()->safeEmail,
            'Password' => bcrypt('password'),
            'Ville' => $this->faker->city(),
            'Adresse' => $this->faker->address(),
        ];
    }
}
