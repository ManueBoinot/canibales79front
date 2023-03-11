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
            'reponse' => 'Oui, vous avez 3 ESSAIS OFFERTS par la FSLC durant lesquels vous êtes couverts par l\'assurance de la fédération.'
        ]);

        Faq::create([
            'question' => 'Puis-je faire du canicross / canivtt avec mon chien de 6 mois ?',
            'reponse' => 'Non, il faut attendre que le chien ait totalement terminé sa croissance avant de pratiquer nos disciplines (voir notre rubrique " LES DISCIPLINES ").
            Toutefois, vous pouvez commencer à entraîner votre chien SANS TRACTION en le laissant courir à vos côtés s\'il a un bon rappel, sur des distances d\'abord courtes puis de plus en plus longues, afin qu\'il puisse développer son endurance et sa musculature sans risque de développer des problèmes de santé en grandissant.'
        ]);
    }
}
