<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grades_Student;

class student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['id', 'Code', 'Email'];

    public function grades()
    {
        return $this->hasMany(Grades_Student::class, 'Student_ID', 'id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'Major_ID');
    }
}
