<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'role_id' => 2,
            'bureau_membre_id' => null,
            'categorie_id' => random_int(1, 9),
            'licence_id' => random_int(1, 4),
            'nom' => fake()->lastName(),
            'prenom' => fake()->firstName(),
            'date_naiss' => fake()->date(),
            'adr_ligne_1' => fake()->streetAddress(),
            'adr_ligne_2' => fake()->streetAddress(),
            'code_postal' => fake()->postcode(),
            'commune' => fake()->city(),
            'tel' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("User123!"),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
