<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function collaborators()
    {
        return $this->hasMany(Collaborator::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }
}
