<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // Pastikan password terenkripsi
            'role' => 'admin', // Asumsikan kamu menggunakan kolom 'role' untuk membedakan user
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
