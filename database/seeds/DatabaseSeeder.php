<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(anneeacademiqueTableSeeder::class);
        $this->call(cycleTableSeeder::class);
        $this->call(niveauetudeTableSeeder::class);
        $this->call(filiereTableSeeder::class);
    }
}
