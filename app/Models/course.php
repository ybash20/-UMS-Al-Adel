<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grades_Student;

class course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    public function grades()
    {
        return $this->hasMany(Grades_Student::class, 'Course_ID', 'id');
    }

}
