<?php

use Illuminate\Database\Seeder;
use App\AreaMantenimiento;
class AreaMantenimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      AreaMantenimiento::create([
        'area_mantenimiento' => "Pintura e Impermeabilizacion"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Plomería y Drenajes"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Electricidad y Telefonia"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Autoclaves"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Calderas"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Albañiles"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Herreria"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Plantas Electricas"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Equipos Medicos"
      ]);
      AreaMantenimiento::create([
        'area_mantenimiento' => "Otros"
      ]);
    }
}
