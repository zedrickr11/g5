<?php

use Illuminate\Database\Seeder;
use App\TipoTrabajo;
class TipoTrabajoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos que generan calor, chispas o flamas"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos en equipo con partes en movimiento"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos en espacios confinados"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos mecánicos"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos de alto voltaje"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos en altura"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos de excavaciones y/o rupturas"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Trabajos con materiales peligrosos"
      ]);
      TipoTrabajo::create([
        'nombre_tipo' => "Izaje y levantamiento de cargas"
      ]);
  
    }
}
