<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory(5)->create();

        $kategori = new KategoriSeeder();
        $barang = new BarangSeeder();
        $statusRekap = new StatusRekapSeeder();

        $kategori->run();
        $barang->run();
        $statusRekap->run();
    }
}
