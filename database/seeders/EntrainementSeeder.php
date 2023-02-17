<?php

namespace Database\Seeders;

use App\Models\Entrainement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrainementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entrainement::create([
            'circuit_id' => 1,
            'date' => now(),
            'heure' => '09:30:00',
            'commentaire' => null
        ]);

        Entrainement::create([
            'circuit_id' => 2,
            'date' => now(),
            'heure' => '09:00:00',
            'commentaire' => null
        ]);

        Entrainement::create([
            'circuit_id' => 3,
            'date' => now(),
            'heure' => '10:00:00',
            'commentaire' => null
        ]);
    }
}
