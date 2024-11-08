<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin', // Ganti dengan nama admin yang diinginkan
            'email' => 'admin@bugevilestudio.online', // Ganti dengan email admin
            'password' => Hash::make('admin123'), // Ganti dengan password admin
            'is_admin' => true, // Set sebagai admin
        ]);
    }
}
