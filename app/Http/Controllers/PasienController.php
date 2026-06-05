<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('pasien.index', [
            'title' => 'Data Pasien',
            'pasiens' => Pasien::all()
        
            
        ]);
    }

    public function create()
    {
        return view('pasien.create', [
            'title' => 'Tambah Data Pasien'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'umur' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'keluhan' => 'required',
        ], [
            'name.required' => 'Nama pasien wajib diisi!',
            'umur.required' => 'Umur wajib diisi!',
            'jeniskelamin.required' => 'Jenis kelamin wajib dipilih!',
            'alamat.required' => 'Alamat wajib diisi!',
            'keluhan.required' => 'Keluhan wajib diisi!',
        ]);

        Pasien::create($validated);

        return redirect()->route('pasien.index')
            ->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function show(Pasien $pasien)
    {
        return view('pasien.show', [
            'title' => 'Detail Pasien',
            'pasien' => $pasien
        ]);
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', [
            'title' => 'Edit Data Pasien',
            'pasien' => $pasien
        ]);
    }

    public function update(Request $request, Pasien $pasien)
    {
        $validated = $request->validate([
            'name' => 'required',
            'umur' => 'required',
            'jeniskelamin' => 'required',
            'alamat' => 'required',
            'keluhan' => 'required',
        ], [
            'name.required' => 'Nama pasien wajib diisi!',
            'umur.required' => 'Umur wajib diisi!',
            'jeniskelamin.required' => 'Jenis kelamin wajib dipilih!',
            'alamat.required' => 'Alamat wajib diisi!',
            'keluhan.required' => 'Keluhan wajib diisi!',
        ]);

        $pasien->update($validated);

        return redirect()->route('pasien.index')
            ->with('success', 'Data pasien berhasil diubah');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien.index')
            ->with('success', 'Data pasien berhasil dihapus');
    }
}