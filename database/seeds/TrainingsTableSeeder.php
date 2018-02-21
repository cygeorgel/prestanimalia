<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('trainings')->insert([

        		[
                    'slug' => 'grooming-station',
        			'title' => 'Gagnez en rentabilité grâce à la Grooming Station',
                    'shortDescription' => '',
                    'longDescription' => '
                    <p>
                    Une journée de formation pour maîtriser de façon optimale la Grooming Station.
                    </p>
                    <strong>Pratique intensive</strong>
                    </p>.
                    </p>
                    <ul>
                    <li>Mise en service de la Grooming Station</li>
                    <li>Les différentes brosses et leur utilisation spécifique</li>
                    <li>Toiletter 90% des types de chiens et chats avec la Grooming Station</li>
                    <li>Les différentes étapies de toilettage avec la Grooming Station</li>
                    <li>Préparation - bain - séchage - finition</li>
                    <li>Gain de temps, mois de fatigue, plus de rentabilité</li>
                    <li>Mise en pratique, utilisation de la Grooming Station</li>
                    <li>Comment devenir Toiletteur Nature - les différents niveaux</li>
                    </ul>
                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '145',
                    'durationInHours' => 7,
                    'durationInDays' => 1,
                    'image' => null,
        			'created_at' => NOW(),
        			'updated_at' => NOW(),
        		],

                [
                    'slug' => 'check-in-dog',
                    'title' => 'Maîtrisez la gestion et le marketing avec Check-in DOG',
                    'shortDescription' => 'À la fin de cette journée de formation, vous maîtriserez Check-in DOG, ses fonctions de gestion et de marketing. Développez votre activité. Optimisez votre rentabilité.',
                    'longDescription' => '
                    <p>
                    Une journée de formation pour maîtriser Check-in DOG de façon optimale.
                    </p>
                    <p>
                    <strong>Théorie et pratique</strong>.
                    </p>
                    <ul>
                    <li>Mise en oeuvre de la Check-in DOG</li>
                    <li>Gérer le fichier clients et animaux avec Check-in DOG</li>
                    <li>Gérer les rendez-vous</li>
                    </ul>
                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '145',
                    'durationInHours' => 7,
                    'durationInDays' => 1,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],


                [
                    'slug' => 'libre-service',
                    'title' => 'Toilettage nature, Toilettage Libre Service',
                    'shortDescription' => 'Une journée de formation pour maîtriser le niveau Libre Service de Toilettage Nature : permettre aux posesseurs de chiens et de chats d\'utiliser un ensemble de matériels et de produits de toilettage',
                    'longDescription' => '
                    <p>
                    Une journée de formation pour maîtriser le niveau Libre Service de Toilettage Nature</strong>.
                    </p>
                    <ul>
                    <li>Présentation et mise en service des équipements</li>
                    <li>Accueil de la clientèle, tarifs pratiqués</li>
                    <li>Les bases de l’entretien de l’animal</li>
                    <li>Utilisation et choix des produits – conseil à la vente des produits</li>
                    <li>Fonctionnement et entretien des matériels</li>
                    <li>Séance vidéo « Toilettage Nature en libre-service », et débriefing</li>
                    <li>Mise en pratique, utilisation du matériel</li>
                    <li>Cas particuliers – Réponses aux questions</li>
                    <li>Présentation du contrat d’adhésion au concept toilettage nature</li>
                    </ul>
                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '165',
                    'durationInHours' => 7,
                    'durationInDays' => 1,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'slug' => 'natural-pro',
                    'title' => 'Toilettage nature, Toilettage Natural Pro',
                    'shortDescription' => '',
                    'longDescription' => '
                    <p>
                    90% des types de chiens et chats toilettés en gardant leur aspect naturel.
                    </p>

                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '960',
                    'durationInHours' => 14,
                    'durationInDays' => 2,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],


                [
                    'slug' => 'esthetic-pro',
                    'title' => 'Toilettage nature, Toilettage Esthetic Pro',
                    'shortDescription' => '',
                    'longDescription' => '
                    <p>
                    90% des types de chiens et chats toilettés en gardant leur aspect naturel.
                    </p>

                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '960',
                    'durationInHours' => 14,
                    'durationInDays' => 2,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

        ]);






    }
}
