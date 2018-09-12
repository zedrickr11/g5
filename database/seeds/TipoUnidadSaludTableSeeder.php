<?php

use Illuminate\Database\Seeder;
use App\TipoUnidadSalud;

class TipoUnidadSaludTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<10 ; $i++) {

        TipoUnidadSalud::create([
          'idtipounidad' => "{$i}",
          'nivel_atencion' => "nivel {$i}",
          'categoria' => "categoria {$i}",
          'comp_res' => "{$i}",
          'unidad_medica' => "unidad medica {$i}",
          'idhospital' => "{$i}"

        ]);


      }
    }
}
