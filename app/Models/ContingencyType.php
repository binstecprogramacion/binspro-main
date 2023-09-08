<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContingencyType extends Model
{
    use HasFactory;

    public function maintenanceEntry()
    {
        return $this->belongsTo(MaintenanceEntry::class);
    }

    public function contingencyType()
    {
        return $this->belongsTo(ContingencyType::class);
    }
}
