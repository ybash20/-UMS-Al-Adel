@extends('layouts.master')
@section('title', cbLang('Library'))
@section('library', 'active')

<!-- slider -->
@section('divcontent')
    <link rel="stylesheet" href="css/lib/styleslider.css">
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            @foreach ($categories as $category)
                @if (isset($contents[$category->id]) && $contents[$category->id]->count() > 0)
                    @foreach ($contents[$category->id] as $content)
                        @foreach ($content->images as $image)
                            <div class="item active">
                                <img src="{{ $image->Image }}" alt="Content Image">
                                <div class="content">
                                    @if (App::getLocale() == 'ar')
                                        <h2>{{ $content->Content_Arabic }}</h2>
                                        <p>{!! $content->Description_Arabic !!}</p>
                                    @else
                                        <h2>{{ $content->Content_English }}</h2>
                                        <p>{!! $content->Description_English !!}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                @endif
            @endforeach
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev">
                <svg viewBox="0 0 256 512">
                    <path
                        d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
                </svg>
            </button>
            <button id="next">
                <svg viewBox="0 0 256 512">
                    <path
                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
                </svg>
            </button>
        </div>
    </div>
    <script src="js/lib/js_slider_library.js"></script>
@endsection
@section('main')
    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="css/lib/stylelib.css">
        <style>
            .main_continar {
                direction: rtl;
                text-align: right;
            }
        </style>
    @else
        <link rel="stylesheet" href="css/lib/stylelib.css">
    @endif

    <!--About-->
    <div class="main_continar">
        <div class="about">
            <div class="about_tag">
                <h1>{{ cbLang('About Us') }}</h1>
                <p>
                    {{ cbLang('contentlib') }}
                </p>
            </div>
        </div>
        <hr style="background-color:  black;">
        <div class="continar_book_library">
            @foreach ($sections as $section)
                <div class="book_lib_row">
                    @if (App::getLocale() == 'ar')
                        <h2>{{ $section->Name_Arabic }}</h2>
                    @else
                        <h2>{{ $section->Name_English }}</h2>
                    @endif
                    @foreach ($bookShow[$section->id] as $book)
                        <div class="book">
                            <img src="{{ $book->Cover_Image ? asset($book->Cover_Image) : asset('image/about.png') }}"
                                alt="صورة الكتاب">
                            <p>{{ cbLang('Book:') }} {{ $book->Title }}</p>
                            <p>{{ cbLang('Author:') }}{{ $book->Author }}</p>
                        </div>
                    @endforeach
                    <form action="{{ route('showBooksBySection', ['section' => $section->id]) }}" method="GET">
                        <button type="submit" class="read-more-button">{{ cbLang('Read more') }}</i>
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const rows = document.querySelectorAll('.book');

                function checkScroll() {
                    rows.forEach(row => {
                        const rowTop = row.getBoundingClientRect().top;
                        const windowHeight = window.innerHeight;

                        if (rowTop < windowHeight * 0.8) {
                            row.classList.add('visible');
                        }
                    });
                }

                window.addEventListener('scroll', checkScroll);
                checkScroll(); // Check on initial load
            });
        </script>
    @endsection
