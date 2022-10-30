<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    function ViewBarang() {
        $barang = Barang::all();
        return view('home', ['barang' => $barang]);
    }

    function DetailBarang($id) {
        $barang = Barang::find($id);
        // dd($barang);
        return view('detail', ['barang' => $barang]);
    }
}
