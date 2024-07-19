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
                <button class="next-button"><span>></span></button>
            </div>
            <form action="{{ route('showBooksBySection', ['section' => $section->Name_Arabic]) }}" method="GET">
                <button type="submit" class="read-more-button">{{ cbLang('Read more') }}</i></button>
            </form>
        </div>
    @endforeach
</div>
@push('bottom')
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
@endpush
