<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Starship extends Model
{
    use HasFactory;

    public function starship_class()
    {
        return $this->belongsTo(StarshipClass::class);
    }
}
