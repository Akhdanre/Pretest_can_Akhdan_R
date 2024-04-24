<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public $priority = 2;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'driver',
            'description' => 'Driver role',
        ]);

        Role::create([
            'name' => 'driver assistant',
            'description' => 'Driver Assistant role',
        ]);
    }
}
