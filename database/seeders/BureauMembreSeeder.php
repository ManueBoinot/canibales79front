<?php

namespace Database\Seeders;

use App\Models\BureauMembre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BureauMembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BureauMembre::create([
            'statut' => 'Président(e)',
            'prenom' => 'Laura',
            'image' => 'default.jpg'
        ]);

        BureauMembre::create([
            'statut' => 'Trésorier(e)',
            'prenom' => 'Marion',
            'image' => 'default.jpg'
        ]);

        BureauMembre::create([
            'statut' => 'Trésorier(e)-adjoint(e)',
            'prenom' => 'Léa',
            'image' => 'default.jpg'
        ]);

        BureauMembre::create([
            'statut' => 'Secrétaire',
            'prenom' => 'Stéphanie',
            'image' => 'default.jpg'
        ]);

        BureauMembre::create([
            'statut' => 'Secrétaire-adjoint(e)',
            'prenom' => 'Stéphane',
            'image' => 'default.jpg'
        ]);
    }
}
