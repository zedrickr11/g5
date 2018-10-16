<?php

use Illuminate\Database\Seeder;
use App\subcaractec;
class SubGrupTecTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      subcaractec::create([
          'nombre_subgrupo_carac_tecnica' => "General"
      ]);
      subcaractec::create([
          'nombre_subgrupo_carac_tecnica' => "Accesorios"
      ]);

    }
}
