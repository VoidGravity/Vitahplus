<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DepartmentSeeder>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Anesthesiology',
                'Cardiology',
                'Dermatology',
                'Emergency Medicine',
                'Endocrinology',
                'Family Medicine',
                'Gastroenterology',
                'Geriatrics',
                'Hematology',
                'Immunology',
                'Infectious Disease',
                'Internal Medicine',
                'Nephrology',
                'Neurology',
                'Obstetrics and Gynecology (OB/GYN)',
                'Oncology',
                'Ophthalmology',
                'Orthopedics',
                'Otolaryngology (ENT)',
                'Pediatrics',
                'Physical Medicine and Rehabilitation',
                'Psychiatry',
                'Pulmonology',
                'Radiology',
                'Rheumatology',
                'Surgery (various subspecialties like general surgery, neurosurgery, orthopedic surgery, etc.)',
                'Urology',
            ]),
        ];
    }
}
