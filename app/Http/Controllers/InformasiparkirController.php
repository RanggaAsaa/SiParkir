<?php

namespace App\Http\Controllers;

use App\Models\informasiparkir;
use Illuminate\Http\Request;

class InformasiparkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = informasiparkir::all();
        return view('admin.InformasiParkir.data', [
            'data' => $data,
            'route' => 'InformasiParkir', //menyesuaikan route halaman
            'judul' => 'Informasi Parkir', //judul menu utama
            'menu' => 'Informasi Parkir', //judul halaman
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = view('admin.InformasiParkir.tambah')->render();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tambah = informasiparkir::create([
            'jumlah_tempat' => $request->jumlah_tempat,
            'tempat_terpakai' => $request->tempat_terpakai,
            'sisa_tempat' => $request->sisa_tempat,
        ]);

        if ($tambah) {
            return back()->with('alert', 'Data Berhasil Ditambahkan !');
        } else {
            return back()->with('alert-warning', 'Data Gagal Ditambahkan !, segera hubungi petugas developer !');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,Request $request)
    {
        //
        $sql = informasiparkir::where('id', $request->id)->first();

        $data = view('admin.InformasiParkir.detail', [
            'isi' => $sql,
        ])->render();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $ubah = informasiparkir::where('id', $id)
            ->update([
            'jumlah_tempat' => $request->jumlah_tempat,
            'tempat_terpakai' => $request->tempat_terpakai,
            'sisa_tempat' => $request->sisa_tempat,

            ]);
        if ($ubah) {
            return back()->with('alert', 'Data Berhasil Diubah !');
        } else {
            return back()->with('alert-warning', 'Data Gagal Ditambahkan !, segera hubungi petugas developer !');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        //
        $hapus = informasiparkir::where('id', $request->id)->delete();
        return $hapus;
    }
}
