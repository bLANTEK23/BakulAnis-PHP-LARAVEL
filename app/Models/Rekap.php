<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $table = 'rekap';
    protected $primaryKey = 'id_rekap';
    protected $fillable = ['kode_barang', 'tanggal_rekap', 'stok_awal_rekap', 'stok_akhir_rekap', 'kode_status_rekap'];
}
