<?php

use Illuminate\Database\Seeder;
use App\tiporu;
class TipoRutinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      tiporu::create([
        'tipo_rutina' => "PREVENTIVO"
      ]);
      tiporu::create([
        'tipo_rutina' => "CORRECTIVO"
      ]);
      tiporu::create([
        'tipo_rutina' => "PRUEBA"
      ]);
    }
}
