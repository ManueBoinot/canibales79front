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
            'statut' => 'Président(e)'
        ]);

        BureauMembre::create([
            'statut' => 'Président(e)-adjoint(e)'
        ]);

        BureauMembre::create([
            'statut' => 'Trésorier(e)'
        ]);

        BureauMembre::create([
            'statut' => 'Trésorier(e)-adjoint(e)'
        ]);

        BureauMembre::create([
            'statut' => 'Secrétaire'
        ]);

        BureauMembre::create([
            'statut' => 'Secrétaire-adjoint(e)'
        ]);
    }
}
