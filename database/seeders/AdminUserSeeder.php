<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin', // Ganti dengan nama admin yang diinginkan
            'email' => 'admin@bugevilestudio.online', // Ganti dengan email admin
            'password' => Hash::make('admin123'), // Ganti dengan password admin
            'is_admin' => true, // Set sebagai admin
        ]);
    }
}
