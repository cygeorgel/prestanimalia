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
                    'start' => '2018-05-14',
                    'end' => '2018-05-14',
        			'created_at' => NOW(),
        			'updated_at' => NOW(),
        		],


                [
                    'training_id' => '1',
                    'start' => '2018-06-25',
                    'end' => '2018-06-25',
                    'created_at' => NOW(),
                    'updated_at' => NOW(),
                ],

        ]);


    }
}
