<?php

use Illuminate\Database\Seeder;
use App\TipoUnidadSalud;

class TipoUnidadSaludTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        TipoUnidadSalud::create([
          'idtipounidad' => "A",
          'nivel_atencion' => "Primer nivel (Nivel I)",
          'categoria' => "I-1",
          'comp_res' => "1",
          'unidad_medica' => "Consultorio II: Sólo Consulta externa general, atendida por médico general.",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "B",
          'nivel_atencion' => "Segundo nivel (Nivel II)",
          'categoria' => "II-1",
          'comp_res' => "2",
          'unidad_medica' => "Consultorio II: Consulta externa general con algunas especialidades básicas en algunos casos puede incluir atención de emergencia o encamamiento.",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "C",
          'nivel_atencion' => "Segundo nivel (Nivel II)",
          'categoria' => "II-2",
          'comp_res' => "3",
          'unidad_medica' => "Hospital General I: Consulta externa, hospitalización y emergencia de mediana complejidad con las 5 especialidades básicas (MI,C,P,GO y T)",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "D",
          'nivel_atencion' => "Tercer nivel (Nivel III)",
          'categoria' => "III-1",
          'comp_res' => "4",
          'unidad_medica' => "Consultorio III: Sólo consulta externa especializada con subespecialización.",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "E",
          'nivel_atencion' => "Tercer nivel (Nivel III)",
          'categoria' => "III-2",
          'comp_res' => "5",
          'unidad_medica' => "Hospital General II: Consulta externa, hospitalización y emergencia de alta complejidad con especialidades y subespecialidades.",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "F",
          'nivel_atencion' => "Tercer nivel (Nivel III)",
          'categoria' => "III-3",
          'comp_res' => "6",
          'unidad_medica' => "Hospital de una especialidad de referencia nacional: (Traumatología, Salud Mental, Gineco Obstetricia, Rehabilitación y otras)",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "G",
          'nivel_atencion' => "Cuarto nivel (Nivel IV)",
          'categoria' => "IV-1",
          'comp_res' => "7",
          'unidad_medica' => "Hospital Superespecializado: Para trasplantes, micro neurocirugía y otras, incluyendo centros de diagnóstico altamente especializados.",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "H",
          'nivel_atencion' => "Administración Nivel Departamental",
          'categoria' => "V-1",
          'comp_res' => "8",
          'unidad_medica' => "Direcciones Regionales",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "I",
          'nivel_atencion' => "Administración Nivel Departamental",
          'categoria' => "V-2",
          'comp_res' => "8",
          'unidad_medica' => "Direcciones Departamentales",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "J",
          'nivel_atencion' => "Administración Nivel Departamental",
          'categoria' => "V-3",
          'comp_res' => "8",
          'unidad_medica' => "Delegaciones Departamentales",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "K",
          'nivel_atencion' => "Administración Nivel Departamental",
          'categoria' => "V-4",
          'comp_res' => "8",
          'unidad_medica' => "Caja Departamentales",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "L",
          'nivel_atencion' => "Administración Nivel Departamental",
          'categoria' => "V-5",
          'comp_res' => "8",
          'unidad_medica' => "Unidades Integrales de Adscripción (UIA) y Unidades de Adscripción",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "M",
          'nivel_atencion' => "Administración Nivel Central",
          'categoria' => "VI-1",
          'comp_res' => "9",
          'unidad_medica' => "Oficinas Centrales",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "N",
          'nivel_atencion' => "Administración Nivel Central",
          'categoria' => "VI-2",
          'comp_res' => "9",
          'unidad_medica' => "Oficinas Administrativas (Edificio Administrativo, Edificio Torre Café)",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "O",
          'nivel_atencion' => "Administración Nivel Central",
          'categoria' => "VI-3",
          'comp_res' => "9",
          'unidad_medica' => "Bodega, Archivo, Predio",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "P",
          'nivel_atencion' => "Administración Nivel Central",
          'categoria' => "VI-4",
          'comp_res' => "9",
          'unidad_medica' => "Asistencia (Hemodiálisis)",
          'idhospital' => "22"

        ]);
        TipoUnidadSalud::create([
          'idtipounidad' => "Q",
          'nivel_atencion' => "Administración Nivel Central",
          'categoria' => "VI-5",
          'comp_res' => "9",
          'unidad_medica' => "Otras Entidades",
          'idhospital' => "22"

        ]);



    }
}
