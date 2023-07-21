<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class GoodsController extends Controller
{

    public function index()
    {
        return view('pages.goods.index', [
            'title' => 'Barang',
            'active' => 'goods',
        ]);
    }

    public function data()
    {
        $model = DB::table('barang')->get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return (string)view('pages.goods.action', ['model' => $model]);
            })
            ->addColumn('harga_barang', function ($model) {
                return "Rp " . number_format($model->harga_barang, 2, ',', '.');
            })
            ->addColumn('gambar_barang', function ($model) {
                return '<img src="' . $model->gambar_barang . '" height="50px">';
            })
            ->addColumn('kadaluarsa_barang', function ($model) {
                return Carbon::parse($model->kadaluarsa_barang)->format('d-m-yy');
            })
            ->rawColumns(['action', 'gambar_barang'])
            ->toJson();
    }

    public function create()
    {
        $dataKategori = DB::table('kategori')->get();
        return view('pages.goods.create', [
            'title' => 'Tambah Barang',
            'active' => 'goods',
            'dataKategori' => $dataKategori
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_barang' => 'required|max:255|unique:barang,kode_barang',
            'kode_kategori' => 'required|max:255',
            'nama_barang' => 'required|max:255',
            'harga_barang' => 'required|numeric',
            'gambar_barang' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi_barang' => 'required',
            'kadaluarsa_barang' => 'required|max:255',
        ]);

        $gambarBarangFile = $request->file('gambar_barang');
        $gambarBarangName = time() . "_" . $gambarBarangFile->getClientOriginalName();
        $gambarBarangPath = "media/barang";

        $gambarBarangFile->move($gambarBarangPath, $gambarBarangName);

        $validateData['gambar_barang'] = "/$gambarBarangPath/$gambarBarangName";

        try {
            DB::table('barang')->insert($validateData);
            return redirect('/goods')->with('info', "Barang berhasil ditambah");
        } catch (\Exception $e) {
            return back()->withErrors(['kode_barang' => 'Kode barang tidak boleh sama']);
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = DB::table('barang')->where('kode_barang', '=', $id)->first();
        $dataKategori = DB::table('kategori')->get();
        return view('pages.goods.edit', [
            'title' => 'Tambah Barang',
            'active' => 'goods',
            'data' => $data,
            'dataKategori' => $dataKategori
        ]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'kode_barang' => 'required|max:255',
            'kode_kategori' => 'required|max:255',
            'nama_barang' => 'required|max:255',
            'harga_barang' => 'required|numeric',
            'gambar_barang' => 'mimes:jpeg,png,jpg,gif,svg',
            'deskripsi_barang' => 'required',
            'kadaluarsa_barang' => 'required|max:255',
        ]);

        if ($request->gambar_barang != null) {
            $data = DB::table('barang')->where('id_barang', '=', $id)->get();
            if (File::exists(public_path($data[0]->gambar_barang))) {
                File::delete(public_path($data[0]->gambar_barang));
            }

            $gambarBarangFile = $request->file('gambar_barang');
            $gambarBarangName = time() . "_" . $gambarBarangFile->getClientOriginalName();
            $gambarBarangPath = "media/barang";

            $gambarBarangFile->move($gambarBarangPath, $gambarBarangName);

            $validateData['gambar_barang'] = "/$gambarBarangPath/$gambarBarangName";
        }

        try {
            DB::table('barang')->where('id_barang', '=', $id)->update($validateData);
            return redirect('/goods')->with('info', "Barang berhasil diperbarui");
        } catch (\Exception $e) {
            return back()->withErrors(['kode_barang' => 'Kode barang tidak boleh sama']);
        }

    }

    public function destroy($id)
    {
        try {
            $datas = DB::table('barang')->where('id_barang', '=', $id);
            $data = $datas->get();
            $datas->delete();
            if (File::exists(public_path($data[0]->gambar_barang))) {
                File::delete(public_path($data[0]->gambar_barang));
            }
            return redirect('/goods')->with('info', "Barang berhasil dihapus");
        } catch (\Exception $e) {
            return redirect('/goods')->with('info', "Barang gagal dihapus");
        }
    }
}
