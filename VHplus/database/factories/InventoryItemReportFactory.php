<?php

namespace Database\Factories;

use App\Models\InventoryItemReport;
use App\Models\MedecineCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InventoryItemReport>
 */
class InventoryItemReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     protected $model = InventoryItemReport::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'category_id' => $this->faker->randomElement(MedecineCategory::all()->pluck('id')->toArray()),
            'quantity' => $this->faker->numberBetween(1, 444),
        ];
    }
}
