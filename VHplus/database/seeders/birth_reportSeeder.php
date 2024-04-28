<?php

namespace Database\Seeders;

use App\Models\BirthReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class birth_reportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BirthReport::factory()->count(10)->create();
    }
}
