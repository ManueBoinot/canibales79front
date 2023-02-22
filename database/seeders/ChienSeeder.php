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
            'categorie_2' => true,
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
            'race' => 'Shiba-inu',
            'categorie_2' => false,
            'date_naiss' => '2017-05-10'
        ]);

        Chien::create([
            'nom' => 'Nola',
            'race' => 'Berger Allemand',
            'categorie_2' => false,
            'date_naiss' => '2018-07-23'
        ]);

        Chien::create([
            'nom' => 'Nao',
            'race' => 'Berger Australien',
            'categorie_2' => false,
            'date_naiss' => '2018-05-12'
        ]);

        Chien::create([
            'nom' => 'Oona',
            'race' => 'Beauceron',
            'categorie_2' => true,
            'date_naiss' => '2019-02-05'
        ]);

        Chien::create([
            'nom' => 'Milka',
            'race' => 'Siberian husky',
            'categorie_2' => false,
            'date_naiss' => '2017-03-12'
        ]);

        Chien::create([
            'nom' => 'Shadow',
            'race' => 'Siberian husky',
            'categorie_2' => false,
            'date_naiss' => '2021-04-17'
        ]);
    }
}
