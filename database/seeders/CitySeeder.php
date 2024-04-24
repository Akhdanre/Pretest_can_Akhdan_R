<?php

namespace Database\Seeders;

use App\Models\city;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        city::create(['name' => 'Jakarta']);
        city::create(['name' => 'Surabaya']);
        city::create(['name' => 'Bandung']);
    }
}
