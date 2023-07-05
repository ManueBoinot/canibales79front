<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'categorie' => 'Vétéran 1',
            'numero_licence' => random_int(111111, 999999),
            'type_licence' => 'Compétition',
            'nom' => 'admin',
            'prenom' => 'admin',
            'date_naissance' => '1990-08-20',
            'adresse_ligne_1' => fake()->streetAddress(),
            'adresse_ligne_2' => '-',
            'code_postal' => fake()->postcode(),
            'commune' => fake()->city(),
            'tel' => fake()->phoneNumber(),
            'email' => 'admin@admin.fr',
            'email_verified_at' => now(),
            'password' => Hash::make("Admin123!"),
            'remember_token' => Str::random(10)
        ]);

        // Création de 28 profils aléatoires avec la factory
        // \App\Models\User::factory(28)->create();
    }
}
