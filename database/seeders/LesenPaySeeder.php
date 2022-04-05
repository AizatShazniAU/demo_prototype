<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LesenPaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Amin',
            // 'busName' => 'Amin & Co.',
            'lesenFee' => '200',
            'payMet' => 'TUNAI',
            'date' => '2021-11-30',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Ali',
            // 'busName' => 'Ali & Atuk',
            'lesenFee' => '200',
            'payMet' => 'KAD',
            'date' => '2021-12-30',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Afia',
            // 'busName' => 'Tudung Afia',
            'lesenFee' => '200',
            'payMet' => 'KAD',
            'date' => '2021-10-03',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Ah Meng',
            // 'busName' => 'Ah Meng Electrical',
            'lesenFee' => 'PASAR PAGI',
            'payMet' => 'KAD',
            'date' => '2021-11-20',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Chong',
            // 'busName' => 'Chong Enterprise',
            'lesenFee' => 'PASAR PAGI',
            'payMet' => 'TALIAN',
            'date' => '2021-01-21',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Laila',
            // 'busName' => 'Laila Cosmetics',
            'lesenFee' => 'PASAR PAGI',
            'payMet' => 'TALIAN',
            'date' => '2021-10-10',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Wei Min',
            // 'busName' => 'Wei Min Accounting',
            'lesenFee' => 'PASAR PAGI',
            'payMet' => 'TALIAN',
            'date' => '2021-11-13',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Muthu',
            // 'busName' => 'Muthu Capathi & Tosai',
            'lesenFee' => 'PENJAJA',
            'payMet' => 'KAD',
            'date' => '2021-11-12',
            'status' => 'SELESAI',
        ]);
        // DB::table('lesen_pays')->insert([
        //     'lesen_id' => 'Abu',
        //     // 'busName' => 'Abu RM2',
        //     'lesenFee' => 'PENJAJA',
        //     'payMet' => 'KAD',
        //     'status' => '',
        // ]);
        // DB::table('lesen_pays')->insert([
        //     'lesen_id' => 'Lee',
        //     // 'busName' => 'Lee Plastic',
        //     'lesenFee' => 'PENJAJA',
        //     'payMet' => 'KAD',
        //     'status' => '',
        // ]);
        // DB::table('lesen_pays')->insert([
        //     'lesen_id' => 'Chandra',
        //     // 'busName' => 'Chandra Banana Leaf Food',
        //     'lesenFee' => '200',
        //     'payMet' => 'KAD',
        //     'status' => '',
        // ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Alia',
            // 'busName' => 'Alia Sdn. Bhd.',
            'lesenFee' => 'PASAR PAGI',
            'payMet' => 'KAD',
            'date' => '2021-11-16',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Aanya',
            // 'busName' => 'Aanya Fitness',
            'lesenFee' => '200',
            'payMet' => 'TUNAI',
            'date' => '2021-11-02',
            'status' => 'SELESAI',
        ]);
        DB::table('lesen_pays')->insert([
            'lesen_id' => 'Bakri',
            // 'busName' => 'Ustaz Nasi Lemak',
            'lesenFee' => '200',
            'payMet' => 'TUNAI',
            'date' => '2021-11-04',
            'status' => 'SELESAI',
        ]);
    }
}
