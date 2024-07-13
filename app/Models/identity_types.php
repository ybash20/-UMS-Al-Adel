<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identity_types extends Model
{
    use HasFactory;
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'identity_types_id');
    }
}
