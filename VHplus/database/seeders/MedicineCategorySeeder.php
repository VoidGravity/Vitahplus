<?php

namespace Database\Seeders;

use App\Models\MedecineCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['tool', 'equipment'];

        foreach ($categories as $category) {
            MedecineCategory::create([
                'name' => $category,
            ]);
        }
    }
}
