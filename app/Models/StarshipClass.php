<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarshipClass extends Model
{
    use HasFactory;

    public function starships()
    {
        return $this->hasMany(Starship::class);
    }
}
