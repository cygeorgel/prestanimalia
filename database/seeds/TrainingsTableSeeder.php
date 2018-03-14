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
                    <li>Les bases de l\'entretien de l\'animal</li>
                    <li>Utilisation et choix des produits – conseil à la vente des produits</li>
                    <li>Fonctionnement et entretien des matériels</li>
                    <li>Séance vidéo « Toilettage Nature en libre-service », et débriefing</li>
                    <li>Mise en pratique, utilisation du matériel</li>
                    <li>Cas particuliers – Réponses aux questions</li>
                    <li>Présentation du contrat d\'adhésion au concept toilettage nature</li>
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
                            <ul>
                                <li>Les différentes races et les familles par catégorie de poil</li>
                                <li>Physiologie de la peau et du pelage</li>
                                <li>Les différentes actions de toilettage (nettoyage, entretien, démêlage, tonte, coupe, épilation, etc.)</li>
                            </ul>
                        <li>Les nouvelles technologies du toilettage</li>
                            <ul>
                                <li>Les différents matériels efficaces</li>
                                <li>Les nouveaux matériels</li>
                                <li>Comment choisir l\'instrument le mieux adapté</li>
                                <li>Conseils d\'utilisation et entretien</li>
                                <li>Comment tirer le meilleur profit de ses équipements</li>
                                <li>Réduction du temps de toilettage et de la fatigue grâce aux nouvelles techniques et une meilleure utilisation des matériels modernes</li>
                                <li>Organisation et planification d\'une séance et d\'une journée de toilettage</li>
                                <li>Rentabilité du métier de toiletteur</li>
                                    <ul>
                                        <li>Conditions à remplir pour assurer la réussite</li>
                                        <li>Etude de marché et implantation</li>
                                        <li>Exercice de la profession en tant qu\'Employé, à domicile ou à la maison, en salon en ville ou en zone rurale</li>
                                    </ul>
                                <li>Utilisation de la grooming station</li>
                                    <ul>
                                        <li>Mise en service de la grooming station</li>
                                        <li>Les différentes brosses et leur utilisation spécifique</li>
                                        <li>Toiletter 90% des races chiens et chats avec la grooming station</li>
                                        <li>Les différentes étapes de toilettage avec la grooming station</li>
                                        <li>Gain de temps, de fatigue, étude de rentabilité</li>
                                        <li>Mise en pratique, utilisation de la grooming station</li>
                                    </ul>
                            </ul>
                        <li>Les différentes attitudes à adopter</li>
                            <ul>
                                <li>L\'accueil de l\'animal et du maître</li>
                                <li>Ecoute et attitude à respecter</li>
                                <li>Mise en confiance animal-toiletteur</li>
                                <li>Préparation de la séance de toilettage</li>
                                <li>Etude des différents cas et circonstances</li>
                                <li>Faut-il couper ou tondre avant le lavage</li>
                                <li>Les cas extrêmes de la tonte à ras</li>
                                <li>Les différentes coupes réalisables</li>
                                <li>Le toilettage à la carte</li>
                                    <ul>
                                        <li>Etude de faisabilité et propositions en fonction de la race et des possibilités</li>
                                    </ul>
                                <li>Etablir un devis – les tarifs à pratiquer</li>
                                <li>La lutte antiparasitaire</li>
                                    <ul>
                                        <li>Actions sur l\'animal</li>
                                        <li>Actions sur l\'environnement</li>
                                        <li>Les produits à utiliser au salon, à la maison</li>
                                    </ul>
                                <li>Etude des différents soins</li>
                                <ul>
                                    <li>La coupe des ongles : quand et comment</li>
                                    <li>L\'épilation et le nettoyage des oreilles</li>
                                    <li>Le contour des yeux et les glandes anales</li>
                                    <li>Les différents produits et instruments : leur utilisation</li>
                                </ul>
                            </ul>
                        <li>Le démêlage</li>
                            <ul>
                                <li>Analyse de la situation en fonction de la fourrure</li>
                                <li>Faut-il démêler dans les cas extrêmes</li>
                                <li>Les risques et complications après un démêlage intensif</li>
                                <li>Les instruments et produits efficaces pour un démêlage plus facile</li>
                                <li>Les différentes règles à respecter</li>
                            </ul>
                        <li>Le bain (lavage)</li>
                            <ul>
                                <li>L\'importance capitale de la qualité du bain</li>
                                <li>Les impératifs avant le bain – préparation</li>
                                <li>Les différents shampooings et leur utilisation</li>
                                <li>Toutes les phases du lavage et du rinçage</li>
                                <li>Utilisation de l\'après-shampooing</li>
                                <li>Le toilettage d\'entretien sans le bain</li>
                                <li>Les activités complémentaires comme le SPA</li>
                            </ul
                        <li>Le séchage</li>
                            <ul>
                                <li>De la qualité du lavage (bain) et du rinçage dépend la facilité et la rapidité du séchage</li>
                                <li>Comment éviter les risques pendant l\'opération du séchage (privilégier le souffle à la température)</li>
                                <li>Les différents matériels utilisés en sécurité et sans stress pour l\'animal (éviter les cabines fermées à haute température)</li>
                                <li>Les techniques de séchage en fonction de la fourrure et du résultat souhaité (ex : poils lisses ou brushing)</li>
                                <li>Entretien des matériels</li>
                            </ul>
                        <li>La touche finale</li>
                            <ul>
                                <li>S\'assurer que l\'animal est propre – beau et nature</li>
                                <li>Egaliser et parfaire l\'allure générale en fonction de la race et du souhait du propriétaire</li>
                            </ul>
                        <li>L\'hygiène en salon de toilettage</li>
                            <ul>
                                <li>Désinfecter les instruments et locaux</li>
                                <li>Les différents produits à utiliser</li>
                            </ul>
                        <li>Choisir les instruments les mieux adaptés</li>
                            <ul>
                                <li>Les tondeuses et les différentes utilisations</li>
                                    <ul>
                                        <li>Quelle longueur de peigne utiliser et dans quelles circonstances</li>
                                        <li>Entretien des tondeuses, des peignes et affutage</li>
                                    </ul>
                                <li>Les ciseaux : les différents modèles et leur utilisation</li>
                                    <ul>
                                        <li>Quels ciseaux choisir et dans quelles circonstances</li>
                                        <li>Prise en main et manipulation</li>
                                        <li>Entretien des ciseaux et affutage</li>
                                    </ul>
                                <li>Les matériels et instruments</li>
                                    <ul>
                                        <li>Prise en main, manipulation</li>
                                    </ul>
                                <li>Meilleure utilisation en situation réelle</li>
                            </ul>
                        <li>Utilisation de la solution Check-in DOG</li>
                        <li>Cas particuliers, réponses aux questions</li>
                        <li>Présentation du contrat d\'adhésion au concept Toilettage Nature</li>
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


                [
                    'slug' => 'natural-esthetic-pro',
                    'title' => 'Natural + Esthetic Pro',
                    'shortDescription' => 'Formation complète, rapide et intensive conduisant au label Esthetic Pro.',
                    'longDescription' => '
                    <p>
                    90% des types de chiens et chats toilettés en gardant leur aspect naturel.
                    </p>
                    <ul>
                        <li>Connaissance de l\'animal</li>
                            <ul>
                                <li>Les différentes races et les familles par catégorie de poil</li>
                                <li>Physiologie de la peau et du pelage</li>
                                <li>Les différentes actions de toilettage (nettoyage, entretien, démêlage, tonte, coupe, épilation, etc.)</li>
                            </ul>
                        <li>Les nouvelles technologies du toilettage</li>
                            <ul>
                                <li>Les différents matériels efficaces</li>
                                <li>Les nouveaux matériels</li>
                                <li>Comment choisir l\'instrument le mieux adapté</li>
                                <li>Conseils d\'utilisation et entretien</li>
                                <li>Comment tirer le meilleur profit de ses équipements</li>
                                <li>Réduction du temps de toilettage et de la fatigue grâce aux nouvelles techniques et une meilleure utilisation des matériels modernes</li>
                                <li>Organisation et planification d\'une séance et d\'une journée de toilettage</li>
                                <li>Rentabilité du métier de toiletteur</li>
                                    <ul>
                                        <li>Conditions à remplir pour assurer la réussite</li>
                                        <li>Etude de marché et implantation</li>
                                        <li>Exercice de la profession en tant qu\'Employé, à domicile ou à la maison, en salon en ville ou en zone rurale</li>
                                    </ul>
                                <li>Utilisation de la grooming station</li>
                                    <ul>
                                        <li>Mise en service de la grooming station</li>
                                        <li>Les différentes brosses et leur utilisation spécifique</li>
                                        <li>Toiletter 90% des races chiens et chats avec la grooming station</li>
                                        <li>Les différentes étapes de toilettage avec la grooming station</li>
                                        <li>Gain de temps, de fatigue, étude de rentabilité</li>
                                        <li>Mise en pratique, utilisation de la grooming station</li>
                                    </ul>
                            </ul>
                        <li>Les différentes attitudes à adopter</li>
                            <ul>
                                <li>L\'accueil de l\'animal et du maître</li>
                                <li>Ecoute et attitude à respecter</li>
                                <li>Mise en confiance animal-toiletteur</li>
                                <li>Préparation de la séance de toilettage</li>
                                <li>Etude des différents cas et circonstances</li>
                                <li>Faut-il couper ou tondre avant le lavage</li>
                                <li>Les cas extrêmes de la tonte à ras</li>
                                <li>Les différentes coupes réalisables</li>
                                <li>Le toilettage à la carte</li>
                                    <ul>
                                        <li>Etude de faisabilité et propositions en fonction de la race et des possibilités</li>
                                    </ul>
                                <li>Etablir un devis – les tarifs à pratiquer</li>
                                <li>La lutte antiparasitaire</li>
                                    <ul>
                                        <li>Actions sur l\'animal</li>
                                        <li>Actions sur l\'environnement</li>
                                        <li>Les produits à utiliser au salon, à la maison</li>
                                    </ul>
                                <li>Etude des différents soins</li>
                                <ul>
                                    <li>La coupe des ongles : quand et comment</li>
                                    <li>L\'épilation et le nettoyage des oreilles</li>
                                    <li>Le contour des yeux et les glandes anales</li>
                                    <li>Les différents produits et instruments : leur utilisation</li>
                                </ul>
                            </ul>
                        <li>Le démêlage</li>
                            <ul>
                                <li>Analyse de la situation en fonction de la fourrure</li>
                                <li>Faut-il démêler dans les cas extrêmes</li>
                                <li>Les risques et complications après un démêlage intensif</li>
                                <li>Les instruments et produits efficaces pour un démêlage plus facile</li>
                                <li>Les différentes règles à respecter</li>
                            </ul>
                        <li>Le bain (lavage)</li>
                            <ul>
                                <li>L\'importance capitale de la qualité du bain</li>
                                <li>Les impératifs avant le bain – préparation</li>
                                <li>Les différents shampooings et leur utilisation</li>
                                <li>Toutes les phases du lavage et du rinçage</li>
                                <li>Utilisation de l\'après-shampooing</li>
                                <li>Le toilettage d\'entretien sans le bain</li>
                                <li>Les activités complémentaires comme le SPA</li>
                            </ul
                        <li>Le séchage</li>
                            <ul>
                                <li>De la qualité du lavage (bain) et du rinçage dépend la facilité et la rapidité du séchage</li>
                                <li>Comment éviter les risques pendant l\'opération du séchage (privilégier le souffle à la température)</li>
                                <li>Les différents matériels utilisés en sécurité et sans stress pour l\'animal (éviter les cabines fermées à haute température)</li>
                                <li>Les techniques de séchage en fonction de la fourrure et du résultat souhaité (ex : poils lisses ou brushing)</li>
                                <li>Entretien des matériels</li>
                            </ul>
                        <li>La touche finale</li>
                            <ul>
                                <li>S\'assurer que l\'animal est propre – beau et nature</li>
                                <li>Egaliser et parfaire l\'allure générale en fonction de la race et du souhait du propriétaire</li>
                            </ul>
                        <li>L\'hygiène en salon de toilettage</li>
                            <ul>
                                <li>Désinfecter les instruments et locaux</li>
                                <li>Les différents produits à utiliser</li>
                            </ul>
                        <li>Choisir les instruments les mieux adaptés</li>
                            <ul>
                                <li>Les tondeuses et les différentes utilisations</li>
                                    <ul>
                                        <li>Quelle longueur de peigne utiliser et dans quelles circonstances</li>
                                        <li>Entretien des tondeuses, des peignes et affutage</li>
                                    </ul>
                                <li>Les ciseaux : les différents modèles et leur utilisation</li>
                                    <ul>
                                        <li>Quels ciseaux choisir et dans quelles circonstances</li>
                                        <li>Prise en main et manipulation</li>
                                        <li>Entretien des ciseaux et affutage</li>
                                    </ul>
                                <li>Les matériels et instruments</li>
                                    <ul>
                                        <li>Prise en main, manipulation</li>
                                    </ul>
                                <li>Meilleure utilisation en situation réelle</li>
                            </ul>
                        <li>Utilisation de la solution Check-in DOG</li>
                        <li>Cas particuliers, réponses aux questions</li>
                        <li>Présentation du contrat d\'adhésion au concept Toilettage Nature</li>
                    <ul>Je 
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
                    'sellingPriceWithoutTax' => '1956',
                    'durationInHours' => 210,
                    'durationInDays' => 30,
                    'image' => null,
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

        ]);






    }
}
