<?php

namespace App\Http\Controllers;

use App\Models\major;
use Illuminate\Http\Request;
use App\Models\news;
use App\Models\content;
use App\Models\book;
use App\Models\library_section;
use App\Models\college;
use App\Helpers\UMS;
use Illuminate\Support\Str;
use DB;

class home extends Controller
{
    public function index()
    {
        $sliders = Content::with('Images')
            ->where('Category_ID', 10)
            ->get();

        $latestNews = news::with(['category', 'images'])
            ->orderBy('Publication_date', 'desc')
            ->skip(1)
            ->take(3)
            ->get();
        $mainNews = news::with(['category', 'images'])
            ->orderBy('Publication_date', 'desc')
            ->take(1)
            ->get();

        foreach ($latestNews as $newsItem) {
            $newsItem->Article_Arabic = Str::limit($newsItem->Article_Arabic, 220);
            $newsItem->Article_English = Str::limit($newsItem->Article_English, 220);
        }
        foreach ($mainNews as $newsItem) {
            $newsItem->Article_Arabic = Str::limit($newsItem->Article_Arabic, 220);
            $newsItem->Article_English = Str::limit($newsItem->Article_English, 220);
        }

        $emp = DB::table('ums_users')->count();
        $major_count = DB::table('majors')->count();
        $colleges_count = DB::table('colleges')->count();
        $books = DB::table('books')->count();
        $students = DB::table('students')->count();

        $sections = library_section::all();
        $colleges = college::all();
        $bookShow = [];

        foreach ($sections as $section) {
            $bookShow[$section->id] = book::where('Section_ID', $section->id)
                ->inRandomOrder()
                ->limit(4) // جلب 4 كتب عشوائية لكل قسم
                ->get();
        }
        foreach ($colleges as $college) {
            $majors[$college->id] = major::where('College_ID', $college->id)
                ->inRandomOrder()
                ->limit(4) // جلب 4 كتب عشوائية لكل قسم
                ->get();
        }

        return view('layouts.home', compact(
            'sliders',
            'latestNews',
            'mainNews',
            'students',
            'books',
            'colleges_count',
            'major_count',
            'emp',
            'sections',
            'bookShow',
            'colleges',
            'majors'
        ));
    }
}
