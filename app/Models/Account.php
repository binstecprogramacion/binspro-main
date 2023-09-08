<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }
}
