<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function jobPosition()
    {
        return $this->belongsTo(JobPosition::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
