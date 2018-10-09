<?php

use Illuminate\Database\Seeder;
use App\TipoManual;
class TipoManualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Estado::create([

        'nombre_tipo_manual' => "Instalación"

      ]);
      Estado::create([

        'nombre_tipo_manual' => "Operación"

      ]);
      Estado::create([

        'nombre_tipo_manual' => "Partes"

      ]);
      Estado::create([

        'nombre_tipo_manual' => "Servicio"

      ]);

    }
}
