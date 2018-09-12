<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<21 ; $i++) {

        Proveedor::create([

          'direccion_proveedor' => "direccion {$i}",
          'telefono_proveedor' => "502{$i}",
          'fax_proveedor' => "303{$i}",
          'correo_proveedor' => "correo{$i}@proveedor.com",
          'contacto_proveedor' => "proveedor {$i}",

        ]);


      }

    }
}
