<?php

use Illuminate\Database\Seeder;
use App\Conf_corr;


class ConfCorrelativoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      for ($i=1; $i<21 ; $i++) {

        Conf_corr::create([

          'inicio' => "1",
          'fin' => "9999",
          'actual' => "1",
          'estado' => "1",
          'idsubgrupo' => "{$i}"

        ]);


      }


    }
}
