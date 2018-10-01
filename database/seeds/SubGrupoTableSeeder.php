<?php

use Illuminate\Database\Seeder;
use App\Subgrupo;

class SubGrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //EB01
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo para Tratamiento de Agua",
            'idgrupo' => "01"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Desmineralizador de agua",
            'idgrupo' => "01"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Destilador de agua (Eléctrico)",
            'idgrupo' => "01"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Destilador de agua (Vapor)",
            'idgrupo' => "01"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Dosificador automático de productos químicos",
            'idgrupo' => "01"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Suavizador de agua",
            'idgrupo' => "01"

          ]);

          //EB02
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo de Esterilización y Desinfección",
            'idgrupo' => "02"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Cortadora eléctrica de gasa",
            'idgrupo' => "02"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Entalcadora de guantes",
            'idgrupo' => "02"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Equipo de esterilización y limpieza por ultrasonido",
            'idgrupo' => "02"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Esterilizador a baja temperatura",
            'idgrupo' => "02"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Esterilizador a vapor (con generador de vapor independiente)",
            'idgrupo' => "02"

          ]);

          //EM03
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo Laboratorio",
            'idgrupo' => "03"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Agitador de bolsas",
            'idgrupo' => "03"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Agitador de Pipetas",
            'idgrupo' => "03"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Agitador Magnético",
            'idgrupo' => "03"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Agitador orbital",
            'idgrupo' => "03"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Aglutinómetro (Lámpara de tipeo)",
            'idgrupo' => "03"

          ]);
          //EM04
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo Odontológico y Accesorios",
            'idgrupo' => "04"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Amalgamador",
            'idgrupo' => "04"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Compresor dental y accesorios",
            'idgrupo' => "04"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Equipo para remover cálculo dental (Cavitrón)",
            'idgrupo' => "04"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Lámpara de fotocurado",
            'idgrupo' => "04"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Lámpara dental",
            'idgrupo' => "04"

          ]);

          //EM05
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo para Diagnóstico Médico",
            'idgrupo' => "05"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Audiómetro",
            'idgrupo' => "05"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Báscula",
            'idgrupo' => "05"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Campímetro",
            'idgrupo' => "05"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Detector ultrasónico de latido fetal",
            'idgrupo' => "05"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Electrocardiógrafo (ECG)",
            'idgrupo' => "05"

          ]);

          //EM06
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo para Diagnóstico por imágenes Médicas y Equipos Auxiliares",
            'idgrupo' => "06"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Arterioscopio",
            'idgrupo' => "06"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Broncoscopio",
            'idgrupo' => "06"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Colonoscopio",
            'idgrupo' => "06"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Colposcopio",
            'idgrupo' => "06"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Equipo de Endoscopía",
            'idgrupo' => "06"

          ]);
          //IC14
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo de Informática, Comunicación y Accesorios",
            'idgrupo' => "14"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Equipo de Informática, Comunicación y Accesorios",
            'idgrupo' => "14"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Equipo en red telefónica (Teléfonos, Fax, Centrales, Radios)",
            'idgrupo' => "14"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Equipos en sistema buscapersonas (Voceo)",
            'idgrupo' => "14"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Equipos en sistema de llamadas de enfermeras",
            'idgrupo' => "14"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Sistema de vigilancia y seguridad (Videocámaras)",
            'idgrupo' => "14"

          ]);

          //MT15
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Equipo para Mantenimiento Hospitalario",
            'idgrupo' => "15"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Amperímetro de gancho",
            'idgrupo' => "15"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Analizador de desfibrilador",
            'idgrupo' => "15"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Analizador de ECG (Electrocardiógrafo)",
            'idgrupo' => "15"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Analizador de Rayos X",
            'idgrupo' => "15"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Analizador de Seguridad Eléctrica",
            'idgrupo' => "15"

          ]);

          //MH17
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Mobiliario Hospitalario",
            'idgrupo' => "17"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Andador (con o sin asiento)",
            'idgrupo' => "17"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Armario para instrumentos",
            'idgrupo' => "17"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Armario para Placas Rx",
            'idgrupo' => "17"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Atriles móviles",
            'idgrupo' => "17"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Bacinete infantil",
            'idgrupo' => "17"

          ]);

          //VT18
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Vehículos de Transporte",
            'idgrupo' => "18"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Ambulancia",
            'idgrupo' => "18"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Automóvil",
            'idgrupo' => "18"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Camión",
            'idgrupo' => "18"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Microbús Pasajeros",
            'idgrupo' => "18"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Motocicleta",
            'idgrupo' => "18"

          ]);

          //OC19
          Subgrupo::create([

            'codigosubgrupo' => "00",
            'subgrupo' => "Obra Civil",
            'idgrupo' => "19"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "01",
            'subgrupo' => "Áreas verdes",
            'idgrupo' => "19"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "02",
            'subgrupo' => "Cielo falso",
            'idgrupo' => "19"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "03",
            'subgrupo' => "Drenajes",
            'idgrupo' => "19"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "04",
            'subgrupo' => "Duchas y accesorios",
            'idgrupo' => "19"

          ]);
          Subgrupo::create([

            'codigosubgrupo' => "05",
            'subgrupo' => "Elementos Arquitectónicos (cenefas, voladizos, esculturas, ornamentos, etc.)",
            'idgrupo' => "19"

          ]);




    }
}
