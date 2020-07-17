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
            ],
            [
                'idfiliere' => 2,
                'nom' => 'Developpement Web',
            ],
            [
                'idfiliere' => 3,
                'nom' => 'Securite Informatique'
            ],
    
        ]);
    }
}
