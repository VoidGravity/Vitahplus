<?php

namespace Database\Seeders;

use App\Models\InventoryItemReport;
use App\Models\MedecineCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InventoryItemReport::factory()->count(2)->create();
    }
}
