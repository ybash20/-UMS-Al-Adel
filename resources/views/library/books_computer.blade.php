@extends('layouts.master')
@section('title','Books of Computer')
@section('main')
<style>
    
    .main_body_book {
        margin-top: 5%;
        font-family: 'Lemonada', cursive;
        text-align: center;
        
    }

    .section-header-1 {
        font-size: 24px;
        margin-top: 50px;
    }

    .search-box-1 {
        margin-top: 20px;
    }

    .books-container-1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start; /* تغيير من space-around إلى flex-start لتجنب التراص */
        margin-top: 50px;
    }

    .book-1 {
        width: 30%; /* تم تعديل عرض العنصر بنسبة مئوية */
        margin: 20px;
    }

    .book-1 img {
        max-width: 80%; /* تم استبدال width ب max-width لتجنب تجاوز حجم الصور */
        max-height: 70%;
        object-fit: fill;
        border-radius: 8px;
        transition: transform 0.3s ease-in-out; /* تأثير الانتقال */
    }

    /* تعديل حجم الصورة عند التحويل (hover) */
    .book-1 img:hover {
        transform: scale(1.1); /* زيادة حجم الصورة بنسبة 10% عند التحويل */
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
        transition: transform 0.3s ease-in-out; /* تأثير الانتقال */
    }

    /* تعديل حجم اسم الكتاب واسم المؤلف عند التحويل (hover) */
    .book-title-1:hover,
    .book-author-1:hover {
        transform: scale(1.1); /* زيادة حجم النص بنسبة 10% عند التحويل */
    }

    .book-title-1 {
        text-align: center;
        font-size: 16px;
        margin-bottom: 5px;
        font-family: 'Lemonada', cursive;
    }

    .book-author-1 {
        text-align: center;
        font-size: 14px; /* تم تعديل حجم اسم المؤلف */
        margin-top: 5px;
        font-family: 'Lemonada', cursive;
    }

    @media (max-width: 500px) {
        .main_container {
            width: 90%;
            margin: 0 auto; 
        }

        .book-1 {
            width: 45%; /* تم تعديل عرض العنصر بنسبة مئوية */
            margin: 10px; /* تم تعديل الهوامش */
        }

        .book-1 img {
            max-width: 75%; /* تم استبدال width ب max-width لتجنب تجاوز حجم الصور */
            max-height: 65%;
            object-fit: fill;
            border-radius: 8px;
            margin-bottom: 1%;
        }

        .book-title-1 {
            font-size: 14px; /* تم تعديل حجم العنوان */
        }

        .book-author-1 {
            font-size: 12px; /* تم تعديل حجم اسم المؤلف */
        }
    }
</style>


<div class="main_body_book">
    <div class="section-header-1">
        Computer Section
        <div class="search-box-1">
            <input type="text" placeholder="ابحث عن الكتاب">
            <button>بحث</button>
        </div>
    </div>
    <div class="books-container-1">
        <!-- تكرار هذا الجزء لكل كتاب -->

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 1</h3>
            <p class="book-author-1">اسم المؤلف 1</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 2</h3>
            <p class="book-author-1">اسم المؤلف 2</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 3</h3>
            <p class="book-author-1">اسم المؤلف 3</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 4</h3>
            <p class="book-author-1">اسم المؤلف 4</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 5</h3>
            <p class="book-author-1">اسم المؤلف 5</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنواasljisjaioajiojasijaoiasjiajsiojasiojsioajsijaoaisjaiojosijiojasoisjioajsoi الكتاب 6</h3>
            <p class="book-author-1">اسم المؤلف 6</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 7</h3>
            <p class="book-author-1">اسم المؤلف 7</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 8</h3>
            <p class="book-author-1">اسم المؤلف 8</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 9</h3>
            <p class="book-author-1">اسم المؤلف 9</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>

        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>
        <div class="book-1">
            <img src="image/about.png" alt="صورة الكتاب">
            <h3 class="book-title-1">عنوان الكتاب 10</h3>
            <p class="book-author-1">اسم المؤلف 10</p>
        </div>

    </div>
</div>


@endsection
    
