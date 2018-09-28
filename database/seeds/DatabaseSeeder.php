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




    }
}
