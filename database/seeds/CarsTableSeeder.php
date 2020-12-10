<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {


        \DB::table('cars')->delete();

        \DB::table('cars')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'model' => 'Audi',
                    'registration' => 'CJ0390',
                    'year' => 0,
                    'capacity' => 5,
                    'minAge' => 22,
                    'pricePerDay' => 150,
                    'img' => '44220422.jpg',
                    'created_at' => '2020-12-08 12:53:07',
                    'updated_at' => '2020-12-08 12:53:07',
                ),
            1 =>
                array (
                    'id' => 2,
                    'model' => 'BMW',
                    'registration' => 'AG0222',
                    'year' => 0,
                    'capacity' => 4,
                    'minAge' => 18,
                    'pricePerDay' => 50,
                    'img' => '44220422.jpg',
                    'created_at' => '2020-12-08 12:53:07',
                    'updated_at' => '2020-12-08 12:53:07',
                ),
            2 =>
                array (
                    'id' => 3,
                    'model' => 'TOYOTA',
                    'registration' => 'CK7111',
                    'year' => 0,
                    'capacity' => 5,
                    'minAge' => 24,
                    'pricePerDay' => 100,
                    'img' => '44220422.jpg',
                    'created_at' => '2020-12-08 12:53:07',
                    'updated_at' => '2020-12-08 12:53:07',
                ),
        ));


    }

    }

