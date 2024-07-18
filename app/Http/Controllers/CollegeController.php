<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class CollegeController extends Controller
{

    public function __construct()
    {
        // Share colleges data with all views
        $colleges = College::all();
        View::share('colleges', $colleges);
    }

    public function index()
    {
        return view('layouts.master');
    }

    public function show($id)
    {
        $college = College::with('majors')->findOrFail($id);
        return view('college.Computer', compact('college'));
    }
    // public function computer()
    // {
    //     // جلب بيانات الكلية بواسطة الـ ID = 2
    //     $college = College::find(1);
    //     return view('college.computer', compact('college'));
    //     // التحقق من أن البيانات موجودة
        
    //     }
    // public function Business()
    // {
    //     // جلب بيانات الكلية بواسطة الـ ID = 2
    //     $college = College::find(2);

    //     // إرسال البيانات إلى صفحة Blade باستخدام compact
    //     return view('college.business', compact('college'));
    // }
   

    //      // إرسال البيانات إلى صفحة Blade باستخدام compact
    
    // public function islamic()
    // {
    //     // جلب بيانات الكلية بواسطة الـ ID = 2
    //     $college = College::find(3);

    //     // إرسال البيانات إلى صفحة Blade باستخدام compact
    //     return view('college.islamic', compact('college'));
    // }

    // public function sharia()
    // {
    //     // جلب بيانات الكلية بواسطة الـ ID = 2
    //     $college = College::find(4);

    //     // إرسال البيانات إلى صفحة Blade باستخدام compact
    //     return view('college.sharia', compact('college'));
    // }

    // public function Translation_College()
    // {
    //     // جلب بيانات الكلية بواسطة الـ ID = 2
    //     $college = College::find(6);

    //     // إرسال البيانات إلى صفحة Blade باستخدام compact
    //     return view('college.Translation_College', compact('college'));
    // }
}
