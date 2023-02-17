<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Licence;

class LicenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Licence::create([
            'type' => 'Loisirs',
            'numero' => random_int(000001, 999999)
        ]);

        Licence::create([
            'type' => 'Loisirs',
            'numero' => random_int(000001, 999999)
        ]);

        Licence::create([
            'type' => 'Loisirs',
            'numero' => random_int(000001, 999999)
        ]);

        Licence::create([
            'type' => 'Compétition',
            'numero' => random_int(000001, 999999)
        ]);
    }
}
