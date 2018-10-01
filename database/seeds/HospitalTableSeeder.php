<?php

use Illuminate\Database\Seeder;
use App\Hospital;

class HospitalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<22 ; $i++) {

        Hospital::create([


          'hospital' => "hospital {$i}",
          'clave_admin'	=> "clave{$i}"

        ]);


      }
      Hospital::create([


        'hospital' => "Hospital de Quetzaltenango",
        'clave_admin'	=> "1234"

      ]);

    }
}
