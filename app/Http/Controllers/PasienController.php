<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pasien.index', [
            'title' => 'Data Pasien',
             'pasiens' => Pasien::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create', [
            'title' => 'Tambah Data Pasien'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'umur' => 'required|numeric',
            'jeniskelamin' => 'required',
            'alamat' => 'required|max:255',
            'keluhan' => 'required|max:300',
        ]);

        Pasien::create($validated);

        return to_route('pasien.index')
            ->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', [
            'title' => 'Edit Data Pasien',
            'pasien' => $pasien
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'umur' => 'required|numeric',
            'jeniskelamin' => 'required',
            'alamat' => 'required|max:255',
            'keluhan' => 'required|max:300',
        ]);

        $pasien->update($validated);

        return to_route('pasien.index')
            ->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return to_route('pasien.index')
            ->withSuccess('Data berhasil dihapus');
    }
}