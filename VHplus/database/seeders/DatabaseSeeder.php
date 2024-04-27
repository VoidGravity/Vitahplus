<?php

namespace Database\Seeders;

use App\Models\MedecineCategory;
use App\Models\User;
use Dflydev\DotAccessData\Data;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Comment\Doc;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            // SpecialitySeeder::class,
            // DepartmentSeeder::class,
            MedicineInventorySeeder::class,
            UserSeeder::class,



        ]);

        //this is reserved for the super user // supper admin 

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
