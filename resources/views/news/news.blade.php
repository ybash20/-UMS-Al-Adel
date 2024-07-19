@extends('layouts.master')

@section('title', cbLang('News'))
@section('news', 'active')

@section('main')
@if (App::getLocale() == 'ar')
<link rel="stylesheet" href="css/cssAr/news.css">
@else
<link rel="stylesheet" href="css/cssEN/news.css">
@endif
   <div class="container_news">
    @foreach ($categories as $category)
        <div class="news_section">
            <div class="news-header-inner">
                @if (App::getLocale() == 'ar')
                    <a>
                        {{ $category->Name_Arabic }}
                    </a>
                @else
                    <a>
                        {{ $category->Name_English }}
                    </a>
                @endif
            </div>
            <div class="news_list">
                @php
                    $sortedNews = $category->news->sortByDesc('Publication_date');
                    $showMore = $sortedNews->count() > 3;
                @endphp
                @foreach ($sortedNews->take(3) as $news)
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
                            @if (App::getLocale() == 'ar')
                                <p class="news_title">{{ $news->Title_Arabic }}</p>
                            @else
                                <p class="news_title">{{ $news->Title_English }}</p>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
            @if ($showMore)
                <button class="show-more-button" data-category-id="{{ $category->id }}">{{ cbLang('Read more') }}</button>
                <div class="more-news" data-category-id="{{ $category->id }}" style="display: none;">
                    @foreach ($sortedNews->skip(3) as $news)
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
                                @if (App::getLocale() == 'ar')
                                    <p class="news_title">{{ $news->Title_Arabic }}</p>
                                @else
                                    <p class="news_title">{{ $news->Title_English }}</p>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
            <button class="show-less-button" data-category-id="{{ $category->id }}" style="display: none;">{{ cbLang('Read less') }}</button>
            <hr class="section_separator">
        </div>
    @endforeach
</div>
<script>
    const showMoreButtons = document.querySelectorAll('.show-more-button');
    const showLessButtons = document.querySelectorAll('.show-less-button');

    showMoreButtons.forEach(button => {
        button.addEventListener('click', () => {
            const categoryId = button.dataset.categoryId;
            const moreNewsContainer = document.querySelector(
                `.more-news[data-category-id="${categoryId}"]`);
            const showLessButton = document.querySelector(
                `.show-less-button[data-category-id="${categoryId}"]`);

            moreNewsContainer.style.display = 'grid';
            button.style.display = 'none';
            showLessButton.style.display = 'block';
        });
    });

    showLessButtons.forEach(button => {
        button.addEventListener('click', () => {
            const categoryId = button.dataset.categoryId;
            const moreNewsContainer = document.querySelector(
                `.more-news[data-category-id="${categoryId}"]`);
            const showMoreButton = document.querySelector(
                `.show-more-button[data-category-id="${categoryId}"]`);

            moreNewsContainer.style.display = 'none';
            button.style.display = 'none';
            showMoreButton.style.display = 'block';
        });
    });
</script>
@endsection
