<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    //relation ship with user
    public function user()
    {
        //bellong to one user
        return $this->belongsTo(User::class);
    }
}
