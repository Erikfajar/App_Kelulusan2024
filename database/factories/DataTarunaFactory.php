<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataTaruna>
 */
class DataTarunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nisn' => $this->faker->unique()->randomNumber(8),
            'nit' => $this->faker->unique()->randomNumber(6),
            'nama' => $this->faker->name,
            'kelas' => 12,
            'kompetensi_keahlian' => $this->faker->randomElement(['RPL', 'ATPH', 'TBSM','TITL','UPW']),
            'keterangan' => $this->faker->randomElement(['lulus', 'tidak lulus']),
        ];
    }
}
