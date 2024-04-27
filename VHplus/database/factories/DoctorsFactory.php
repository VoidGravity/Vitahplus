<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Doctors;
use App\Models\Speciality;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctors>
 */
class DoctorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Doctors::class;
    public function definition(): array
    {
        return [
            'rank' => $this->faker->randomElement(['1', '2', '3']),
            'salary' => $this->faker->randomElement(['1000', '2000', '3000']),
            'Address' => $this->faker->address(),
            'speciality_id' => Speciality::factory()->create()->id, // Use the created instance's ID
            'department_id' => Department::factory()->create()->id, // Use the created instance's ID
            'Doctor_image' => $this->faker->imageUrl(),
            'national_id' => $this->faker->imageUrl(),
            'certificate' => $this->faker->imageUrl(),
            'role' => $this->faker->randomElement(['admin', 'doctor', 'nurse']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
