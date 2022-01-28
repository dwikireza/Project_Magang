<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tampil_Barang;
use Illuminate\Support\facades\Storage;

class Tampil_BarangController extends Controller
{
    //
    public function tampil_barang(){
        $barang = barang::all();

        // mengirim data barang ke view barang

        return view('tampil_barang',['barang' => $barang]);
    }
}
