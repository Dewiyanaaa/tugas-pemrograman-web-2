<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $polikliniks = Poliklinik::when($search, function ($query) use ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('poliklinik.index', [
            'title' => 'Data Poliklinik',
            'polikliniks' => $polikliniks
        ]);
    }
}