<?php

namespace Database\Seeders;

use App\Models\bus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    public $priority = 1;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bus::create([
            'plat_no' => 'B 1234 AB',
            'type' => 'Hino',
            'capasity' => 45,
        ]);

        bus::create([
            'plat_no' => 'B 5678 CD',
            'type' => 'Mercedes',
            'capasity' => 60,
        ]);
    }
}
