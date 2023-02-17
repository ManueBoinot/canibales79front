<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatutVaccinal;

class StatutVaccinalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatutVaccinal::create([
            'chien_id' => 1,
            'vaccin_id' => 1,
            'date' => now(),
        ]);

        StatutVaccinal::create([
            'chien_id' => 1,
            'vaccin_id' => 2,
            'date' => now(),
        ]);

        StatutVaccinal::create([
            'chien_id' => 1,
            'vaccin_id' => 3,
            'date' => now(),
        ]);

        StatutVaccinal::create([
            'chien_id' => 1,
            'vaccin_id' => 4,
            'date' => now(),
        ]);

        StatutVaccinal::create([
            'chien_id' => 1,
            'vaccin_id' => 5,
            'date' => now(),
        ]);

        StatutVaccinal::create([
            'chien_id' => 1,
            'vaccin_id' => 6,
            'date' => now(),
        ]);

        StatutVaccinal::create([
            'chien_id' => 1,
            'vaccin_id' => 7,
            'date' => now(),
        ]);
    }
}
