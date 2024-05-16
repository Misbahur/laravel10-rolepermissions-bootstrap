<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Misbahur Rifqi', 
            'email' => 'misbahur@gmail.com',
            'password' => Hash::make('rifqi123')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Rifqi Misbahur', 
            'email' => 'rifqi@gmail.com',
            'password' => Hash::make('rifqi123')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Admin Kita', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
