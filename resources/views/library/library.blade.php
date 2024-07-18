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
                            <h2>{{ $content->Content_English}}</h2>
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
                <path d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
            </svg>
        </button>
        <button id="next">
            <svg viewBox="0 0 256 512">
                <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
            </svg>
        </button>
    </div>
</div>
<script src="js/lib/js_slider_library.js"></script>
@endsection
@section('main')
    <link rel="stylesheet" href="css/lib/stylelib.css">

    <!--About-->
    <div class="main_continar">
        <div class="about">
            <div class="about_tag">
                <h1>{{ cbLang(('About Us')) }}</h1>
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
                <div class="arrows_book">
                    <button class="prev-button"><span><</span></button>
                </div>

                @foreach ($bookShow[$section->id] as $book)
                    <div class="book">
                        <img src="{{ $book->Cover_Image ? asset($book->Cover_Image) : asset('image/about.png') }}" alt="صورة الكتاب">
                        <p>{{ $book->Title }}</p>
                        <p>{{ $book->Author }}</p>
                    </div>
                @endforeach

                <div class="arrows_book">
                    <button class="next-button"><span></span></button>
                </div>
                <form action="{{ route('showBooksBySection', ['section' => $section->Name_Arabic]) }}" method="GET">
                    <button type="submit" class="read-more-button">{{ cbLang('Read more') }}</i>
                    </button>
                </form>
            </div>
        @endforeach
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const rows = document.querySelectorAll('.book_lib_row');
                rows.forEach(row => {
                    const books = row.querySelectorAll('.book');
                    const prevButton = row.querySelector('.prev-button');
                    const nextButton = row.querySelector('.next-button');
                    let currentIndex = 0;
                    let booksPerRow = 3; // Number of books per row
                    let autoSlideInterval; // Interval for automatic slide
                    const intervalTime = 3000; // 3 seconds
                    let touchMoveFlag = false; // Flag to check if touch move happened

                    function showBooks(startIndex) {
                        books.forEach((book, i) => {
                            if (i >= startIndex && i < startIndex + booksPerRow) {
                                book.style.display = 'block';
                                book.classList.add('fade-in');
                            } else {
                                book.style.display = 'none';
                                book.classList.remove('fade-in');
                            }
                        });
                    }

                    function showNextBooks() {
                        const nextIndex = currentIndex + booksPerRow;
                        if (nextIndex < books.length) {
                            currentIndex = nextIndex;
                            showBooks(currentIndex);
                        } else {
                            // If we reach the end, reset to the beginning
                            currentIndex = 0;
                            showBooks(currentIndex);
                        }
                        if (!touchMoveFlag) {
                            resetAutoSlide();
                        }
                    }

                    function showPreviousBooks() {
                        const previousIndex = currentIndex - booksPerRow;
                        if (previousIndex >= 0) {
                            currentIndex = previousIndex;
                            showBooks(currentIndex);
                        } else {
                            // If we reach the beginning, go to the end
                            currentIndex = Math.max(0, books.length - booksPerRow);
                            showBooks(currentIndex);
                        }
                        if (!touchMoveFlag) {
                            resetAutoSlide();
                        }
                    }

                    function adjustBooksPerRow() {
                        if (window.innerWidth < 650) { // Adjust the upper threshold to 700
                            booksPerRow = 2; // Change value to 2 for mobile view
                            prevButton.style.display = 'none';
                            nextButton.style.display = 'none';
                        }
                        else if (window.innerWidth < 900) { // Adjust the upper threshold to 700
                            booksPerRow = 2; // Change value to 2 for mobile view
                            prevButton.style.display = 'none';
                            nextButton.style.display = 'none';
                        }
                        else {
                            booksPerRow = 3; // Default value for non-mobile view
                            prevButton.style.display = 'inline-block';
                            nextButton.style.display = 'inline-block';
                        }
                        showBooks(currentIndex);
                    }

                    function handleTouchStart(event) {
                        xDown = event.touches[0].clientX;
                        touchMoveFlag = false; // Reset touch move flag
                    }

                    function handleTouchMove(event) {
                        if (!xDown) return;

                        let xUp = event.touches[0].clientX;
                        let xDiff = xDown - xUp;

                        if (xDiff > 0) {
                            showNextBooks(); // Swipe left to show next books
                        } else {
                            showPreviousBooks(); // Swipe right to show previous books
                        }
                        touchMoveFlag = true; // Set touch move flag
                        xDown = null; // Reset value
                    }

                    function resetAutoSlide() {
                        clearInterval(autoSlideInterval);
                        autoSlideInterval = setInterval(showNextBooks, intervalTime);
                    }

                    prevButton.addEventListener('click', () => {
                        showPreviousBooks();
                        resetAutoSlide(); // Reset auto slide when button clicked
                    });

                    nextButton.addEventListener('click', () => {
                        showNextBooks();
                        resetAutoSlide(); // Reset auto slide when button clicked
                    });

                    window.addEventListener('resize', adjustBooksPerRow);
                    row.addEventListener('touchstart', handleTouchStart);
                    row.addEventListener('touchmove', handleTouchMove);

                    adjustBooksPerRow(); // Initial call to set up the view
                    autoSlideInterval = setInterval(showNextBooks,
                        intervalTime); // Start auto slide when page loads
                });
            });
        </script>




    @endsection
