<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'question' => 'Peut-on faire un essai avant de s\'inscrire ?',
            'reponse' => 'Oui, vous avez 3 essais offerts par la FSLC durant lesquels vous êtes couverts par l\'assurance de la fédération.'
        ]);
    }
}
