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
      for ($i=1; $i<21 ; $i++) {

        Hospital::create([


          'hospital' => "hospital {$i}",
          'clave_admin'	=> "clave{$i}"

        ]);


      }

    }
}
