<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'appointments';

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_date',
        'status',
    ];
    // relation ship with user has one
    public function patient()
    {
        return $this->hasOne(User::class, 'id', 'patient_id');
    }

}
