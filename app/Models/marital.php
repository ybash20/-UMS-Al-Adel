<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marital extends Model
{
    use HasFactory;
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'Marital_ID');
    }
}
