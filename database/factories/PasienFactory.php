<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
      return [
    'name' => fake()->name(),
    'umur' => fake()->numberBetween(1, 90),
    'jeniskelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
    'alamat' => fake()->address(),
    'keluhan' => fake()->randomElement([
    'Demam tinggi',
    'Batuk pilek',
    'Sakit kepala',
    'Nyeri perut',
    'Sesak napas',
    'Pusing',
    'Mual dan muntah'
])
];
    }
}
