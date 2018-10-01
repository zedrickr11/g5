<?php

use Illuminate\Database\Seeder;
use App\UnidadSalud;

class UnidadSaludTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<11 ; $i++) {

        UnidadSalud::create([

          'idunidadsalud' => "{$i}",
          'unidad_salud' => "unidad de salud {$i}",
          'idhospital' => "{$i}"

        ]);


      }
    }
}
