<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            RoleSeeder::class,
            LicenceSeeder::class,
            VaccinSeeder::class,
            BureauMembreSeeder::class,
            CategorieSeeder::class,
            UserSeeder::class,
            ChienUserSeeder::class,
            VaccinSeeder::class,
            ChienSeeder::class,
            ChienVaccinSeeder::class,
            DisciplineSeeder::class,
            CircuitSeeder::class,
            CircuitDisciplineSeeder::class,
            EntrainementSeeder::class,
            FaqSeeder::class,
        ]);
    }
}
