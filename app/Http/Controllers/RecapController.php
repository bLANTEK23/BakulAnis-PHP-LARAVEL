<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables; 
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Import\WithHeadingRowFormatter;


class RecapController extends Controller implements WithHeadingRow
{
    public function index()
    {
        return view('pages.recap.index', [
            'title' => 'Rekap',
            'active' => 'recap',
        ]);
    }

    public function data()
    {
        $model = DB::table('rekap')
            ->join('barang', 'rekap.kode_barang', 'barang.kode_barang')
            ->select('rekap.id_rekap', 'rekap.kode_barang', 'barang.nama_barang', 'rekap.tanggal_rekap', 'rekap.stok_awal_rekap', 'rekap.stok_akhir_rekap', 'rekap.kode_status_rekap')
            ->get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('nama_barang', function ($model) {
                return $model->nama_barang;
            })
            ->addColumn('kode_status_rekap', function ($model) {
                if ($model->kode_status_rekap == 'OUB') {
                    return "Outbound";
                } else {
                    return "Inbound";
                }
            })
            ->addColumn('action', function ($model) {
                return (string)view('pages.recap.action', ['model' => $model]);
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function create()
    {
        $dataBarang = DB::table('barang')->get();
        return view('pages.recap.create', [
            'title' => 'Tambah Rekap',
            'active' => 'recap',
            'dataBarang' => $dataBarang
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_barang' => 'required|max:255',
            'tanggal_rekap' => 'required',
            'stok_awal_rekap' => 'required|numeric',
            'stok_akhir_rekap' => 'required|numeric',
        ]);

        if ((int)$request->stok_awal_rekap > (int)$request->stok_akhir_rekap) {
            $validateData['kode_status_rekap'] = 'INB';
        } else {
            $validateData['kode_status_rekap'] = 'OUB';
        }

        DB::table('rekap')->insert($validateData);

        return redirect('/recap')->with('info', "Rekap berhasil ditambah");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = DB::table('rekap')->where('id_rekap', '=', $id)->first();
        $dataBarang = DB::table('barang')->get();
        return view('pages.recap.edit', [
            'title' => 'Edit Rekap',
            'active' => 'recap',
            'data' => $data,
            'dataBarang' => $dataBarang
        ]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'kode_barang' => 'required|max:255',
            'tanggal_rekap' => 'required',
            'stok_awal_rekap' => 'required|numeric',
            'stok_akhir_rekap' => 'required|numeric',
        ]);

        if ((int)$request->stok_awal_rekap > (int)$request->stok_akhir_rekap) {
            $validateData['kode_status_rekap'] = 'INB';
        } else {
            $validateData['kode_status_rekap'] = 'OUB';
        }

        DB::table('rekap')->where('id_rekap', '=', $id)->update($validateData);

        return redirect('/recap')->with('info', "Rekap berhasil diperbarui");
    }

    public function destroy($id)
    {
        try {
            DB::table('rekap')->where('id_rekap', '=', $id)->delete();
            return redirect('/recap')->with('info', "Rekap berhasil dihapus");
        } catch (\Exception $e) {
            return redirect('/recap')->with('info', "Rekap gagal dihapus");
        }
    }

    public function exportToPDF()
    {
        $dataBarang = DB::table('rekap')
            ->join('barang', 'rekap.kode_barang', 'barang.kode_barang')
            ->select('rekap.kode_barang', 'barang.nama_barang', 'rekap.tanggal_rekap', 'rekap.stok_awal_rekap', 'rekap.stok_akhir_rekap', 'rekap.kode_status_rekap')
            ->get();

        $pdf = PDF::loadView('pages.recap.pdf', [
            'dataBarang' => $dataBarang
        ])->setPaper('a4', 'landscape');;
        return $pdf->stream('rekap.pdf');
    }

    public function export_excel()
	{
		return Excel::download(new UserExport, 'user.xlsx');
	}

}