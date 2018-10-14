<?php

use Illuminate\Database\Seeder;
use App\caracru;
class CaracteristicaRutinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      caracru::create([
        'caracteristica_rutina' => "General"
      ]);
      caracru::create([
        'caracteristica_rutina' => "Caracteristica 1"
      ]);
      caracru::create([
        'caracteristica_rutina' => "Caracteristica 2"
      ]);
      caracru::create([
        'caracteristica_rutina' => "Caracteristica 3"
      ]);
      caracru::create([
        'caracteristica_rutina' => "Caracteristica 4"
      ]);
    }
}
