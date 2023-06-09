<?php

namespace Database\Seeders;

use App\Models\Patients;
use App\Models\Traitement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TraitementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        // Traitement::factory(5)->create();
        Traitement::factory(20)->create()->each(function ($traitement) {
            $patients = Patients::inRandomOrder()->take(rand(1, 5))->pluck('NumDoss');
            $traitement->patients()->attach($patients);
        });

    }
}
