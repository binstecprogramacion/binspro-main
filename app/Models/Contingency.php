<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contingency extends Model
{
    use HasFactory;

    public function contingencies()
    {
        return $this->hasMany(Contingency::class);
    }
}
