<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index()
    {
        $keyword = request('keyword');

        $polikliniks = Poliklinik::when($keyword, function ($query) use ($keyword) {
            $query->where('nama', 'like', '%' . $keyword . '%');
        })->paginate(5)->withQueryString();

        return view('poliklinik.index', [
            'title' => 'Data Poliklinik',
            'polikliniks' => $polikliniks
        ]);
    }

    public function create()
    {
       return view('poliklinik.create')
        ->with('title', 'Tambah Data Poliklinik');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'telepon' => 'required',
        ]);

        Poliklinik::create($validated);

        return redirect()->route('poliklinik.index')
            ->with('success', 'Data poliklinik berhasil ditambahkan');
    }

    public function edit(Poliklinik $poliklinik)
{
    return view('poliklinik.edit', [
        'title' => 'Edit Data Poliklinik',
        'poliklinik' => $poliklinik
    ]);
}

public function update(Request $request, Poliklinik $poliklinik)
{
    $validated = $request->validate([
        'nama' => 'required',
        'lokasi' => 'required',
        'telepon' => 'required',
    ]);

    $poliklinik->update($validated);

    return redirect()->route('poliklinik.index')
        ->with('success', 'Data poliklinik berhasil diubah');
}

public function destroy(Poliklinik $poliklinik)
{
    $poliklinik->delete();

    return redirect()->route('poliklinik.index')
        ->with('success', 'Data poliklinik berhasil dihapus');
}

public function show(Poliklinik $poliklinik)
{
    return view('poliklinik.show', [
        'title' => 'Detail Poliklinik',
        'poliklinik' => $poliklinik
    ]);
}

}