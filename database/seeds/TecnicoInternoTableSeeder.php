<?php

use Illuminate\Database\Seeder;
use App\TecnicoInterno;
class TecnicoInternoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          for ($i=1; $i<12 ; $i++) {
      TecnicoInterno::create([
        'nombre_tecnico' => "Interno {$i}",
        'codigo_tecnico' => "A{$i}"

      ]);
    }
}
}
