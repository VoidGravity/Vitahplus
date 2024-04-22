<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;


    protected $fillable = [
        'rank',
        'salary',
        'Address',
        'speciality_id',
        'department_id',
        'Doctor_image',
        'national_id',
        'certificate',
        'status',
    ];

    //relation ship with user has one 
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
