<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poliklinik;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokter extends Model
{
    use HasFactory, SoftDeletes;

   protected $fillable = [
    'nama',
    'spesialis',
    'telepon',
    'email',
    'alamat',
    'jadwal_praktik',
    'poliklinik_id'
];

   


public function poliklinik()
{
    return $this->belongsTo(Poliklinik::class);
}
}
