<?php

namespace Database\Seeders;

use App\Models\Chien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chien::create([
            'nom' => 'Jirka',
            'race' => 'Berge belge Malinois',
            'categorie_2' => false,
            'date_naiss' => '2014-10-08'
        ]);

        Chien::create([
            'nom' => 'Mako',
            'race' => 'X basset',
            'categorie_2' => false,
            'date_naiss' => '2016-01-01'
        ]);

        Chien::create([
            'nom' => 'Kona',
            'race' => 'Shia-inu',
            'categorie_2' => false,
            'date_naiss' => '2017-05-10'
        ]);
    }
}
