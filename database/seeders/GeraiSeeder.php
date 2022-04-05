<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeraiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('gerais')->insert([
            'ownerG' => 'Amin',
            'namaG' => 'Amin & Co.',
            'rentFee' => '500',
            'loc' => 'Depan Masjid UM',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Ali',
            'namaG' => 'Ali & Atuk',
            'rentFee' => '500',
            'loc' => 'sebelah stesen LRT ',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Afia',
            'namaG' => 'Tudung Afia',
            'rentFee' => '500',
            'loc' => 'sebelah stesen LRT ',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Ah Meng',
            'namaG' => 'Ah Meng Electrical',
            'rentFee' => '300',
            'loc' => 'sebelah stesen LRT ',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Chong',
            'namaG' => 'Chong Enterprise',
            'rentFee' => '300',
            'loc' => 'Sebelah Kilang Roti Amada',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Laila',
            'namaG' => 'Laila Cosmetics',
            'rentFee' => '300',
            'loc' => 'Sebelah Kilang Roti Amada',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Wei Min',
            'namaG' => 'Wei Min Accounting',
            'rentFee' => '300',
            'loc' => 'Sebelah Kilang Roti Amada',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Muthu',
            'namaG' => 'Muthu Capathi & Tosai',
            'rentFee' => 'Bawah Jambatan Bagan Ajam',
            'loc' => 'sebelah stesen LRT ',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Abu',
            'namaG' => 'Abu RM2',
            'rentFee' => 'Bawah Jambatan Bagan Ajam',
            'loc' => 'BERMUSIM',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Lee',
            'namaG' => 'Lee Plastic',
            'rentFee' => 'Bawah Jambatan Bagan Ajam',
            'loc' => 'BERMUSIM',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Chandra',
            'namaG' => 'Chandra Banana Leaf Food',
            'rentFee' => '500',
            'loc' => 'BERMUSIM',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Alia',
            'namaG' => 'Alia Sdn. Bhd.',
            'rentFee' => '300',
            'loc' => 'BERMUSIM',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Aanya',
            'namaG' => 'Aanya Fitness',
            'rentFee' => '500',
            'loc' => 'Depan Masjid UM',
        ]);
        DB::table('gerais')->insert([
            'ownerG' => 'Bakri',
            'namaG' => 'Ustaz Nasi Lemak',
            'rentFee' => '500',
            'loc' => 'Depan Masjid UM',
        ]);
    }
}
