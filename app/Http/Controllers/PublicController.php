<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function index() {

        $barangs = Barang::all();
        return view('barang-list', ['barangs' => $barangs]);
    }
}
