<?php

namespace Database\Seeders;

use App\Models\Poliklinik;
use Illuminate\Database\Seeder;

class PoliklinikSeeder extends Seeder
{
    public function run(): void
    {
        Poliklinik::factory(10)->create();
    }
}