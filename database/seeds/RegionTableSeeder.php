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


        Region::create([


          'idregion' => "A",
          'region' => "Metropolitana"

        ]);
        Region::create([


          'idregion' => "B",
          'region' => "Sur"

        ]);
        Region::create([


          'idregion' => "C",
          'region' => "Sur-Occidental"

        ]);
        Region::create([


          'idregion' => "D",
          'region' => "Occidental"

        ]);
        Region::create([


          'idregion' => "E",
          'region' => "Nor-Oriental"

        ]);



    }
}
