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




        Departamento::create([

          'iddepartamento' => "A",
          'depto' => "Alta Verapaz",
          'idhospital' => "1",
          'idregion' => "E"

        ]);
        Departamento::create([

          'iddepartamento' => "B",
          'depto' => "Baja Verapaz",
          'idhospital' => "2",
          'idregion' => "E"

        ]);
        Departamento::create([

          'iddepartamento' => "C",
          'depto' => "Chimaltenango (sur)",
          'idhospital' => "3",
          'idregion' => "C"

        ]);
        Departamento::create([

          'iddepartamento' => "c",
          'depto' => "Chimaltenango (norte)",
          'idhospital' => "3",
          'idregion' => "A"

        ]);
        Departamento::create([

          'iddepartamento' => "D",
          'depto' => "Chiquimula",
          'idhospital' => "4",
          'idregion' => "E"

        ]);
        Departamento::create([

          'iddepartamento' => "E",
          'depto' => "Petén",
          'idhospital' => "5",
          'idregion' => "E"

        ]);
        Departamento::create([

          'iddepartamento' => "F",
          'depto' => "El Progreso",
          'idhospital' => "6",
          'idregion' => "A"

        ]);
        Departamento::create([

          'iddepartamento' => "G",
          'depto' => "Quiché (sur)",
          'idhospital' => "7",
          'idregion' => "D"

        ]);
        Departamento::create([

          'iddepartamento' => "g",
          'depto' => "Quiché (norte)",
          'idhospital' => "7",
          'idregion' => "E"

        ]);
        Departamento::create([

          'iddepartamento' => "H",
          'depto' => "Escuintla (oriente)",
          'idhospital' => "8",
          'idregion' => "B"

        ]);
        Departamento::create([

          'iddepartamento' => "h",
          'depto' => "Escuintla (occidente)",
          'idhospital' => "8",
          'idregion' => "C"

        ]);
        Departamento::create([

          'iddepartamento' => "I",
          'depto' => "Guatemala",
          'idhospital' => "9",
          'idregion' => "A"

        ]);
        Departamento::create([

          'iddepartamento' => "J",
          'depto' => "Huehuetenango",
          'idhospital' => "10",
          'idregion' => "D"

        ]);
        Departamento::create([

          'iddepartamento' => "K",
          'depto' => "Izabal",
          'idhospital' => "11",
          'idregion' => "E"

        ]);
        Departamento::create([

          'iddepartamento' => "L",
          'depto' => "Jalapa",
          'idhospital' => "12",
          'idregion' => "A"

        ]);
        Departamento::create([

          'iddepartamento' => "M",
          'depto' => "Jutiapa",
          'idhospital' => "13",
          'idregion' => "A"

        ]);
        Departamento::create([

          'iddepartamento' => "N",
          'depto' => "Quetzaltenango (sur)",
          'idhospital' => "22",
          'idregion' => "C"

        ]);
        Departamento::create([

          'iddepartamento' => "n",
          'depto' => "Quetzaltenango (norte)",
          'idhospital' => "22",
          'idregion' => "D"

        ]);
        Departamento::create([

          'iddepartamento' => "O",
          'depto' => "Retalhuleu",
          'idhospital' => "15",
          'idregion' => "C"

        ]);
        Departamento::create([

          'iddepartamento' => "P",
          'depto' => "Sacatepéquez",
          'idhospital' => "16",
          'idregion' => "A"

        ]);
        Departamento::create([

          'iddepartamento' => "Q",
          'depto' => "San Marcos (sur)",
          'idhospital' => "17",
          'idregion' => "C"

        ]);
        Departamento::create([

          'iddepartamento' => "q",
          'depto' => "San Marcos (norte)",
          'idhospital' => "17",
          'idregion' => "D"

        ]);
        Departamento::create([

          'iddepartamento' => "R",
          'depto' => "Santa Rosa (sur)",
          'idhospital' => "18",
          'idregion' => "B"

        ]);
        Departamento::create([

          'iddepartamento' => "r",
          'depto' => "Santa Rosa (norte)",
          'idhospital' => "18",
          'idregion' => "A"

        ]);
        Departamento::create([

          'iddepartamento' => "S",
          'depto' => "Sololá (sur)",
          'idhospital' => "19",
          'idregion' => "C"

        ]);
        Departamento::create([

          'iddepartamento' => "s",
          'depto' => "Sololá (norte)",
          'idhospital' => "19",
          'idregion' => "D"

        ]);
        Departamento::create([

          'iddepartamento' => "T",
          'depto' => "Suchitepéquez",
          'idhospital' => "20",
          'idregion' => "C"

        ]);
        Departamento::create([

          'iddepartamento' => "U",
          'depto' => "Totonicapán",
          'idhospital' => "21",
          'idregion' => "D"

        ]);
        Departamento::create([

          'iddepartamento' => "V",
          'depto' => "Zacapa",
          'idhospital' => "14",
          'idregion' => "E"

        ]);



    }
}
