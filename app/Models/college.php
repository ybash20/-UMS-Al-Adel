<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\major;

class college extends Model
{
    use HasFactory;

    protected $table = 'colleges';

    public function majors()
    {
        return $this->hasMany(Major::class, 'College_ID');
    }

}
