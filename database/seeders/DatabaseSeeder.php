<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'johndoe@example.com',
                'phone_number' => '1234567890',
                'country' => 'United States',
                'balances' => json_encode(['usd' => 100]),
                'total_bonus' => 5,
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more user data as needed
        ]);
    }
}
