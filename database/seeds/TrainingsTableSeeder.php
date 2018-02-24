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
                    'shortDescription' => 'Utilisez le bon matériel et les bonnes techniques, boostez votre productivité... et votre rentabilité.',
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
                    'shortDescription' => 'Utilisez les bons outils informatiques, maîtrisez votre gestion et développez votre marketing.',
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
                    <li>Les rendez-vous, les rappels par SMS, par email</li>
                    <li>Gérer les ventes</li>
                    <li>Journaux de ventes, de caisse</li>
                    <li>Stocks, commandes, aides à la commande</li>
                    <li>Les actions marketing</li>
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
                    'title' => 'Libre Service',
                    'shortDescription' => 'Commencez votre activité toilettage avec un investissement minimal, sans prendre aucun risque.',
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
                    'title' => 'Natural Pro',
                    'shortDescription' => 'Toilettez 90% des types de chiens et de chats avec facilité tout préservant leur aspect naturel.',
                    'longDescription' => '
                    <p>
                    90% des types de chiens et chats toilettés en gardant leur aspect naturel.
                    </p>
                    <ul>
                    <li>Connaissance de l\'animal</li>
                    <li>Les nouvelles technologies du toilettage</li>
                    <li>Les différentes attitudes à adopter</li>
                    <li>Le démêlage</li>
                    <li>Le bain</li>
                    <li>Le séchage</li>
                    <li>La touche finale</li>
                    <li>L\'hygiène en salon de toilettage</li>
                    <li>Choisir les instruments les mieux adaptés</li>
                    <ul>
                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '960',
                    'durationInHours' => 70,
                    'durationInDays' => 10,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'slug' => 'esthetic-pro',
                    'title' => 'Esthetic Pro',
                    'shortDescription' => 'Continuez à développer votre activité en offrant désormais un service de toilettage à la carte.',
                    'longDescription' => '
                    <p>
                    4 semaines de formation en tout, avec la possibilité de moduler entre 1 et 4 semaines en fonction de ce que vous avez besoin de parfaire.
                    </p>
                    <p>
                    4 catégories de poil vous sont proposés afin de parvenir à une maîtrise parfaite des techniques.
                    </p>
                    <ul>
                    <li>Les fourrures épaisses</li>
                    <li>Les poils longs</li>
                    <li>Les poils courts avec sous poil, les poils ras</li>
                    <li>Les poils durs avec ou sans épilation</li>
                    </ul>
                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '1485',
                    'durationInHours' => 140,
                    'durationInDays' => 20,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'slug' => 'elite-pro',
                    'title' => 'Elite Pro',
                    'shortDescription' => 'Intégrez maintenant le toilettage d\'exposition et de concours à votre offre, travaillez votre notoriété.',
                    'longDescription' => '
                    <p>
                    Il s\'agit désormais de développer votre notoriété en proposant du toilettage d\'exposition ou en participant à des concours de toilettage.
                    </p>
                    <p>
                    Participer à notre formation assurée par des toiletteurs experts.
                    </p>
                    ',
                    'curriculum' => '#',
                    'sellingPriceWithoutTax' => '1280',
                    'durationInHours' => 70,
                    'durationInDays' => 10,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

        ]);






    }
}
