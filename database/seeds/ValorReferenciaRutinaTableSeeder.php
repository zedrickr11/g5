<?php

use Illuminate\Database\Seeder;
use App\valrefru;
class ValorReferenciaRutinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      valrefru::create([
        'descripcion' => "Revisar estado de asiento y tapadera, recomendar
sustitución si es necesario"
      ]);
      valrefru::create([
        'descripcion' => "Revisar estado de manecilla, cambiar si es necesario"
      ]);
      valrefru::create([
        'descripcion' => "Verificar funcionamiento de válvula de entrada y flotador"
      ]);
      valrefru::create([
        'descripcion' => "Verificar funcionamiento de válvula de descarga"
      ]);
      valrefru::create([
        'descripcion' => "Verificar fugas por sello inadecuado de pera de hule"
      ]);
      valrefru::create([
        'descripcion' => "Verificar fugas en pernos de anclaje del tanque y
empaque esponjoso"
      ]);
      valrefru::create([
        'descripcion' => "Cambiar empaques o accesorios si es necesario"
      ]);
      valrefru::create([
        'descripcion' => "Verificar fugas en válvula de control y tubo de abasto"
      ]);
      valrefru::create([
        'descripcion' => "Verificar fugas en la base del sanitario"
      ]);

    }
}
