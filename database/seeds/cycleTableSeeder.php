<?php

use Illuminate\Database\Seeder;

class cycleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    DB::table('cycle')->insert([

        [
            'idcycle' => 1,
            'nom' => 'Licence',
            'numMatricule'=>'1',
        ],
        [
            'idcycle' => 2,
            'nom' => 'Master',
            'numMatricule'=>'2',        ],
        [
            'idcycle' => 3,
            'nom' => 'Doctorat',
            'numMatricule'=>'3',        ],

    ]);
    }
}
