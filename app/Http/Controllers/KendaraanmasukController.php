<?php

namespace App\Http\Controllers;
use App\Models\Kendaraanmasuk;
use Illuminate\Http\Request;

class KendaraanmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Kendaraanmasuk::all();
        return view('admin.KendaraanMasuk.data',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = view('admin.KendaraanMasuk.tambah')->render();
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tambah = Kendaraanmasuk::create([
            'blok' => $request->blok,
            'nopol' => $request->nopol,
            'jenis_kendaraan' => $request->jenis_kendaraan
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
    public function edit(string $id, Request $request)
    {
        $sql = Kendaraanmasuk::where('id', $request->id)->first();

        $data = view('admin.KendaraanMasuk', [
            'isi' => $sql,
        ])->render();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $ubah = Kendaraanmasuk::where('id', $id)
            ->update([
                'blok' => $request->blok,
                'nopol' => $request->nopol,
                'jenis_kendaraan' => $request->jenis_kendaraan,
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
        $hapus = Kendaraanmasuk::where('id', $request->id)->delete();
        if ($hapus) {
            return back()->with('alert', 'Data Berhasil Dihapus !');
        } else {
            return back()->with('alert-warning', 'Data Gagal Dihapus !, segera hubungi petugas developer !');
        }
    }
}

