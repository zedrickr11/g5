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
        $this->call(FabricanteTableSeeder::class);
        $this->call(AreaTableSeeder::class);
        $this->call(GrupoTableSeeder::class);
    }
}
