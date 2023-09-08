<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{

    use HasFactory;
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function personalEntries()
    {
        return $this->hasMany(PersonalEntry::class);
    }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

    public function maintenanceEntries()
    {
        return $this->hasMany(MaintenanceEntry::class);
    }

    public function costs()
    {
        return $this->hasMany(Cost::class);
    }
}
