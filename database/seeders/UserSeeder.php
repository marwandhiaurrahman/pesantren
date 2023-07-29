<?php

namespace Database\Seeders;

use App\Models\Poliklinik;
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
        $user = User::create([
            "name" => "Admin Super",
            "email" => "marwandhiaurrahman@gmail.com",
            "username" => "adminps",
            "phone" => "089529909036",
            'password' => bcrypt('qweqwe123'),
            'user_verify' => 1,
            'email_verified_at' => now()
        ]);
        $user->assignRole('Admin Super');
    }
}
