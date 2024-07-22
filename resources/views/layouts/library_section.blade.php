    <!--About-->
    <div class="main_continar">
        <div class="news-header">
            <div class="news-header-inner">
                <a href="{{ route('library') }}" style="color: #007bff">
                    {{ cbLang('Library') }}
                </a>
            </div>
        </div>
        <div class="book_lib_row">
            @foreach ($sections as $section)
                <a href="{{ route('showBooksBySection',$section->id) }}" class="book-section">
                    <div class="section-img">
                        <img src="{{ $bookShow[$section->id][0]->Cover_Image ? asset( $bookShow[$section->id][0]->Cover_Image) : asset('image/about.png') }}" alt="صورة الكتاب">
                    </div>
                    <div class="books">
                        @if (App::getLocale() == 'ar')
                            <h2>{{ $section->Name_Arabic }}</h2>
                        @else
                            <h2>{{ $section->Name_English }}</h2>
                        @endif
                        @foreach ($bookShow[$section->id] as $book)
                            <div class="book">
                                <h3 class="book-name">{{ $book->Title }}</h3>
                            </div>
                            @if (!$loop->last)
                                <hr class="book-separator">
                            @endif
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
    </div>
        {{-- <form class="read-more-form" action="{{ route('showBooksBySection', ['section' => $section->Name_English]) }}" method="GET">
            <button type="submit" class="read-more-button">
                {{ cbLang('Read more') }}
            </button>
        </form> --}}
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
