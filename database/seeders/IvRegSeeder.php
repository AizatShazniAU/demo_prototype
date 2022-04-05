<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class IvRegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iv_regs')->insert([
            'appName' => 'Amin',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'HQ',
            'att' => 'DATANG',
            'date' => '2021-11-30',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Ali',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'HQ',
            'att' => 'DATANG',
            'date' => '2021-12-30',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Afia',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'HQ',
            'att' => 'DATANG',
            'date' => '2021-10-03',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Ah Meng',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'Main Office',
            'att' => 'DATANG',
            'date' => '2021-11-20',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Chong',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'Main Office',
            'att' => 'TIDAK DATANG',
            'date' => '2021-01-21',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Laila',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'Main Office',
            'att' => 'TIDAK DATANG',
            'date' => '2021-10-10',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Wei Min',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'Main Office',
            'att' => 'TIDAK DATANG',
            'date' => '2021-11-13',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Muthu',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'PENJAJA',
            'att' => 'DATANG',
            'date' => '2021-11-12',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Abu',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'PENJAJA',
            'date' => '2021-11-12',
            'att' => 'DATANG',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Lee',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'PENJAJA',
            'date' => '2021-11-12',
            'att' => 'DATANG',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Chandra',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'HQ',
            'date' => '2021-11-12',
            'att' => 'DATANG',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Alia',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'Main Office',
            'att' => 'DATANG',
            'date' => '2021-11-16',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Aanya',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'HQ',
            'att' => 'DATANG',
            'date' => '2021-11-02',
        ]);
        DB::table('iv_regs')->insert([
            'appName' => 'Bakri',
            'phoneNo' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => 'HQ',
            'att' => 'DATANG',
            'date' => '2021-11-04',
        ]);
    }
}
