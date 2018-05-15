<?php

use Illuminate\Database\Seeder;

class TrainingSessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('training_sessions')->insert([


                [
                    'training_id' => '1',
                    'speciality' => null,
                    'start' => '2018-03-26',
                    'end' => '2018-03-26',
                    'numberOfDays' => 1,
                    'priceWithoutTax' => '145',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

        		[
        			'training_id' => '1',
                    'speciality' => null,
                    'start' => '2018-05-14',
                    'end' => '2018-05-14',
                    'numberOfDays' => 1,
                    'priceWithoutTax' => '145',
        			'created_at' => NOW(),
        			'updated_at' => NOW(),
        		],

                [
                    'training_id' => '1',
                    'speciality' => null,
                    'start' => '2018-06-25',
                    'end' => '2018-06-25',
                    'numberOfDays' => 1,
                    'priceWithoutTax' => '145',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '2',
                    'speciality' => null,
                    'start' => '2018-04-16',
                    'end' => '2018-04-16',
                    'numberOfDays' => 1,
                    'priceWithoutTax' => '145',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation',
                    'start' => '2018-03-26',
                    'end' => '2018-03-30',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '645',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation + savoir-faire',
                    'start' => '2018-03-26',
                    'end' => '2018-04-07',
                    'numberOfDays' => 10,
                    'priceWithoutTax' => '960',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation',
                    'start' => '2018-05-14',
                    'end' => '2018-05-18',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '645',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation + savoir-faire',
                    'start' => '2018-05-14',
                    'end' => '2018-05-26',
                    'numberOfDays' => 10,
                    'priceWithoutTax' => '960',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation',
                    'start' => '2018-06-25',
                    'end' => '2018-06-29',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '645',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation + savoir-faire',
                    'start' => '2018-06-25',
                    'end' => '2018-07-06',
                    'numberOfDays' => 10,
                    'priceWithoutTax' => '960',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],


                [
                    'training_id' => '5',
                    'speciality' => 'fourrures épaisses',
                    'start' => '2018-04-09',
                    'end' => '2018-04-13',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil long',
                    'start' => '2018-04-16',
                    'end' => '2018-04-20',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil court',
                    'start' => '2018-04-23',
                    'end' => '2018-04-27',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil dur',
                    'start' => '2018-04-30',
                    'end' => '2018-05-05',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-04-09',
                    'end' => '2018-05-05',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'fourrures épaisses',
                    'start' => '2018-05-18',
                    'end' => '2018-06-01',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil long',
                    'start' => '2018-06-04',
                    'end' => '2018-06-08',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil court',
                    'start' => '2018-06-11',
                    'end' => '2018-06-15',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil dur',
                    'start' => '2018-06-18',
                    'end' => '2018-06-22',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-05-18',
                    'end' => '2018-06-22',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'fourrures épaisses',
                    'start' => '2018-07-09',
                    'end' => '2018-07-13',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil long',
                    'start' => '2018-07-16',
                    'end' => '2018-07-20',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil court',
                    'start' => '2018-07-23',
                    'end' => '2018-07-27',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'poil dur',
                    'start' => '2018-07-30',
                    'end' => '2018-08-03',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '495',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-07-09',
                    'end' => '2018-08-03',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7',
                    'speciality' => null,
                    'start' => '2018-03-26',
                    'end' => '2018-05-05',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7',
                    'speciality' => null,
                    'start' => '2018-05-14',
                    'end' => '2018-06-22',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7',
                    'speciality' => null,
                    'start' => '2018-06-25',
                    'end' => '2018-08-03',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                // new dates:


                [
                    'training_id' => '4', // natural pro: 1 semaine
                    'speciality' => null,
                    'start' => '2018-09-03',
                    'end' => '2018-09-07',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '645',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],


                [
                    'training_id' => '4', // natural pro: 1 semaine
                    'speciality' => null,
                    'start' => '2018-10-15',
                    'end' => '2018-10-19',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '645',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4', // natural pro: 1 semaine
                    'speciality' => null,
                    'start' => '2018-11-26',
                    'end' => '2018-11-30',
                    'numberOfDays' => 5,
                    'priceWithoutTax' => '645',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4', // 2 semaines
                    'speciality' => 'adaptation + savoir-faire',
                    'start' => '2018-09-03',
                    'end' => '2018-09-14',
                    'numberOfDays' => 10,
                    'priceWithoutTax' => '960',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4', // 2 semaines
                    'speciality' => 'adaptation + savoir-faire',
                    'start' => '2018-10-15',
                    'end' => '2018-10-26',
                    'numberOfDays' => 10,
                    'priceWithoutTax' => '960',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4', // 2 semaines
                    'speciality' => 'adaptation + savoir-faire',
                    'start' => '2018-11-26',
                    'end' => '2018-12-07',
                    'numberOfDays' => 10,
                    'priceWithoutTax' => '960',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-09-17',
                    'end' => '2018-10-13',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-10-29',
                    'end' => '2018-11-24',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-12-10',
                    'end' => '2019-01-19',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7', // 6 semaines
                    'speciality' => null,
                    'start' => '2018-09-03',
                    'end' => '2018-10-13',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7', // 6 semaines
                    'speciality' => null,
                    'start' => '2018-10-15',
                    'end' => '2018-11-24',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7', // 6 semaines
                    'speciality' => null,
                    'start' => '2018-11-26',
                    'end' => '2019-01-19',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '1', // grooming
                    'speciality' => null,
                    'start' => '2018-09-03',
                    'end' => '2018-09-03',
                    'numberOfDays' => 1,
                    'priceWithoutTax' => '145',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '1', // grooming
                    'speciality' => null,
                    'start' => '2018-10-15',
                    'end' => '2018-10-15',
                    'numberOfDays' => 1,
                    'priceWithoutTax' => '145',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '1', // grooming
                    'speciality' => null,
                    'start' => '2018-11-26',
                    'end' => '2018-11-26',
                    'numberOfDays' => 1,
                    'priceWithoutTax' => '145',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

        ]);
        


    }
}
