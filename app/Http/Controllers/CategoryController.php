<?php

namespace App\Http\Controllers;

use App\Models\DonorNotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.category.index', [
            'title' => 'Kategori',
            'active' => 'category',
        ]);
    }

    public function data()
    {
        $model = DB::table('kategori')->get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return (string)view('pages.category.action', ['model' => $model]);
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function create()
    {
        return view('pages.category.create', [
            'title' => 'Tambah Kategori',
            'active' => 'category',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_kategori' => 'required|max:255|unique:kategori,kode_kategori',
            'nama_kategori' => 'required|max:255',
        ]);

        try {
            DB::table('kategori')->insert($validateData);
            return redirect('/category')->with('info', "Kategori berhasil ditambah");
        } catch (\Exception $e) {
            return back()->withErrors(['kode_kategori' => 'Kode kategori tidak boleh sama']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = DB::table('kategori')->where('kode_kategori', '=', $id)->first();
        return view('pages.category.edit', [
            'title' => 'Ubah Kategori',
            'active' => 'category',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'kode_kategori' => 'required|max:255',
            'nama_kategori' => 'required|max:255',
        ]);

        try {
            DB::table('kategori')->where('id_kategori', '=', $id)->update($validateData);
            return redirect('/category')->with('info', "Kategori berhasil diperbarui");
        } catch (\Exception $e) {
            return back()->withErrors(['kode_kategori' => 'Kode kategori tidak boleh sama']);
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('kategori')->where('id_kategori', '=', $id)->delete();
            return redirect('/category')->with('info', "Kategori berhasil dihapus");
        } catch (\Exception $e) {
            return redirect('/category')->with('info', "Kategori gagal dihapus");
        }
    }
}
