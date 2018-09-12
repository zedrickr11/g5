<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=1; $i<10 ; $i++) {

        Region::create([


          'idregion' => "{$i}",
          'region' => "region {$i}"

        ]);


      }
    }
}
