<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username'      => 'admin',
            'nama_lengkap'  => 'Administrator',
            'password'      => Hash::make('admin123'),
        ]);

        User::create([
            'username'      => 'dharma12',
            'nama_lengkap'  => 'Dharma Saputra',
            'password'      => Hash::make('123456'),
        ]);
    }
}
