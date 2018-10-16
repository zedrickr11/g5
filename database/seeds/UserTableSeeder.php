<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('users')->delete();
        $user1 = User::create([
        'name' => "Administrador",
        'email' => "admin@igss.com",
        'password' => bcrypt("secret")
        ]); 
        $user1->roles()->sync([1]);


        $user2 = User::create([
        'name' => "Jefe de mantenimiento",
        'email' => "jefe-mantto@igss.com",
        'password' => bcrypt("secret")]);
        $user2->roles()->sync([2]);


        $user3 = User::create([
          'name' => "Jefe de subarea",
          'email' => "jefe-subarea@igss.com",
          'password' => bcrypt("secret")]);
        $user3->roles()->sync([3]);

        
        $user4 = User::create([
          'name' => "Técnico - Ingeniero",
          'email' => "inge@igss.com",
          'password' => bcrypt("secret")]);
        $user4->roles()->sync([4]);
        
    }
}
