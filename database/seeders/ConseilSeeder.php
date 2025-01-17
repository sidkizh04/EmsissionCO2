<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conseil;

class ConseilSeeder extends Seeder
{
    
    public function run(): void
    {
        Conseil::create([
            'categorie' => 'Transport',
            'conseil' => 'Utilisez les transports en commun au lieu de la voiture pour vos trajets quotidiens.',
            'carbone_saved' => 2.5,
        ]);
        Conseil::create([
            'categorie' => 'Transport',
            'conseil' => 'Privilégiez le covoiturage pour réduire vos émissions lors des déplacements en voiture.',
            'carbone_saved' => 1.8,
        ]);
        Conseil::create([
            'categorie' => 'Transport',
            'conseil' => 'Adoptez le vélo ou la marche pour des trajets courts (moins de 5 km).',
            'carbone_saved' => 0.9,
        ]);
        Conseil::create([
            'categorie' => 'Alimentation',
            'conseil' => 'Réduisez votre consommation de viande rouge en optant pour des alternatives végétariennes.',
            'carbone_saved' => 27,
        ]);
        Conseil::create([
            'categorie' => 'Alimentation',
            'conseil' => 'Privilégiez les produits locaux et de saison pour réduire les émissions liées au transport.',
            'carbone_saved' => 1.1,
        ]);
        Conseil::create([
            'categorie' => 'Alimentation',
            'conseil' => 'Évitez le gaspillage alimentaire en planifiant vos repas et en utilisant vos restes',
            'carbone_saved' => 0.5,
        ]);
        Conseil::create([
            'categorie' => 'Energie',
            'conseil' => 'Passez à des ampoules LED pour economiser d energie à la maison.',
            'carbone_saved' => 0.3,
        ]);
        Conseil::create([
            'categorie' => 'Energie',
            'conseil' => 'Utilisez un thermostat programmable pour optimiser la consommation de chauffage ou de climatisation.',
            'carbone_saved' => 1.5,
        ]);
        Conseil::create([
            'categorie' => 'Energie',
            'conseil' => 'Debranchez les appareils electroniques inutilises pour reduire la consommation de l énergie fantôme.',
            'carbone_saved' => 0.2,
        ]);
        Conseil::create([
            'categorie' => 'Energie',
            'conseil' => 'Installez des panneaux solaires pour produire de l énergie renouvelable chez vous.',
            'carbone_saved' => 10,
        ]);

    }
}
