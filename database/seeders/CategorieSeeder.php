<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'categorie' => 'Benjamin',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Minime',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Cadet',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Junior',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Adulte',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Sénior',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Vétéran 1',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Vétéran 2',
            'handi' => false,
        ]);

        Categorie::create([
            'categorie' => 'Vétéran 3',
            'handi' => false,
        ]);
    }
}
