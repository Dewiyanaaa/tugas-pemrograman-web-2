<?php

namespace Database\Seeders;

use App\Models\Dokter;
use App\Models\Poliklinik;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {

            Dokter::create([
    'nama' => fake()->name(),

    'spesialis' => fake()->randomElement([
        'Dokter Umum',
        'Dokter Gigi',
        'Dokter Anak',
        'Dokter Jantung',
    ]),

    'telepon' => fake()->phoneNumber(),

    'alamat' => fake()->address(),

    'jadwal_praktik' => fake()->randomElement([
        'Senin - Jumat',
        'Senin - Sabtu',
        'Selasa - Kamis',
        'Pagi',
        'Siang',
        'Malam',
    ]),

    'poliklinik_id' => Poliklinik::inRandomOrder()->first()->id,
]);
        }
    }
}