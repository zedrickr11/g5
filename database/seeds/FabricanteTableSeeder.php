<?php

use Illuminate\Database\Seeder;
use App\Fabricante;
//use DB;

class FabricanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fabricante::truncate();
        //DB::table('fabricante')->truncate();
        for ($i=1; $i<26 ; $i++) {

          Fabricante::create([

            'direccion_fabricante' => "Guatemala {$i}",
        	  'telefono_fabricante' => "00{$i}",
            'fax_fabricante' => "00{$i}",
            'correo_fabricante' => "fabricante{$i}@gmail.com",
            'contacto_fabricante' => "Contacto{$i}",
            'direccion_guatemala_fabricante' => "Guatemala gt {$i}",
            'telefono_guatemala_fabricante' => "502{$i}",
            'correo_guatemala_fabricante' => "fabricantegt{$i}@gmail.com"

          ]);


        }

    }
}
