<?php

use Illuminate\Database\Seeder;
use App\Grupo;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<21 ; $i++) {

        Grupo::create([

          'idgrupo' => "{$i}",
          'idarea' => "EB",
          'grupo' => "grupo {$i}"

        ]);


      }
    }
}
