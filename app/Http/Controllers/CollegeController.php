<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\college;
use App\Models\content;
use crocodicstudio\crudbooster\helpers\CRUDBooster;

class CollegeController extends Controller
{
    public function computer()
    {
        // جلب بيانات الكلية بواسطة الـ ID = 2
        $college = College::find(1);
        return view('college.computer', compact('college'));
        // التحقق من أن البيانات موجودة
        
        }
    public function Business()
    {
        // جلب بيانات الكلية بواسطة الـ ID = 2
        $college = College::find(2);

        // إرسال البيانات إلى صفحة Blade باستخدام compact
        return view('college.business', compact('college'));
    }
   

         // إرسال البيانات إلى صفحة Blade باستخدام compact
    
    public function islamic()
    {
        // جلب بيانات الكلية بواسطة الـ ID = 2
        $college = College::find(3);

        // إرسال البيانات إلى صفحة Blade باستخدام compact
        return view('college.islamic', compact('college'));
    }

    public function sharia()
    {
        // جلب بيانات الكلية بواسطة الـ ID = 2
        $college = College::find(4);

        // إرسال البيانات إلى صفحة Blade باستخدام compact
        return view('college.sharia', compact('college'));
    }

    public function translation()
    {
        // جلب بيانات الكلية بواسطة الـ ID = 2
        $college = College::find(6);

        // CRUDBooster::insertLog('translation', $college);

        // إرسال البيانات إلى صفحة Blade باستخدام compact
        return view('college.translation', compact('college'));
    }
}
