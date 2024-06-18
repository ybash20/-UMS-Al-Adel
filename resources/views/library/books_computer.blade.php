@extends('layouts.master')
@section('title')
{{ $section->Name }}
@endsection

@section('main')
    <style>
        .main_body_book {
            margin-top: 7%;
            font-family: 'Lemonada', cursive;
            text-align: center;

        }

        .section_departmaent_book {
            font-size: 30px;
            margin-top: 50px;

        }

        .search_books_form_new_books {
            margin-top: 2%;
        }

        /* تنسيق الزر */
        .search_books_form_new_books .search-form-new-books button {
            font-size: 18px;
            padding: 10px 20px;
            background-color: #4CAF50;
            /* لون خلفية الزر */
            color: white;
            /* لون النص */
            border: none;
            border-radius: 5px;
            /* شكل الحواف */
            cursor: pointer;
            transition: background-color 0.3s;
            /* تأثير التحويل */
        }

        .search_books_form_new_books .search-form-new-books button:hover {
            background-color: #45a049;
            /* لون الخلفية عند التحويل */
        }

        .search_books_form_new_books .search-form-new-books button:active {
            background-color: #4CAF50;
            /* لون الخلفية عند النقر */
        }

        /* تنسيق حقل النص */
        .search_books_form_new_books .search-form-new-books input[type="text"] {
            font-size: 18px;
            padding: 10px;
            width: 300px;
            border: 2px solid #4CAF50;
            /* لون الحدود */
            border-radius: 5px;
            /* شكل الحواف */
            transition: border-color 0.3s;
            /* تأثير التحويل */
        }

        .search_books_form_new_books .search-form-new-books input[type="text"]:focus {
            border-color: #45a049;
            /* لون الحدود عند التركيز */
        }



        .books-container-1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin-top: 50px;
        }

        .book-1 {
            width: 30%;
            margin: 20px;
        }

        .book-1 img {
            max-width: 80%;
            max-height: 70%;
            object-fit: fill;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .book-1 img:hover {
            transform: scale(1.1);
        }

        .book-title-1,
        .book-author-1 {
            margin-top: 10px;
            font-size: 16px;
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-all;
            max-height: 3.6em;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .book-title-1:hover,
        .book-author-1:hover {
            transform: scale(1.1);
        }

        .book-title-1 {
            text-align: center;
            font-size: 16px;
            margin-bottom: 5px;
            font-family: 'Lemonada', cursive;
        }

        .book-author-1 {
            text-align: center;
            font-size: 14px;
            margin-top: 5px;
            font-family: 'Lemonada', cursive;
        }

        .error-message_books {
            font-size: 30px;
        }

        @media (max-width: 500px) {

            .book-1 {
                width: 45%;
                margin: 10px;
            }

            .book-1 img {
                max-width: 75%;
                max-height: 65%;
                object-fit: fill;
                border-radius: 8px;
                margin-bottom: 1%;
            }

            .book-title-1 {
                font-size: 14px;
            }

            .book-author-1 {
                font-size: 12px;
            }

            .section_departmaent_book {
                font-size: 24px;
                margin-top: 12%;
            }

            .search_books_form_new_books .search-form-new-books button {
                font-size: 16px;
                padding: 8px 16px;
            }

            .search_books_form_new_books .search-form-new-books input[type="text"] {
                font-size: 16px;
                padding: 8px;
                width: 40%;
            }
        }
    </style>

<div class="main_body_book">
    <div class="section_departmaent_book">
        {{ $section->Name }}
        <div class="search_books_form_new_books">
            <form action="{{ route('showBooksBySection', ['section' => $section->Name]) }}" method="GET" id="search-form" class="search-form-new-books">
                <input type="text" name="query" id="search-query" placeholder="Find the book"
                    value="{{ $query ?? '' }}" class="search_books_input_new_books">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>

    <div id="books-container" class="books-container-1">
        @if (isset($books) && !$books->isEmpty())
            @foreach ($books as $book)
                <div class="book-1">
                    @if ($book->Cover_Image)
                        <img src="{{ asset($book->Cover_Image) }}" alt="Book Cover">
                    @else
                        <img src="{{ asset('image/about.png') }}" alt="Book Cover">
                    @endif

                    <h3 class="book-title-1">Book: {{ $book->Title }}</h3>
                    <p class="book-author-1">Author: {{ $book->Author }}</p>
                </div>
            @endforeach
        @else
            <p class="error-message_books">No books found.</p>
        @endif
    </div>
</div>




    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('query')) {
                const url = new URL(window.location);
                url.searchParams.delete('query');
                window.history.replaceState({}, document.title, url.pathname);
            }
        });
    </script>

@endsection
