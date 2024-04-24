<?php

namespace Database\Seeders;

use App\Models\bus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bus::create([
            'plat_no' => 'B 1234 AB',
            'type' => 'Hino',
            'capacity' => 45,
        ]);

        Bus::create([
            'plat_no' => 'B 5678 CD',
            'type' => 'Mercedes',
            'capacity' => 60,
        ]);
    }
}
