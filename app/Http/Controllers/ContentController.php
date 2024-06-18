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

}
