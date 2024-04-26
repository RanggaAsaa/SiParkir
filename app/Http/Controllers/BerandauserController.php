<?php

namespace App\Http\Controllers;

use App\Models\Informasiparkir;
use App\Models\Kendaraanmasuk;
use Illuminate\Http\Request;

class BerandauserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Informasiparkir::all();
        return view('user.after-login', [
            'data' => $data,
            'jumlahkendaraanmasuk' => kendaraanmasuk::all()->count(),
            'jumlahtersisa' => informasiparkir::all()->sum('jumlah_tempat_parkir') - kendaraanmasuk::all()->count(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
