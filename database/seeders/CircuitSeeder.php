<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Circuit;

class CircuitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Circuit::create([
            'difficulte' => 'Intermédiaire',
            'code_postal' => '79260',
            'commune' => 'François',
            'gps_depart' => '46.37561394988484, -0.3470665068012904',
            'distance' => 6,
            'denivele' => null
        ]);

        Circuit::create([
            'difficulte' => 'Intermédiaire',
            'code_postal' => '79000',
            'commune' => 'Niort',
            'gps_depart' => '46.37561394988484, -0.3470665068012904',
            'distance' => 7.5,
            'denivele' => null
        ]);

        Circuit::create([
            'difficulte' => 'Intermédiaire',
            'code_postal' => '79360',
            'commune' => 'Beauvoir-sur-Niort',
            'gps_depart' => '46.37561394988484, -0.3470665068012904',
            'distance' => 9,
            'denivele' => null
        ]);
    }
}
