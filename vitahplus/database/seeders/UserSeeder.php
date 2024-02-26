<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Patient
        DB::connection('mysql')->table('users')->insert([
            'name' => 'John Doe',
            'email' => 'patient@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // replace with a real password in production
            'role' => 'patient',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Doctor
        DB::connection('mysql')->table('users')->insert([
            'name' => 'Dr. Jane Smith',
            'email' => 'doctor@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // replace with a real password in production
            'role' => 'doctor',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
