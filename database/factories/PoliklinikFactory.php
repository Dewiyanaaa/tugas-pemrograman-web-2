<?php

namespace Database\Factories;

use App\Models\Poliklinik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Poliklinik>
 */
class PoliklinikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'nama' => fake()->randomElement([
            'Poliklinik Umum',
            'Poliklinik Anak',
            'Poliklinik Gigi',
            'Poliklinik Mata',
            'Poliklinik Jantung'
        ]),

        'lokasi' => fake()->randomElement([
            'Gedung A',
            'Gedung B',
            'Lantai 1',
            'Lantai 2'
        ]),

        'telepon' => fake()->phoneNumber(),
    ];
}
}
