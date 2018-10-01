<?php

use Illuminate\Database\Seeder;
use App\Grupo;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Grupo::create([

          'idgrupo' => "01",
          'idarea' => "EB",
          'grupo' => "Equipo para Tratamiento de Agua"
        ]);
        Grupo::create([

          'idgrupo' => "02",
          'idarea' => "EB",
          'grupo' => "Equipo de Esterilización y Desinfección"
        ]);
        Grupo::create([

          'idgrupo' => "03",
          'idarea' => "EM",
          'grupo' => "Equipo de Laboratorio"
        ]);
        Grupo::create([

          'idgrupo' => "04",
          'idarea' => "EM",
          'grupo' => "Equipo Odontológico y Accesorios"
        ]);
        Grupo::create([

          'idgrupo' => "05",
          'idarea' => "EM",
          'grupo' => "Equipo para Diagnóstico Médico"
        ]);
        Grupo::create([

          'idgrupo' => "06",
          'idarea' => "EM",
          'grupo' => "Equipo para Diagnóstico por Imágenes Médicas y Equipos Auxiliares"
        ]);
        Grupo::create([

          'idgrupo' => "07",
          'idarea' => "EM",
          'grupo' => "Equipo de Terapia"
        ]);
        Grupo::create([

          'idgrupo' => "08",
          'idarea' => "EM",
          'grupo' => "Monitores de Parámetros Fisiológicos"
        ]);
        Grupo::create([

          'idgrupo' => "09",
          'idarea' => "EB",
          'grupo' => "Equipo de Alimentación y Dietas"
        ]);
        Grupo::create([

          'idgrupo' => "10",
          'idarea' => "EB",
          'grupo' => "Equipo de Lavandería y Costurería"
        ]);
        Grupo::create([

          'idgrupo' => "11",
          'idarea' => "EB",
          'grupo' => "Sistema Eléctricos"
        ]);
        Grupo::create([

          'idgrupo' => "12",
          'idarea' => "EB",
          'grupo' => "Equipos del Sistema Termodinámico y Equipos auxiliares"
        ]);

      Grupo::create([

        'idgrupo' => "13",
        'idarea' => "EB",
        'grupo' => "Equipos para Instalaciones Hospitalarias Especiales"
      ]);
      Grupo::create([

        'idgrupo' => "14",
        'idarea' => "IC",
        'grupo' => "Equipos de Informática, Comunicación y Accesorios"
      ]);
      Grupo::create([

        'idgrupo' => "15",
        'idarea' => "MT",
        'grupo' => "Equipos para el Mantenimiento Hospitalario"
      ]);
      Grupo::create([

        'idgrupo' => "16",
        'idarea' => "MT",
        'grupo' => "Equipo industrial de uso múltiple"
      ]);
      Grupo::create([

        'idgrupo' => "17",
        'idarea' => "MH",
        'grupo' => "Mobiliario Hospitalario"
      ]);
      Grupo::create([

        'idgrupo' => "18",
        'idarea' => "VT",
        'grupo' => "Vehículos de Transporte"
      ]);
      Grupo::create([

        'idgrupo' => "19",
        'idarea' => "OC",
        'grupo' => "Obra Civil"
      ]);
      Grupo::create([

        'idgrupo' => "20",
        'idarea' => "OC",
        'grupo' => "Mobiliario Administrativo"
      ]);













    }
}
