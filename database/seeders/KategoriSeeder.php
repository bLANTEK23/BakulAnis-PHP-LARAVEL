<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'kode_kategori' => 'SB',
            'nama_kategori' => 'Sembako',
        ]);
        Kategori::create([
            'kode_kategori' => 'AM',
            'nama_kategori' => 'Alat Mandi',
        ]);
        Kategori::create([
            'kode_kategori' => 'SA',
            'nama_kategori' => 'Sabun Mandi',
        ]);
        Kategori::create([
            'kode_kategori' => 'ATK',
            'nama_kategori' => 'Alat Tulis',
        ]);
        Kategori::create([
            'kode_kategori' => 'AK',
            'nama_kategori' => 'Alat Kebersihan',
        ]);
        Kategori::create([
            'kode_kategori' => 'AS',
            'nama_kategori' => 'Atribut Sekolah',
        ]);
        Kategori::create([
            'kode_kategori' => 'AMI',
            'nama_kategori' => 'Air Minum',
        ]);
        Kategori::create([
            'kode_kategori' => 'SM',
            'nama_kategori' => 'Susu Minuman',
        ]);
        Kategori::create([
            'kode_kategori' => 'MI',
            'nama_kategori' => 'Mie',
        ]);
        Kategori::create([
            'kode_kategori' => 'SC',
            'nama_kategori' => 'Sabun Cuci',
        ]);
    }
}
