<?php

namespace Database\Factories;

use App\Models\Speciality;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecialityFactory extends Factory
{
    protected $model = Speciality::class;

    public function definition()
    {
        $specialties = [
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
        ];
        return [
            'name' => $this->faker->unique()->randomElement($specialties),
        ];
    }
}