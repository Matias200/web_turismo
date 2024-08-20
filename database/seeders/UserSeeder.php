<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ])->assignRole('Super Administrador');

        User::create([
            'name' => 'Victor Perez',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('victor123'),
        ])->assignRole('Organizador');

        User::create([
            'name' => 'Juan Gomez',
            'email' => 'juan@gmail.com',
            'password' => bcrypt('juan123'),
        ])->assignRole('Organizador');
    }
}
