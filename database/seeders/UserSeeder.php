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
            'bureau_membre_id' => 1,
            'categorie_id' => 1,
            'licence_id' => random_int(1, 4),
            'nom' => 'admin',
            'prenom' => 'admin',
            'date_naiss' => '1990-08-20',
            'adr_ligne_1' => fake()->streetAddress(),
            'adr_ligne_2' => null,
            'code_postal' => fake()->postcode(),
            'commune' => fake()->city(),
            'tel' => fake()->phoneNumber(),
            'email' => 'admin@admin.fr',
            'email_verified_at' => now(),
            'password' => Hash::make("Admin123!"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'role_id' => 2,
            'bureau_membre_id' => null,
            'categorie_id' => 3,
            'licence_id' => random_int(1, 4),
            'nom' => 'Boinot',
            'prenom' => 'Emmanuelle',
            'date_naiss' => '1990-08-20',
            'adr_ligne_1' => '78 rue de plaisance',
            'adr_ligne_2' => null,
            'code_postal' => fake()->postcode(),
            'commune' => fake()->city(),
            'tel' => '0648342627',
            'email' => 'emmanuelle.boinot@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);


        // Création de 28 profils aléatoires avec la factory
        \App\Models\User::factory(28)->create();
    }
}
