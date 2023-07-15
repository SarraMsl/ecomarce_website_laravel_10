<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
    //admin
           [ 'name' => 'Admin',
            'username' => 'admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'admin',
            'status' => 'active',] ,  


    //vendor
            [ 'name' => 'vendor',
            'username' => 'vendor',
            'email' => 'vendor@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'vendor',
            'status' => 'active',] ,

     //user
            [ 'name' => 'user',
            'username' => 'user',
            'email' => 'vuser@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'user',
            'status' => 'active',] ,

            
        ]);
    }
}
