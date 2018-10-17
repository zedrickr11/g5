<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([

            'name' => "admin",
            'display_name' => "Administrador"
            
          ]);
          Role::create([

            'name' => "jefe-mantto",
            'display_name' => "Jefe de mantenimiento"
            
          ]);
          Role::create([

            'name' => "jefe-sub",
            'display_name' => "Jefe de subarea"
            
          ]);
          Role::create([

            'name' => "tec-ing",
            'display_name' => "Técnico - Ingeniero"
            
          ]);
    }
}
