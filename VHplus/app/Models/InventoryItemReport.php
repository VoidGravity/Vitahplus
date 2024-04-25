<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItemReport extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(MedecineCategory::class);
    }
}
