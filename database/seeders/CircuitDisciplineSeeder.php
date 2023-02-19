<?php

namespace Database\Seeders;

use App\Models\CircuitDiscipline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CircuitDisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('circuit_discipline')->insert([
            'discipline_id' => 1,
            'circuit_id' => 1
        ]);

        DB::table('circuit_discipline')->insert([
            'discipline_id' => 2,
            'circuit_id' => 1
        ]);

        DB::table('circuit_discipline')->insert([
            'discipline_id' => 2,
            'circuit_id' => 2
        ]);

        
        DB::table('circuit_discipline')->insert([
            'discipline_id' => 1,
            'circuit_id' => 3
        ]);
    }
}
