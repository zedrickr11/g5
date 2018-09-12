<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      for ($i=1; $i<10 ; $i++) {

        Departamento::create([

          'iddepartamento' => "{$i}",
          'depto' => "Departamento {$i}",
          'idhospital' => "{$i}",
          'idregion' => "{$i}"

        ]);


      }
    }
}
