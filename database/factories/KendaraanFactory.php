<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     */
    // * @return array<string, mixed>
    protected $model = Kendaraan::class;

    public function definition(): array
    {
        return [
            'merk' => fake()->company(),
            'model' => fake()->word(),
            'tahun' => fake()->year(),
            'nomor_polisi' => fake()->lexify('??-????-??'),
            'warna' => fake()->colorName(),
            'gambar' => fake()->imageUrl(640, 480, 'transport'),
        ];
    }
}
