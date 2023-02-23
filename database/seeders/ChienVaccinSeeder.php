<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChienVaccinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chien_vaccin')->insert([
            'chien_id' => 1,
            'vaccin_id' => 1,
            'date' => now(),
        ]);

        DB::table('chien_vaccin')->insert([
            'chien_id' => 1,
            'vaccin_id' => 2,
            'date' => now(),
        ]);

        DB::table('chien_vaccin')->insert([
            'chien_id' => 1,
            'vaccin_id' => 3,
            'date' => now(),
        ]);

        DB::table('chien_vaccin')->insert([
            'chien_id' => 1,
            'vaccin_id' => 4,
            'date' => now(),
        ]);

        DB::table('chien_vaccin')->insert([
            'chien_id' => 1,
            'vaccin_id' => 5,
            'date' => now(),
        ]);

        DB::table('chien_vaccin')->insert([
            'chien_id' => 1,
            'vaccin_id' => 6,
            'date' => now(),
        ]);

        DB::table('chien_vaccin')->insert([
            'chien_id' => 1,
            'vaccin_id' => 7,
            'date' => now(),
        ]);
    }
}
