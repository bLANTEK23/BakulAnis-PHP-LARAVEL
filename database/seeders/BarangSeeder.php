<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'kode_barang' => 'SA01',
            'kode_kategori' => 'SA',
            'nama_barang' => 'Sabun Lifebuoy',
            'harga_barang' => '2500',
            'gambar_barang' => 'https://source.unsplash.com/350x200?fashion',
            'deskripsi_barang' => 'ini deksripsi',
            'kadaluarsa_barang' => '2020-03-04',
        ]);

        Barang::create([
            'kode_barang' => 'AM01',
            'kode_kategori' => 'AM',
            'nama_barang' => 'Pepsodent Pasta Gigi',
            'harga_barang' => '2500',
            'gambar_barang' => 'https://source.unsplash.com/350x200?fashion',
            'deskripsi_barang' => 'ini deksripsi',
            'kadaluarsa_barang' => '2020-03-04',
        ]);

        Barang::create([
            'kode_barang' => 'AM02',
            'kode_kategori' => 'AM',
            'nama_barang' => 'Sikat Gigi Formula',
            'harga_barang' => '2500',
            'gambar_barang' => 'https://source.unsplash.com/350x200?fashion',
            'deskripsi_barang' => 'ini deksripsi',
            'kadaluarsa_barang' => '2020-03-04',
        ]);

        Barang::create([
            'kode_barang' => 'SA02',
            'kode_kategori' => 'ATK',
            'nama_barang' => 'Shampo Sunsilk Botol',
            'harga_barang' => '2500',
            'gambar_barang' => 'https://source.unsplash.com/350x200?fashion',
            'deskripsi_barang' => 'ini deksripsi',
            'kadaluarsa_barang' => '2020-03-04',
        ]);

        Barang::create([
            'kode_barang' => 'SA03',
            'kode_kategori' => 'ATK',
            'nama_barang' => 'Lifebuoy Shampo Sachet',
            'harga_barang' => '2500',
            'gambar_barang' => 'https://source.unsplash.com/350x200?fashion',
            'deskripsi_barang' => 'ini deksripsi',
            'kadaluarsa_barang' => '2020-03-04',
        ]);

        Barang::create([
            'kode_barang' => 'ATK01',
            'kode_kategori' => 'SA',
            'nama_barang' => 'Buku Gambar A4',
            'harga_barang' => '2500',
            'gambar_barang' => 'https://source.unsplash.com/350x200?fashion',
            'deskripsi_barang' => 'ini deksripsi',
            'kadaluarsa_barang' => '2020-03-04',
        ]);
    }
}
