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
          for ($i=1; $i<11 ; $i++) {

            Subgrupo::create([

              'codigosubgrupo' => "{$i}",
              'subgrupo' => "subgrupo {$i}",
              'idgrupo' => "1"

            ]);}
        for ($i=1; $i<11 ; $i++) {

          Subgrupo::create([

            'codigosubgrupo' => "{$i}",
            'subgrupo' => "subgrupo {$i}",
            'idgrupo' => "2"

          ]);}
          for ($i=1; $i<11 ; $i++) {

            Subgrupo::create([

              'codigosubgrupo' => "{$i}",
              'subgrupo' => "subgrupo {$i}",
              'idgrupo' => "3"

            ]);}
            for ($i=1; $i<11 ; $i++) {

              Subgrupo::create([

                'codigosubgrupo' => "{$i}",
                'subgrupo' => "subgrupo {$i}",
                'idgrupo' => "4"

              ]);}
              for ($i=1; $i<11 ; $i++) {

                Subgrupo::create([

                  'codigosubgrupo' => "{$i}",
                  'subgrupo' => "subgrupo {$i}",
                  'idgrupo' => "5"

                ]);}



}}
