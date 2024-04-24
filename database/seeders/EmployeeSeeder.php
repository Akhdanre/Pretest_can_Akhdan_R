<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'email' => 'employee1@example.com',
            'name' => 'Employee 1',
            'role_id' => 1, 
            'birth_date' => '1990-01-01',
            'address' => 'Address 1',
            'gender' => 'Male',
            'phone_number' => '123456789',
            'status' => true,
            'photo_image' => 'employee1.jpg',
        ]);

        Employee::create([
            'email' => 'employee2@example.com',
            'name' => 'Employee 2',
            'role_id' => 2, 
            'birth_date' => '1995-02-02',
            'address' => 'Address 2',
            'gender' => 'Female',
            'phone_number' => '987654321',
            'status' => true,
            'photo_image' => 'employee2.jpg',
        ]);
    }
}
