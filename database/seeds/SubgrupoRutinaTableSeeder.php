<?php

use Illuminate\Database\Seeder;
use App\subru;
class SubgrupoRutinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      subru::create([
        'subgrupo_rutina' => "General"
      ]);
      subru::create([
        'subgrupo_rutina' => "Subgrupo 1"
      ]);
      subru::create([
        'subgrupo_rutina' => "Subgrupo 2"
      ]);
      subru::create([
        'subgrupo_rutina' => "Subgrupo 3"
      ]);
      subru::create([
        'subgrupo_rutina' => "Subgrupo 4"
      ]);
    }
}
