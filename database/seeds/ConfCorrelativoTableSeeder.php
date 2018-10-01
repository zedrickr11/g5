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


      for ($i=1; $i<67 ; $i++) {

        Conf_corr::create([

          'inicio' => "0",
          'fin' => "9999",
          'actual' => "0",
          'estado' => "1",
          'idsubgrupo' => "{$i}"

        ]);


      }


    }
}
