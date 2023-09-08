<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceEntry extends Model
{
    use HasFactory;

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function contingencies()
    {
        return $this->hasMany(Contingency::class);
    }
}
