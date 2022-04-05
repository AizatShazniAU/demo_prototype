<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Amin',
            'reportType' => 'KEROSAKAN',
            'cat' => 'JALAN RAYA',
            'status' => 'SELESAI',
            'date' => '2021-11-30',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Ali',
            'reportType' => 'KEROSAKAN',
            'cat' => 'JALAN RAYA',
            'status' => 'SELESAI',
            'date' => '2021-12-30',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Afia',
            'reportType' => 'KEROSAKAN',
            'cat' => 'JALAN RAYA',
            'status' => 'SELESAI',
            'date' => '2021-10-03',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Ah Meng',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'status' => 'SELESAI',
            'date' => '2021-11-20',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Chong',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'status' => 'TERIMA',
            'date' => '2021-01-21',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Laila',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'status' => 'TERIMA',
            'date' => '2021-10-10',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Wei Min',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'status' => 'TERIMA',
            'date' => '2021-11-13',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Muthu',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'status' => 'SELESAI',
            'date' => '2021-11-12',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Abu',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'date' => '2021-11-12',
            'status' => 'SELESAI',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Lee',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'date' => '2021-11-12',
            'status' => 'SELESAI',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Chandra',
            'reportType' => 'KEROSAKAN',
            'cat' => 'JALAN RAYA',
            'date' => '2021-11-12',
            'status' => 'SELESAI',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Alia',
            'reportType' => 'KEROSAKAN',
            'cat' => 'ELETRIK',
            'status' => 'SELESAI',
            'date' => '2021-11-16',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Aanya',
            'reportType' => 'KEROSAKAN',
            'cat' => 'JALAN RAYA',
            'status' => 'SELESAI',
            'date' => '2021-11-02',
        ]);
        DB::table('laporans')->insert([
            'title' => 'Benda Rosak',
            'reportBy' => 'Bakri',
            'reportType' => 'KEROSAKAN',
            'cat' => 'JALAN RAYA',
            'status' => 'SELESAI',
            'date' => '2021-11-04',
        ]);
    }
}
