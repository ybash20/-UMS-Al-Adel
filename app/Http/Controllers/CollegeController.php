<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\college;
use App\Models\content;

class CollegeController extends Controller
{
    public function Business()
    {
        // جلب بيانات الكلية بواسطة الـ ID = 2
        $college = College::find(1);

        // إرسال البيانات إلى صفحة Blade باستخدام compact
        return view('college.business', compact('college'));
    }
    public function computer()
    {
        // جلب بيانات الكلية بواسطة الـ ID = 2
        $college = College::find(2);

        // التحقق من أن البيانات موجودة
        if (!$college) 

            abort(404, 'College not found');
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
        $college = College::find(5);

        // إرسال البيانات إلى صفحة Blade باستخدام compact
        return view('college.translation', compact('college'));
    }
}
