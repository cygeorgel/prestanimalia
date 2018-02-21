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
                    'start' => '2018-05-14',
                    'end' => '2018-05-14',
        			'created_at' => NOW(),
        			'updated_at' => NOW(),
        		],


                [
                    'training_id' => '1',
                    'speciality' => null,
                    'start' => '2018-06-25',
                    'end' => '2018-06-25',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '2',
                    'speciality' => null,
                    'start' => '2018-05-15',
                    'end' => '2018-05-15',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '2',
                    'speciality' => null,
                    'start' => '2018-06-26',
                    'end' => '2018-06-26',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation',
                    'start' => '2018-03-26',
                    'end' => '2018-03-30',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation',
                    'start' => '2018-05-14',
                    'end' => '2018-05-18',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

                [
                    'training_id' => '4',
                    'speciality' => 'adaptation',
                    'start' => '2018-06-25',
                    'end' => '2018-06-29',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],







        ]);


    }
}
