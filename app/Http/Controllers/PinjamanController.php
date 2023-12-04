<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjaman = Pinjaman::all();
        $anggota = \App\Models\Anggota::all();
        $user = \App\Models\User::all();
        return view('pinjaman.index', compact ('pinjaman', 'anggota', 'user'));
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
        Pinjaman::create([
            'tanggal_pinjam' => $request -> tanggal_pinjam,
            'lama_pinjam' => $request -> lama_pinjam,
            'keterangan' => $request -> keterangan,
            'status' => $request -> status,
            'anggota_id' => $request -> anggota_id,
            'user_id' => $request -> user_id,
            ]);
    
            return redirect('pinjaman')->with ('sukses', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjaman $pinjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pinjaman = Pinjaman::find($id);
        $anggota = \App\Models\Anggota::all();
        $user = \App\Models\User::all();

        return view('pinjaman.edit', compact('pinjaman', 'anggota', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pinjaman $pinjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pinjaman = Pinjaman::find($id);
        $pinjaman->delete();

        return redirect('pinjaman')->with('sukses', 'Data berhasil dihapus');
    }
}
