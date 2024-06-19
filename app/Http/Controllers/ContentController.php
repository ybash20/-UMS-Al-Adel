<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\content;
use App\Models\content_category;
use App\Models\content_image;

class ContentController extends Controller
{
    public function university_president()
{
    $categories = content_category::all();
    $contents = [];

    // حلقة لجلب المحتويات المرتبطة بكل فئة
    foreach ($categories as $category) {
        // التحقق من اسم الفئة
        if ($category->Name == 'كلمة رئيس الجامعة') {
            // جلب المحتويات التي تنتمي للفئة المحددة بشرط Category_ID
            $contents = Content::where('Category_ID', $category->id)
                ->with(['images' => function ($query) {
                    $query->inRandomOrder(); // جلب الصور بشكل عشوائي
                }])
                ->get();
            
            break; // نستخدم break لإيقاف الحلقة بمجرد العثور على الفئة المناسبة
        }
    }

    return view('Content.University President', compact('contents'));
}


public function SCBT_AlAdel()
{
    $categories = content_category::all();
    $contents = [];

    // حلقة لجلب المحتويات المرتبطة بكل فئة
    foreach ($categories as $category) {
        // التحقق من اسم الفئة
        if ($category->Name == 'كلمة رئيس مجلس أمناء جامعة العادل') {
            // جلب المحتويات التي تنتمي للفئة المحددة بشرط Category_ID
            $contents = Content::where('Category_ID', $category->id)
                ->with(['images' => function ($query) {
                    $query->inRandomOrder(); // جلب الصور بشكل عشوائي
                }])
                ->get();
            
            break; // نستخدم break لإيقاف الحلقة بمجرد العثور على الفئة المناسبة
        }
    }

    return view('Content.SCBT_AlAdel', compact('contents'));
}

public function Students_Affairs()
{
    $categories = content_category::all();
    $contents = [];

    // حلقة لجلب المحتويات المرتبطة بكل فئة
    foreach ($categories as $category) {
        // التحقق من اسم الفئة
        if ($category->Name == 'مقتطفات من اللائحة الموحدة لشؤون الطلاب') {
            // جلب المحتويات التي تنتمي للفئة المحددة بشرط Category_ID
            $contents = Content::where('Category_ID', $category->id)
                ->with(['images' => function ($query) {
                    $query->inRandomOrder(); // جلب الصور بشكل عشوائي
                }])
                ->get();
            
            break; // نستخدم break لإيقاف الحلقة بمجرد العثور على الفئة المناسبة
        }
    }

    return view('Content.Students_Affairs', compact('contents'));
}


public function Foreign_relations()
{
    $categories = content_category::all();
    $contents = [];

    // حلقة لجلب المحتويات المرتبطة بكل فئة
    foreach ($categories as $category) {
        // التحقق من اسم الفئة
        if ($category->Name == 'علاقات خارجية') {
            // جلب المحتويات التي تنتمي للفئة المحددة بشرط Category_ID
            $contents = Content::where('Category_ID', $category->id)
                ->with(['images' => function ($query) {
                    $query->inRandomOrder(); // جلب الصور بشكل عشوائي
                }])
                ->get();
            
            break; // نستخدم break لإيقاف الحلقة بمجرد العثور على الفئة المناسبة
        }
    }

    return view('Content.Foreign_relations', compact('contents'));
}



public function University_Establishment()
{
    $categories = content_category::all();
    $contents = [];

    // حلقة لجلب المحتويات المرتبطة بكل فئة
    foreach ($categories as $category) {
        // التحقق من اسم الفئة
        if ($category->Name == 'نشأة الجامعة') {
            // جلب المحتويات التي تنتمي للفئة المحددة بشرط Category_ID
            $contents = Content::where('Category_ID', $category->id)
                ->with(['images' => function ($query) {
                    $query->inRandomOrder(); // جلب الصور بشكل عشوائي
                }])
                ->get();
            
            break; // نستخدم break لإيقاف الحلقة بمجرد العثور على الفئة المناسبة
        }
    }

    return view('Content.University_Establishment', compact('contents'));
}


public function University_guide()
{
    $categories = content_category::all();
    $contents = [];

    // حلقة لجلب المحتويات المرتبطة بكل فئة
    foreach ($categories as $category) {
        // التحقق من اسم الفئة
        if ($category->Name == 'دليل الجامعة') {
            // جلب المحتويات التي تنتمي للفئة المحددة بشرط Category_ID
            $contents = Content::where('Category_ID', $category->id)
                ->with(['images' => function ($query) {
                    $query->inRandomOrder(); // جلب الصور بشكل عشوائي
                }])
                ->get();
            
            break; // نستخدم break لإيقاف الحلقة بمجرد العثور على الفئة المناسبة
        }
    }

    return view('Content.University_guide', compact('contents'));
}

}
