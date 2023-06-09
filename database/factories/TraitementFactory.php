<?php

namespace Database\Factories;

use App\Models\Traitement;
use App\Models\Patients;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Traitement>
 */
class TraitementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     protected $model = Traitement::class;



    public function definition(): array
    {
        $actes = [
            'Traitement endodontique',
            'Obturation composite',
            'Détartrage',
            'Surfaçage',
            'Extraction',
            'Extraction chirurgicale',
            'Couronne ccm',
            'Couronne zircone',
            'Couronne ccc',
            'Implant',
            'Prothèse adjointe totale',
            'Stellite',
            'Prothèse adjointe partielle',
            'Valplast',
            'Inlaycore',
            'Blanchiment',
            'Orthodontie'
        ];

        // $patient = Patients::factory()->create();
        // dump($patient);

        $patients= Patients::pluck('NumDoss')->toArray();

        // $patient = Patients::factory()->create();


        return [
            'DateTraitement' => $this->faker->date(),
            'Acte' => $this->faker->randomElement($actes),
            'Dent' => $this->faker->numberBetween(1, 32),
            'NumDoss'=> $this->faker->randomElement($patients),
        ];
    }
}
