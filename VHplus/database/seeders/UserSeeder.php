<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminDoctor = \App\Models\Doctors::factory()->create([
            'role' => 'admin',
        ]);
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('admin');
        // fk for an admin doctor 
        $admin->doctors_id = $adminDoctor->id;       

        $admin->save();
        User::factory()->count(10)->create();
    }
}
