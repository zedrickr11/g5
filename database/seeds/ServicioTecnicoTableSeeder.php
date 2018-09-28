<?php

use Illuminate\Database\Seeder;
use App\ServicioTecnico;

class ServicioTecnicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<21 ; $i++) {

        ServicioTecnico::create([

          'direccion_servicio_tecnico' => "direccion {$i}",
      	  'telefono_servicio_tecnico' => "502{$i}",
          'fax_servicio_tecnico' => "303{$i}",
          'correo_servicio_mantenimiento' => "correo{$i}@serviciotecnico.com",
          'nombre_contacto_servicio_tecnico' => "contacto {$i}",
          'nombre_empresa_sevicio_tecnico' => "empresa {$i}"

        ]);


      }
    }
}
