<?php

use Illuminate\Database\Seeder;
use App\Conf_subgrupo;

class ConfSubGrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<21 ; $i++) {

        Conf_subgrupo::create([

          'inicio' => "0",
          'fin' => "99",
          'actual' => "6",
          'estado' => "1",
          'idgrupo' => "{$i}"

        ]);


      }

    }
}
