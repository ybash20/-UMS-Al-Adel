<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class college extends Model
{
    use HasFactory;

    // تحديد اسم الجدول (إذا كان غير الاسم الافتراضي)
    protected $table = 'colleges';

    // تحديد الأعمدة التي يمكن تعبئتها
    protected $fillable = ['Name', 'Dean', 'Dean_Speech', 'Description'];
}
