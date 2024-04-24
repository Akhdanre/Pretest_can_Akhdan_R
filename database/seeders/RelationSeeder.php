<?php

namespace Database\Seeders;

use App\Models\relation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        relation::create([
            'from_id' => 1, 
            'destination_id' => 2, 
            'price' => 100000, 
        ]);

        relation::create([
            'from_id' => 2, 
            'destination_id' => 3, 
            'price' => 150000, 
        ]);
    }
}
