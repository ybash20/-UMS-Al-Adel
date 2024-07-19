@extends('layouts.master')
@section('title')
{{ $section->Name }}
@endsection
@section('library', 'active')

@section('main')
<style>
    .main_body_book {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
    }

    .section_departmaent_book {
        text-align: center;
        margin-bottom: 20px;
    }

    .section_departmaent_book h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .search_books_form_new_books {
        margin-bottom: 20px;
    }

    .search-form-new-books {
        display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    }

    .search_books_input_new_books {
        padding: 10px;
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    .search-form-new-books button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-top: 10px;
    }

    #books-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        /* grid-gap: 20px; */
    }

    .book-1 {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
        margin: 15px;
        
    }

    .book-1 img {
        width: -webkit-fill-available;
        height: 200px;
        object-fit: scale-down;
        margin-bottom: 10px;
    }

    .book-title-1 {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .book-author-1 {
        font-size: 14px;
        margin-bottom: 0;
    }

    .error-message_books {
        text-align: center;
        font-size: 16px;
        color: red;
    }
</style>
<div class="main_body_book">
    <div class="section_departmaent_book">
        @if (App::getLocale() == 'ar')
        <h2>{{ $section->Name_Arabic }}</h2>
        @else
        <h2>{{ $section->Name_English }}</h2>
        @endif      
        <div class="search_books_form_new_books">
            <form action="{{ route('showBooksBySection', ['section' => $section->Name_Arabic]) }}" method="GET" id="search-form" class="search-form-new-books">
                <input type="text" name="query" id="search-query" placeholder="Find the book"
                    value="{{ $query ?? '' }}" class="search_books_input_new_books" onkeyup="searchBooks()">
            </form>
        </div>
    </div>

    <div id="books-container" class="books-container-1">
        @if (isset($books) && !$books->isEmpty())
            @foreach ($books as $book)
                <div class="book-1 book-item">
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
    function searchBooks() {
        const searchQuery = document.getElementById('search-query').value.toLowerCase();
        const bookItems = document.querySelectorAll('.book-item');

        bookItems.forEach(item => {
            const bookTitle = item.querySelector('.book-title-1').textContent.toLowerCase();
            const bookAuthor = item.querySelector('.book-author-1').textContent.toLowerCase();

            if (bookTitle.includes(searchQuery) || bookAuthor.includes(searchQuery)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>
@endsection


