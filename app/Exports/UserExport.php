<?php

namespace App\Exports;

use App\Models\Rekap;
use App\Models\Barang;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::all();
    }
    
    public function headings(): array
    {
        return [
            'Id Barang',
            'Kode Barang',
            'Kode kategori',
            'Nama Barang',
            'Harga Barang',
            'Gambar Barang',
            'Deskripsi Barang',
            'Kadarluasa Barang',
            'Created',
            'Updated',
        ];
    }
}
