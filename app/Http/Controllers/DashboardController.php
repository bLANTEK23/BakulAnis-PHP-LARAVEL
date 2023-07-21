<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = $this->getTotalBarang();
        $dataInbound = $this->getInbound();
        $dataOutbound = $this->getOutbound();
        return view('pages.dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalBarang' => $totalBarang,
            'dataInbound' => $dataInbound,
            'dataOutbound' => $dataOutbound,
        ]);
    }

    public function getTotalBarang()
    {
        $date = Carbon::today()->subDays(7);
        return DB::table('rekap')
            ->where('tanggal_rekap', '>=', $date)
            ->count();
    }

    public function getInbound()
    {
        $date = Carbon::today()->subDays(7);
        return DB::table('rekap')
            ->where('tanggal_rekap', '>=', $date)
            ->where('kode_status_rekap', '=', 'INB')
            ->count();
    }

    public function getOutbound()
    {
        $date = Carbon::today()->subDays(7);
        return DB::table('rekap')
            ->where('tanggal_rekap', '>=', $date)
            ->where('kode_status_rekap', '=', 'OUB')
            ->count();
    }
}
