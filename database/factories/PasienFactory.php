<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    public function definition(): array
    {
        $keluhan = [
            'Demam',
            'Batuk pilek',
            'Sakit kepala',
            'Sesak napas',
            'Sakit perut',
            'Diare',
            'Asam lambung',
            'Pusing',
            'Nyeri badan',
            'Flu',
            'Alergi',
            'Sakit gigi',
            'Mual',
            'Lemas',
            'Radang tenggorokan'
        ];

        return [
            'name' => fake('id_ID')->name(),
            'umur' => fake()->numberBetween(1, 90),
            'jeniskelamin' => fake()->randomElement([
                'Laki-laki',
                'Perempuan'
            ]),
            'alamat' => fake('id_ID')->address(),
            'keluhan' => fake()->randomElement($keluhan),
        ];
    }
}