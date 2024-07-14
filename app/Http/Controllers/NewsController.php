<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\news;
use App\Models\news_category;
use App\Models\news_image;



class NewsController extends Controller
{
    public function getnews()
    {
        $categories = news_category::with(['news' => function ($query) {
            $query->with('images');
        }])->get();

        return view('news.news', compact('categories'));
    }

    public function details_news($id)
    {
        $news = news::with('images', 'category')->findOrFail($id);
        return view('news.details_news', compact('news'));
    }
}
