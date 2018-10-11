<?php

use Illuminate\Database\Seeder;
use App\Insumo;

class InsumoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Insumo::create([

        'idarea' => "EB",
        'nombre_area' => "Equipo básico"

      ]);
    }
}
