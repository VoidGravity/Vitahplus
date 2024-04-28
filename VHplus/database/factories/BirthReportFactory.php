<?php

namespace Database\Factories;

use App\Models\BirthReport;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BirthReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $model = BirthReport::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'Gender' => $this->faker->randomElement(['1', '0']),
            'weight' => $this->faker->randomElement(['10kg','5kg','7kg']),
            'height' => $this->faker->randomElement(['0.5m', '0.4m', '0.3m']),
            'mother_name' => $this->faker->name(),
            'father_name' => $this->faker->name(),
            'report' => $this->faker->sentence(),
            'date' => $this->faker->date(),

        ];
    }
}
