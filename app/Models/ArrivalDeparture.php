<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrivalDeparture extends Model
{
    use HasFactory;

    public function retreat()
    {
        return $this->belongsTo(Retreat::class);
    }
}
