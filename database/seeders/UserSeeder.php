<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make('admin@123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'panel',
            'email' => 'panel@panel',
            'password' => Hash::make('panel@123'),
            'role' => 'panel',
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user',
            'password' => Hash::make('user@123'),
            'role' => 'user',
        ]);
        
    }
}
