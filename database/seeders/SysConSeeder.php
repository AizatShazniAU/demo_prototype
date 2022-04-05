<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SysConSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_cons')->insert([
            'conType' => 'LESEN',
        ]);
        DB::table('sys_cons')->insert([
            'conType' => 'PEMBAYARAN BIL',
        ]);
        DB::table('sys_cons')->insert([
            'conType' => 'PENDAFTARAN GERAI',
        ]);
        DB::table('sys_cons')->insert([
            'conType' => 'PENDAFTARAN TEMUDUGA',
        ]);
        DB::table('sys_cons')->insert([
            'conType' => 'PERJADUALAN MESYUARAT',
        ]);
        DB::table('sys_cons')->insert([
            'conType' => 'LAPORAN',
        ]);
    }
}
