<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    public function incident()
    {
        return $this->belongsTo(Incident::class);
    }

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class);
    }
}
