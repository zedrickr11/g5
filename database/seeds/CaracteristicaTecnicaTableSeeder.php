<?php

use Illuminate\Database\Seeder;
use App\CaracTec;
class CaracteristicaTecnicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CaracTec::create([
        'nombre_caracteristica_tecnica' => "Características Eléctricas"
      ]);
      CaracTec::create([
        'nombre_caracteristica_tecnica' => "Características Termodinámicas"
      ]);
      CaracTec::create([
        'nombre_caracteristica_tecnica' => "Características Mecánicas"
      ]);
    }
}
