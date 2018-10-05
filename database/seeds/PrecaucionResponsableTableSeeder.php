<?php

use Illuminate\Database\Seeder;
use App\PrecaucionResponsable;
class PrecaucionResponsableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      PrecaucionResponsable::create([
        'precaucion_responsable' => "Suspender servicio médico"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Parar, despresurizar y drenar circuito"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Bloqueo mecánico a entradas y salidas de fluidos"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Bloqueo eléctrico y desenergizar"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Aplicar candado en tablero elécrico"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Incrementar ventilación"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Avisar al personal de otra área"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Conectar a tiera el sistema o herramienta"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Descontaminación del equipo y área de trabajo"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Señalizar área de trabajo"
      ]);
      Precaucionresponsable::create([
        'precaucion_responsable' => "Monitorear atmósfera"
      ]);
    }
}
