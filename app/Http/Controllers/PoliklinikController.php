<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index(Request $request)
    {
        $keyword = request('keyword');

    $polikliniks = Poliklinik::when($keyword, function ($query) use ($keyword) {
        $query->where('nama', 'like', '%' . $keyword . '%');
    })
    ->paginate(5)
    ->withQueryString();

    return view('poliklinik.index', [
        'title' => 'Data Poliklinik',
        'polikliniks' => $polikliniks
    ]);
    }
}