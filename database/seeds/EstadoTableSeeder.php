<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Estado::create([

          'estado' => "Bueno"

        ]);
        Estado::create([

          'estado' => "Reparable"

        ]);
        Estado::create([

          'estado' => "Descartable"

        ]);



    }
}
