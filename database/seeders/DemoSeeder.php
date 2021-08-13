<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'user'
        ]);
        DB::table('users')->insert([
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'user'
        ]);
        DB::table('users')->insert([
            'name' =>'super_admin',
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'user'
        ]);
    }
}
