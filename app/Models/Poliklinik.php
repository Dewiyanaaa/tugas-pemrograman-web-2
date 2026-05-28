<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Dokter;

class Poliklinik extends Model
{
    use HasFactory;

    protected $fillable = [
    'nama',
    'lokasi',
    'telepon'
];

public function dokters()
{
    return $this->hasMany(Dokter::class);
}
}