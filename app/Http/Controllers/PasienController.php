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
        
         return view('pasien.index' , [
            'title' => 'Pasien',
           'Pasiens' => Pasien::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pasien.create' , ['title' => ' Create Pasien']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
    'name' => 'required|max:200',
    'umur' => 'required|digits:2|numeric',
    'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
    'alamat' => 'required|max:200',
    'keluhan' =>  'required|max:300',
],[

    'name.required'         => 'Nama lengkap wajib diisi.',
    'name.max'              => 'Nama maksimal 200 karakter.',
    'umur.required'         => 'Umur wajib diisi.',
    'umur.digits'           => 'Umur harus 2 digit angka.',
    'jeniskelamin.required' => 'Pilih jenis kelamin Anda.',
    'jeniskelamin.in'       => 'Pilihan jenis kelamin tidak valid.',
    'alamat.required'       => 'Alamat rumah wajib diisi.',
    'alamat.max'            => 'Alamat maksimal 200 karakter.',
    'keluhan.required'      => 'Isi keluhan Anda.',
    'keluhan.max'           => 'Keluhan maksimal 300 karakter.',


]);

   Pasien::create($validated);
return to_route('pasien.index')->withSuccess('Data berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
    }
}
