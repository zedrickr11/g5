<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AreaTableSeeder::class);
        $this->call(GrupoTableSeeder::class);
        $this->call(SubGrupoTableSeeder::class);

        $this->call(ConfCorrelativoTableSeeder::class);
        $this->call(ConfSubGrupoTableSeeder::class);


        $this->call(EstadoTableSeeder::class);
        $this->call(FabricanteTableSeeder::class);
        $this->call(ProveedorTableSeeder::class);
        $this->call(ServicioTecnicoTableSeeder::class);

        $this->call(HospitalTableSeeder::class);

        $this->call(RegionTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);


        $this->call(TipoUnidadSaludTableSeeder::class);
        $this->call(UnidadSaludTableSeeder::class);

        $this->call(PrecaucionEjecutanteTableSeeder::class);
        $this->call(PrecaucionResponsableTableSeeder::class);
        $this->call(NaturalezaPeligroTableSeeder::class);
        $this->call(TipoTrabajoTableSeeder::class);
        $this->call(AreaMantenimientoTableSeeder::class);


        $this->call(TipoRutinaTableSeeder::class);
        $this->call(CaracteristicaRutinaTableSeeder::class);
        $this->call(SubgrupoRutinaTableSeeder::class);
        $this->call(ValorReferenciaRutinaTableSeeder::class);

        $this->call(CaracteristicaTecnicaTableSeeder::class);
        $this->call(ValorRefTecTableSeeder::class);
        $this->call(SubGrupTecTableSeeder::class);

        $this->call(TecnicoInternoTableSeeder::class);
        $this->call(TecnicoExternoTableSeeder::class);

        //roles y usuarios
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);


    }
}
