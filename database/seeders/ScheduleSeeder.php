<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'relation_id' => 1, 
            'driver_id' => 1, 
            'driver_assist_id' => 2, 
            'bus_id' => 1, 
            'start_at' => '2024-04-24 08:00:00', 
        ]);
    }
}
