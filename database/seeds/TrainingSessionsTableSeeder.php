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
                'start' => '2018-05-28',
                'end' => '2018-06-22',
                'numberOfDays' => 20,
                'priceWithoutTax' => '1485',
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
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-09-17',
                    'end' => '2018-10-12',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-10-29',
                    'end' => '2018-11-23',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '5',
                    'speciality' => 'stage complet (4 semaines)',
                    'start' => '2018-12-10',
                    'end' => '2019-01-18',
                    'numberOfDays' => 20,
                    'priceWithoutTax' => '1485',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],


            [
                'training_id' => '7', // 6 semaines
                'speciality' => null,
                'start' => '2018-06-25',
                'end' => '2018-08-03',
                'numberOfDays' => 30,
                'priceWithoutTax' => '1956',
                'created_at' => NOW(),
                'updated_at' => NOW(),
            ],

                [
                    'training_id' => '7', // 6 semaines
                    'speciality' => null,
                    'start' => '2018-09-03',
                    'end' => '2018-10-12',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7', // 6 semaines
                    'speciality' => null,
                    'start' => '2018-10-15',
                    'end' => '2018-11-23',
                    'numberOfDays' => 30,
                    'priceWithoutTax' => '1956',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '7', // 6 semaines
                    'speciality' => null,
                    'start' => '2018-11-26',
                    'end' => '2019-01-18',
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
