<?php

use Illuminate\Database\Seeder;

class anneeacademiqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annee-academique')->insert([

            [
                'idannee' => 1,
                'annee' => '2017-2018',
            ],
            [
                'idcycle' => 2,
                'annee' => '2018-2019',
            ],
            [
                'idcycle' => 3,
                'annee' => '2019-2020',
            ],
    
        ]);
    }
}
