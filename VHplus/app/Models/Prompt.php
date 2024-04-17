<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Prompt extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'prompts';



    protected $fillable = [
        'user_id',
        'prompt',
        'response',
    ];
}
