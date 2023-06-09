<?php

namespace Database\Seeders;

use App\Models\Patients;
use App\Models\Traitement;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Patients::factory(5)->create();
        Patients::factory(20)->create()->each(function ($patient) {
            $traitements = Traitement::inRandomOrder()->take(rand(1, 3))->pluck('Num_Traitement');
            $patient->traitements()->attach($traitements);
    });
  }
}