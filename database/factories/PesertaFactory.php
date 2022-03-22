<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'jk' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'minat_jurusan' => $this->faker->randomElement(['RPL', 'OTKP', 'TKJ', 'BDP', 'MMD']),
            'asal_sekolah' => $this->faker->company(),
        ];
    }
}