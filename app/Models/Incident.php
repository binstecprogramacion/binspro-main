<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function maintenanceCategory()
    {
        return $this->belongsTo(MaintenanceCategory::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function incidentStatus()
    {
        return $this->belongsTo(IncidentStatus::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
