<?php

namespace Database\Seeders;

use App\Models\Accessibilite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessibiliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accessibilite::create([
            'discipline_id' => 1,
            'circuit_id' => 1
        ]);

        Accessibilite::create([
            'discipline_id' => 2,
            'circuit_id' => 1
        ]);

        Accessibilite::create([
            'discipline_id' => 2,
            'circuit_id' => 2
        ]);

        
        Accessibilite::create([
            'discipline_id' => 1,
            'circuit_id' => 3
        ]);
    }
}
