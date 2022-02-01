<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\facades\Storage;

class BarangController extends Controller
{
    public function tampil_barang()
    {
        $barang = barang::all();
        return view('tampil_barang', ['barang' => $barang]);
    }

    public function index()
    {
        //mengambil data barang
        $barang = barang::all();

        // mengirim data barang ke view barang
        return view('barang', ['barang' => $barang]);
    }

    public function tambah()
    {
        return view('tambah_barang');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga' => 'required'
        ]);

        barang::create([
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'harga' => $request->harga,
            'gambar' => $request->gambar
        ]);
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = barang::find($id);
        return view('edit_barang', ['barang' => $barang]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga' => 'required'
        ]);

        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->harga = $request->harga;
        $barang->save();

        return redirect('/barang');
    }

    public function hapus($id)
    {
        $barang = barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
