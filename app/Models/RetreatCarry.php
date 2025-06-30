<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetreatCarry extends Model
{
    use HasFactory;

    public function retreat()
    {
        return $this->belongsTo(Retreat::class);
    }

    public function getItems(): array
    {
        return array_filter([
            $this->item_1,
            $this->item_2,
            $this->item_3,
            $this->item_4,
            $this->item_5,
        ]);
    }
}
