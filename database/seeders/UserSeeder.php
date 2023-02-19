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
            'adr_ligne_2' => '-',
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
            'adr_ligne_2' => '-',
            'code_postal' => '79000',
            'commune' => 'Bessines',
            'tel' => '0648342627',
            'email' => 'emmanuelle.boinot@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'role_id' => 7,
            'bureau_membre_id' => 4,
            'categorie_id' => 3,
            'licence_id' => random_int(1, 4),
            'nom' => 'Didier',
            'prenom' => 'Stéphane',
            'date_naiss' => '1912-02-24',
            'adr_ligne_1' => '1 rue des winners',
            'adr_ligne_2' => '-',
            'code_postal' => '79260',
            'commune' => 'François',
            'tel' => '0648781532',
            'email' => 'stephane.didier@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'role_id' => 4,
            'bureau_membre_id' => 1,
            'categorie_id' => 3,
            'licence_id' => random_int(1, 4),
            'nom' => 'Guilbert',
            'prenom' => 'Laura',
            'date_naiss' => '1991-02-24',
            'adr_ligne_1' => '1 rue des chefs',
            'adr_ligne_2' => '-',
            'code_postal' => '79180',
            'commune' => 'Chauray',
            'tel' => '0648781532',
            'email' => 'laura.guilbert@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("Manue123!"),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'role_id' => 3,
            'bureau_membre_id' => null,
            'categorie_id' => 3,
            'licence_id' => random_int(1, 4),
            'nom' => 'Paradelo',
            'prenom' => 'Ivan',
            'date_naiss' => '1990-12-14',
            'adr_ligne_1' => '1 rue des espagnols',
            'adr_ligne_2' => '-',
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
