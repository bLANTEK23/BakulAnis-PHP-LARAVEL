<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusRekap extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'status_rekap';
    protected $primaryKey = 'id_status_rekap';
    protected $guarded = 'id_status_rekap';
}
