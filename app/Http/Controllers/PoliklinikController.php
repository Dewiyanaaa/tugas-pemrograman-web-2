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
}