<?php

namespace Database\Seeders;

use App\Models\StatusRekap;
use Illuminate\Database\Seeder;

class StatusRekapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusRekap::create([
            'kode_status_rekap' => 'INB',
            'nama_status_rekap' => 'Inbound',
        ]);
        StatusRekap::create([
            'kode_status_rekap' => 'OUB',
            'nama_status_rekap' => 'Outbound',
        ]);
    }
}
