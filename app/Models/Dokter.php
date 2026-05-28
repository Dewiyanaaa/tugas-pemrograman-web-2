<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poliklinik;

class Dokter extends Model
{
    protected $fillable = [
    'nama',
    'spesialis',
    'jadwal_praktik',
    'telepon',
    'alamat',
    'poliklinik_id'
];

public function poliklinik()
{
    return $this->belongsTo(Poliklinik::class);
}
}
