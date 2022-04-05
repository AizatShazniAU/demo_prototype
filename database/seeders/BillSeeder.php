<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('bills')->insert([
            'payee' => 'Amin',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '300',
            'payMethod' => 'TUNAI',
            'date' => '2021-11-30',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Ali',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '300',
            'payMethod' => 'KAD',
            'date' => '2021-12-30',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Afia',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '300',
            'payMethod' => 'KAD',
            'date' => '2021-10-03',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Ah Meng',
            'typeBill' => 'CUKAI',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '200',
            'payMethod' => 'KAD',
            'date' => '2021-11-20',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Chong',
            'typeBill' => 'CUKAI',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '200',
            'payMethod' => 'TALIAN',
            'date' => '2021-01-21',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Laila',
            'typeBill' => 'CUKAI',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '200',
            'payMethod' => 'TALIAN',
            'date' => '2021-10-10',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Wei Min',
            'typeBill' => 'CUKAI',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '200',
            'payMethod' => 'TALIAN',
            'date' => '2021-11-13',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Muthu',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => 'PENJAJA',
            'payMethod' => 'KAD',
            'date' => '2021-11-12',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Abu',
            'typeBill' => 'KOMPAUN',
            'detail' =>'Tidak Bayar Parkir',
            'total' => 'PENJAJA',
            'date' => '2021-11-12',
            'payMethod' => 'KAD',
            'status' => 'BELUM',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Lee',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => 'PENJAJA',
            'date' => '2021-11-12',
            'payMethod' => 'KAD',
            'status' => 'BELUM',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Chandra',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '300',
            'date' => '2021-11-12',
            'payMethod' => 'KAD',
            'status' => 'BELUM',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Alia',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '200',
            'payMethod' => 'KAD',
            'date' => '2021-11-16',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Aanya',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '300',
            'payMethod' => 'TUNAI',
            'date' => '2021-11-02',
            'status' => 'SUDAH DIBAYAR',
        ]);
        DB::table('bills')->insert([
            'payee' => 'Bakri',
            'typeBill' => 'KOMPAUN',
            'detail' => 'Tidak Bayar Parkir',
            'total' => '300',
            'payMethod' => 'TUNAI',
            'date' => '2021-11-04',
            'status' => 'SUDAH DIBAYAR',
        ]);
    }
}
