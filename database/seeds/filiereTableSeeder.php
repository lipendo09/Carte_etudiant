<?php

use Illuminate\Database\Seeder;

class filiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filiere')->insert([

            [
                'idfiliere' => 1,
                'nom' => 'Maintenance',
                'numMatricule'=>'1',
            ],
            [
                'idfiliere' => 2,
                'nom' => 'Developpement Web',
                'numMatricule'=>'2',
            ],
            [
                'idfiliere' => 3,
                'nom' => 'Securite Informatique',
                'numMatricule'=>'3',
            ],
    
        ]);
    }
}
