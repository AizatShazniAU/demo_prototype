<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LesenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('lesens')->insert([
            'appName' => 'Amin',
            'busName' => 'Amin & Co.',
            'appType' => 'PASAR MALAM',
            'licType' => 'TETAP',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Ali',
            'busName' => 'Ali & Atuk',
            'appType' => 'PASAR MALAM',
            'licType' => 'BERMUSIM',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Afia',
            'busName' => 'Tudung Afia',
            'appType' => 'PASAR MALAM',
            'licType' => 'BERMUSIM',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Ah Meng',
            'busName' => 'Ah Meng Electrical',
            'appType' => 'PASAR PAGI',
            'licType' => 'BERMUSIM',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Chong',
            'busName' => 'Chong Enterprise',
            'appType' => 'PASAR PAGI',
            'licType' => 'SEMENTARA',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Laila',
            'busName' => 'Laila Cosmetics',
            'appType' => 'PASAR PAGI',
            'licType' => 'SEMENTARA',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Wei Min',
            'busName' => 'Wei Min Accounting',
            'appType' => 'PASAR PAGI',
            'licType' => 'SEMENTARA',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Muthu',
            'busName' => 'Muthu Capathi & Tosai',
            'appType' => 'PENJAJA',
            'licType' => 'BERMUSIM',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Abu',
            'busName' => 'Abu RM2',
            'appType' => 'PENJAJA',
            'licType' => 'BERMUSIM',
            'status' => '',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Lee',
            'busName' => 'Lee Plastic',
            'appType' => 'PENJAJA',
            'licType' => 'BERMUSIM',
            'status' => '',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Chandra',
            'busName' => 'Chandra Banana Leaf Food',
            'appType' => 'PASAR MALAM',
            'licType' => 'BERMUSIM',
            'status' => '',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Alia',
            'busName' => 'Alia Sdn. Bhd.',
            'appType' => 'PASAR PAGI',
            'licType' => 'BERMUSIM',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Aanya',
            'busName' => 'Aanya Fitness',
            'appType' => 'PASAR MALAM',
            'licType' => 'TETAP',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
        DB::table('lesens')->insert([
            'appName' => 'Bakri',
            'busName' => 'Ustaz Nasi Lemak',
            'appType' => 'PASAR MALAM',
            'licType' => 'TETAP',
            // 'licName' => 'SELESAI',
            'status' => 'LULUS',
        ]);
    }
}
