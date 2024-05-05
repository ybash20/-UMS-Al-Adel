@extends('layouts.master')
@section('title', 'Library')
<!-- slider -->
@section('divcontent')
    @include('layouts.slider')
@endsection

    @section('main')
    <link rel="stylesheet" href="css/lib/stylelib.css">
        <!--About-->
        <div class="main_continar">
            <div class="about">
                <div class="about_tag">
                    <h1>About Us</h1>
                    <p>
                        There is a library equipped with reference books and amenities to achieve its goal. The library
                        contains
                        more than 1,800 titles in various sciences, such as: Qur’anic sciences, hadith, jurisprudence,
                        principles, translations, history, languages, translation, economics, management, computer science,
                        and
                        information technology. This is in addition to a number of educational publications, cultural
                        periodicals, peer-reviewed journals, and scientific theses. Internet service and e-books are also
                        available in the electronic resource room.
                        Here on the website we provide the names of books and authors available in the library
                    </p>
                </div>
            </div>
            <hr style="background-color:  black;">
            <!--Arrivals-->
            <div class="arrivals">
                <h1 style="text-align: center">Book</h1>
                <h2 style="text-align: center; direction: rtl">
                    <form action="">
                        <label for="categories">اختر القسم:</label>
                        <select name="categories" id="categories">
                            <option value="S1">الحاسوب</option>
                            <option value="S2">الترجمة</option>
                            <option value="S3"> أدارة الأعمال</option>
                            <option value="S4">قانون</option>
                        </select>
                        <input type="submit" value="تحديد">
                    </form>
                </h2>
                <hr style="background-color:  black;">
            </div>

            <div class="continar_book_library">
                <div class="book_lib_row">
                  <div class="arrows_book">
                  <button class="prev-button"><span><</span></button>
                </div>

                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 1</h3>
                    <p>اسم المؤلف 1</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 2</h3>
                    <p>اسم المؤلف 2</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 3</h3>
                    <p>اسم المؤلف 3</p>
                  </div>
                  <div class="arrows_book">
                  <button class="next-button"><span>></span></button>
                  </div>
                </div>
                <hr>
              
                <div class="book_lib_row">
                  <div class="arrows_book">
                  <button class="prev-button"><span><</span></button>
                  </div>

                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 4</h3>
                    <p>اسم المؤلف 4</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>saugyugggggyugyugggggjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</h3>
                    <p>اسم المؤلف 5</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 6</h3>
                    <p>اسم المؤلف 6</p>
                  </div>
                  <div class="arrows_book">
                  <button class="next-button"><span>></span></button>
                  </div>
                </div>
                <hr>
              
                <div class="book_lib_row">
                  <div class="arrows_book">
                  <button class="prev-button"><span><</span></button>
                  </div>

                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 7</h3>
                    <p>اسم المؤلف 7</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 8</h3>
                    <p>اسم المؤلف 8</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 9</h3>
                    <p>اسم المؤلف 9</p>
                  </div>
                  
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 10</h3>
                    <p>اسم المؤلف 9</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 11</h3>
                    <p>اسم المؤلف 9</p>
                  </div>
                  <div class="book">
                    <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                    <h3>عنوان الكتاب 12</h3>
                    <p>اسم المؤلف 9</p>
                  </div>
                  <div class="arrows_book">
                  <button class="next-button"><span>></span></button>
                  </div>
                </div>
                <hr>
              </div>
              
            <script>
              const rows = document.querySelectorAll('.book_lib_row');
rows.forEach(row => {
  const books = row.querySelectorAll('.book');
  const prevButton = row.querySelector('.prev-button');
  const nextButton = row.querySelector('.next-button');
  let currentIndex = 0;
  const booksPerRow = 3; // عدد الكتب في الصف الواحد
  
  function showBooks(startIndex) {
    books.forEach((book, i) => {
      if (i >= startIndex && i < startIndex + booksPerRow) {
        book.style.display = 'block';
      } else {
        book.style.display = 'none';
      }
    });
  }
  
  function showNextBooks() {
    const nextIndex = currentIndex + booksPerRow;
    if (nextIndex < books.length) {
      currentIndex = nextIndex;
      showBooks(currentIndex);
    }
  }
  
  function showPreviousBooks() {
    const previousIndex = currentIndex - booksPerRow;
    if (previousIndex >= 0) {
      currentIndex = previousIndex;
      showBooks(currentIndex);
    }
  }
  
  prevButton.addEventListener('click', showPreviousBooks);
  nextButton.addEventListener('click', showNextBooks);
  
  showBooks(currentIndex);
});
            </script>
  


    @endsection
