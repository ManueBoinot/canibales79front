<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vaccin;

class VaccinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaccin::create([
            'nom' => 'Rage',
        ]);

        Vaccin::create([
            'nom' => 'Parvovirose',
        ]);

        Vaccin::create([
            'nom' => 'Leptospirose',
        ]);

        Vaccin::create([
            'nom' => 'Maladie de Carré',
        ]);

        Vaccin::create([
            'nom' => 'Hépatite de Rubarth',
        ]);

        Vaccin::create([
            'nom' => 'Toux de chenil (Parainfluenza)',
        ]);

        Vaccin::create([
            'nom' => 'Toux de chenil (Bordotella bronchoseptica)',
        ]);
    }
}
