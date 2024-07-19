<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\content;
use crocodicstudio\crudbooster\helpers\CRUDBooster;
use Illuminate\Support\Str;
use DB;

class home extends Controller
{
    public function index(){
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

        CRUDBooster::insertLog('test latestNews',$latestNews);
        return view('layouts.home', compact(
            'sliders',
            'latestNews',
            'mainNews'
        ));
    }
}
