<?php

use Illuminate\Database\Seeder;
use App\valorreftec;
class ValorRefTecTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      valorreftec::create([
          'nombre_valor_ref_tec' => "Voltaje"
      ]);
      valorreftec::create([
          'nombre_valor_ref_tec' => "Corriente"
      ]);

      valorreftec::create([
          'nombre_valor_ref_tec' => "Potencia"
      ]);

      valorreftec::create([
          'nombre_valor_ref_tec' => "Frecuencias"
      ]);


      valorreftec::create([
          'nombre_valor_ref_tec' => "Rango Temperatura"
      ]);
      valorreftec::create([
          'nombre_valor_ref_tec' => "Capacidad"
      ]);
    }
}
