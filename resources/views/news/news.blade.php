@extends('layouts.master')

@section('title', cbLang('News'))
@section('news', 'active')

@section('main')
    <style>
        .container_news {
            margin: 20px;
            margin-top: 80px;
        }

        .news_section {
            margin-bottom: 30px;
        }

        .news_section h2 {
            font-size: 24px;
            margin-bottom: 10px;
            text-align: -webkit-center;
        }

        .arrows_news {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .news_list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .news_item {
            display: block;
            text-decoration: none;
            color: #333;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            justify-self: center;
        }

        .news_item:hover {
            background-color: #f2f2f2;
        }

        .news_image {
            text-align: center;
        }

        .news_image img {
            width: 300px;
            height: 200px;
            border-radius: 5px;
        }

        .publication_date {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
        }

        .news_title {
            font-size: 18px;
            font-weight: bold;
        }

        .section_separator {
            border-top: 1px solid #ccc;
            margin-top: 30px;
        }

        .news-header-inner {
            text-align: center !important;
            line-height: 1.5;
            font-size: 32px;
            font-weight: 500;
            margin: 30px 0;
        }

        .news-header-inner a {
            color: #007bff;
        }

        .news-header-inner a::after {
            content: '';
            width: 0;
            height: 3px;
            background-color: #00496b;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .news-header-inner a:hover::after {
            width: 10%;
        }
    </style>
    <div class="container_news">
        @foreach ($categories as $category)
            <div class="news_section">
                <div class="news-header-inner">
                    <a>
                        {{ $category->Name }}
                    </a>
                </div>
                <div class="news_list">
                    @php
                        $sortedNews = $category->news->sortByDesc('Publication_date');
                    @endphp
                    @foreach ($sortedNews as $news)
                        <a href="{{ route('news.details', $news->id) }}" class="news_item">
                            <div class="news_image">
                                @if ($news->images->isNotEmpty())
                                    <img src="{{ $news->images->first()->News_Image ? asset($news->images->first()->News_Image) : asset('image/about.png') }}"
                                        alt="News Image">
                                @else
                                    <img src="{{ asset('image/about.png') }}" alt="News Image">
                                @endif
                            </div>
                            <div class="news_content">
                                <p class="publication_date">
                                    {{ \Carbon\Carbon::parse($news->Publication_date)->format('Y-m-d') }}</p>
                                <p class="news_title">{{ $news->Title }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <hr class="section_separator">
            </div>
        @endforeach
    </div>
@endsection