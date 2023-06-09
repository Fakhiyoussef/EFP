<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patients>
 */
class PatientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'PrenomPat' => $this->faker->firstName(),
            'NomPat' => $this->faker->lastName(),
            'Sexe' => $this->faker->randomElement(['Homme', 'Femme']),
            'DateNaiss' => $this->faker->date(),
            'LieuNaiss' => $this->faker->city(),
            'Age' => $this->faker->numberBetween(18, 90),
            'Etat_civil' => $this->faker->randomElement(['Marié', 'Célibataire']),
            'AddressePat' => $this->faker->address(),
            'Mutuelle' => $this->faker->word(),
            'Profession' => $this->faker->jobTitle(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Tel' => $this->faker->phoneNumber(),
            'Observations' => $this->faker->paragraph(),
        ];
    }
}
