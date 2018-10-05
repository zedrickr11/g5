<?php

use Illuminate\Database\Seeder;
use App\PrecaucionEjecutante;

class PrecaucionEjecutanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Mascarilla: Filtro---Autónomo---Soldadura---Polvo"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Protección ocular"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Protección contra ruido"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Protección facial"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Protección de la cabeza"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Guantes: Latex---Neopreno---Clínicos---de Cuero/Tela---"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Uso de bata o delantal de protección"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Cinturón y arnés de seguridad"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Extinguidores: PQS---CO2 ---H2O----"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Evitar personal abajo del área de trabajo"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Verificar acceso fijo (escaleras)"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Poteger equipos adyacentes"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Hacer protección con cortina de agua"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Iluminación a prueba de explosión"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Utilizar herrramienta anti-chispa"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Hombre alerta"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Equipo respiracion autónoma"
      ]);
      PrecaucionEjecutante::create([
        'precaucion_ejecutante' => "Botiquín en área y ventilacion artificial"
      ]);
    }
}
