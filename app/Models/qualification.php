<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qualification extends Model
{
    use HasFactory;
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'Qualification_ID');
    }
}
