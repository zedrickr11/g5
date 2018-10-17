<?php

use Illuminate\Database\Seeder;
use App\TecnicoExterno;
class TecnicoExternoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<12 ; $i++) {
  TecnicoExterno::create([
    'nombre_tecnico_externo' => "Externo {$i}",
    'telefono_tecnico_externo' => "45454{$i}",
    'idservicio_tecnico' => "{$i}",

  ]);
}
    }
}
