<?php

namespace App\Http\Controllers;
use App\Models\Kendaraankeluar;
use Illuminate\Http\Request;

class KendaraankeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Kendaraankeluar::all();
        return view('admin.Kendaraankeluar.data',[
            'data' => $data,
            'route' => 'Kendaraan-Keluar', //menyesuaikan route halaman
            'judul' => 'Kendaraan Keluar', //judul menu utama
            'menu' => 'Kendaraan Keluar', //judul halaman
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $data = view ('admin.KendaraanKeluar.tambah')->render();
       return $data;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tambah = Kendaraankeluar::create([
            'blok' => $request->blok,
            'no_pol' => $request->no_pol,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'jenis_kendaraan' => $request->jenis_kendaraan,
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
