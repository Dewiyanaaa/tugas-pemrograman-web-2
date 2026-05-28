<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poliklinik;
use Illuminate\Http\Request;


class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $keyword = request('keyword');
    $poliklinik_id = request('poliklinik_id');

    $dokters = Dokter::with('poliklinik')
        ->when($keyword, function ($query) use ($keyword) {
            $query->where('nama', 'like', '%' . $keyword . '%');
        })
        ->when($poliklinik_id, function ($query) use ($poliklinik_id) {
            $query->where('poliklinik_id', $poliklinik_id);
        })
        ->paginate(5)
        ->withQueryString();

    return view('dokter.index', [
        'title' => 'Data Dokter',
        'dokters' => $dokters,
        'polikliniks' => Poliklinik::all()
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('dokter.create', [
        'title' => 'Tambah Data Dokter',
        'polikliniks' => \App\Models\Poliklinik::all()
    ]);
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required',
        'spesialis' => 'required',
        'telepon' => 'required',
        'alamat' => 'required',
        'jadwal_praktik' => 'required',
        'poliklinik_id' => 'required',
    ]);

    Dokter::create($validated);

    return redirect()->route('dokter.index')
        ->with('success', 'Data dokter berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        //
    }
}
