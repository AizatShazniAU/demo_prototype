<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LesenSeeder::class);
        $this->call(LesenPaySeeder::class);
        $this->call(GeraiSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(IvRegSeeder::class);
        $this->call(LaporanSeeder::class);
        $this->call(SysConSeeder::class);
        // \App\Models\User::factory(10)->create();$this->call(AdminUserSeeder::class);
    }
}
