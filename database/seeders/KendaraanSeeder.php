<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;
use Database\Factories\KendaraanFactory;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        Kendaraan::factory()->count(10)->create();
    }
}
