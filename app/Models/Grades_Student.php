<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use App\Models\course;
class Grades_Student extends Model
{
    use HasFactory;
    protected $table = 'grades';

    protected $fillable = ['Student_ID','Course_ID','Grade_30', 'Grade_70', 'Grade_100','Semester']; // قم بتضمين 'Grade_100' هنا إذا لم يت

        // العلاقة مع نموذج الطلاب
    public function student()
    {
        return $this->belongsTo(Student::class, 'Student_ID', 'id');
    }

    // العلاقة مع نموذج المواد الدراسية
    public function course()
    {
        return $this->belongsTo(Course::class, 'Course_ID', 'id');
    }

}
