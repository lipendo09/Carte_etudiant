<?php

use Illuminate\Database\Seeder;

class niveauetudeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveauetude')->insert([

            [
                'idniveau' => 1,
                'niveau' => '1ere annee',
            ],
            [
                'idcycle' => 2,
                'niveau' => '2eme annee',
            ],
            [
                'idcycle' => 3,
                'niveau' => '3eme annee',
            ],
    
        ]);
    }
}
