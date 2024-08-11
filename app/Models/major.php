<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\college;

class major extends Model
{
    use HasFactory;

    protected $table = 'majors';

    public function college()
    {
        return $this->belongsTo(College::class, 'College_ID');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'Major_ID');
    }

}
