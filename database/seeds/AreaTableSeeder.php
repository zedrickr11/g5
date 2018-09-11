<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Area::create([

          'idarea' => "EB",
          'nombre_area' => "Equipo básico"

        ]);
        Area::create([

          'idarea' => "EM",
          'nombre_area' => "Equipo médico"

        ]);
        Area::create([

          'idarea' => "MT",
          'nombre_area' => "Equipo para mantenimiento"

        ]);
        Area::create([

          'idarea' => "IC",
          'nombre_area' => "Equipos de Informática y Comunicación"

        ]);
        Area::create([

          'idarea' => "MH",
          'nombre_area' => "Mobiliario Hospitalario"

        ]);
        Area::create([

          'idarea' => "VT",
          'nombre_area' => "Vehículo de Transporte"

        ]);
        Area::create([

          'idarea' => "OC",
          'nombre_area' => "Obra Civil (Edificio Infraestructura)"

        ]);

    }
}
