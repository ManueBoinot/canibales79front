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
            'role_id' => 2,
            'categorie' => 'Vétéran 1',
            'numero_licence' => random_int(111111, 999999),
            'type_licence' => 'Compétition',
            'nom' => 'user',
            'prenom' => 'user',
            'date_naissance' => '1990-08-20',
            'adresse_ligne_1' => fake()->streetAddress(),
            'adresse_ligne_2' => '-',
            'code_postal' => fake()->postcode(),
            'commune' => fake()->city(),
            'tel' => fake()->phoneNumber(),
            'email' => 'user@user.fr',
            'email_verified_at' => now(),
            'password' => Hash::make("User123!"),
            'remember_token' => Str::random(10)
        ]);

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

        User::create([
            'role_id' => 1,
            'categorie' => 'Sénior',
            'numero_licence' => random_int(111111, 999999),
            'type_licence' => 'Compétition',
            'nom' => 'Boinot',
            'prenom' => 'Emmanuelle',
            'date_naissance' => '1990-08-20',
            'adresse_ligne_1' => '78 rue de plaisance',
            'adresse_ligne_2' => '-',
            'code_postal' => '79000',
            'commune' => 'Bessines',
            'tel' => '0648342627',
            'email' => 'emmanuelle.boinot@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'role_id' => 1,
            'categorie' => 'Vétéran 1',
            'numero_licence' => random_int(111111, 999999),
            'type_licence' => 'Compétition',
            'nom' => 'Didier',
            'prenom' => 'Stéphane',
            'date_naissance' => '1912-02-24',
            'adresse_ligne_1' => '1 rue des winners',
            'adresse_ligne_2' => '-',
            'code_postal' => '79260',
            'commune' => 'François',
            'tel' => '0648781532',
            'email' => 'stephane.didier@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'role_id' => 2,
            'categorie' => 'Sénior',
            'numero_licence' => random_int(111111, 999999),
            'type_licence' => 'Compétition',
            'nom' => 'Guilbert',
            'prenom' => 'Laura',
            'date_naissance' => '1991-02-24',
            'adresse_ligne_1' => '1 rue des chefs',
            'adresse_ligne_2' => '-',
            'code_postal' => '79180',
            'commune' => 'Chauray',
            'tel' => '0648781532',
            'email' => 'laura.guilbert@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'role_id' => 2,
            'categorie' => 'Sénior',
            'numero_licence' => random_int(111111, 999999),
            'type_licence' => 'Compétition',
            'nom' => 'Paradelo',
            'prenom' => 'Ivan',
            'date_naissance' => '1990-12-14',
            'adresse_ligne_1' => '1 rue des espagnols',
            'adresse_ligne_2' => '-',
            'code_postal' => '79180',
            'commune' => 'Chauray',
            'tel' => '0648781532',
            'email' => 'ivan.paradelo@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);

        // Création de 28 profils aléatoires avec la factory
        \App\Models\User::factory(28)->create();
    }
}
