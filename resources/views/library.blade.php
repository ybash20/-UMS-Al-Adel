@extends('layouts.master')
@section('title', 'Library')
<!-- slider -->
@section('divcontent')
    <link rel="stylesheet" href="css/lib/styleslider.css">
    <div class="center">
        <div class="body_slider">
            <div class="slider">
                <!-- list Items -->
                <div class="list">
                    <div class="item active">
                        <img src="image/img1.png">
                        <div class="content">
                            <p>design</p>
                            <h2>Slider 01</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img2.jpg">
                        <div class="content">
                            <p>design</p>
                            <h2>Slider 02</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img3.jpg">
                        <div class="content">
                            <p>design</p>
                            <h2>Slider 03</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img4.jpg">
                        <div class="content">
                            <p>design</p>
                            <h2>Slider 04</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img5.jpg">
                        <div class="content">
                            <p>design</p>
                            <h2>Slider 05</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- button arrows -->
                <div class="arrows">
                    <button id="prev">
                        < </button>
                            <button id="next">></button>
                </div>
                <!-- thumbnail -->
                <div class="thumbnail">
                    <div class="item active">
                        <img src="image/img1.png">
                        <div class="content">
                            Name Slider
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img2.jpg">
                        <div class="content">
                            Name Slider
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img3.jpg">
                        <div class="content">
                            Name Slider
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img4.jpg">
                        <div class="content">
                            Name Slider
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/img5.jpg">
                        <div class="content">
                            Name Slider
                        </div>
                    </div>
                </div>
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
                    <h1>About Us</h1>
                    <p style="font-size: 20px">
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

            <div class="bkrbook">
                <div class="row">
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>hshasuhasjkaskjsdklmaklsmklamklasmasklmasklmaslkmkaklmsklasmklashasjkashasjksjkhjk</h3>
                        <p>اسم المؤلف 1</p>
                    </div>
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسم hshasuhasjkaskjsdklmaklsmklamklasmasklmasklmaslkmkaklmsklasmklashasjkashasjksjkhjk 2</h3>
                        <p>اسم المؤلف 2</p>
                    </div>
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسمhshasuhasjkaskjsdklmaklsmklamklasmasklmasklmaslkmkaklmsklasmklashasjkashasjksjkhjk الكتاب 3
                        </h3>
                        <p>اسم المؤلف 3</p>
                    </div>
                    <button class="read-more-button">Click More</button>
                </div>
                <hr>
                <div class="row">
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسم الكتاب 4</h3>
                        <p>اسم المؤلف 4</p>
                    </div>
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسمhshasuhasjkaskjsdklmaklsmklamklasmasklmasklmaslkmkaklmsklasmklashasjkashasjksjkhjkاسمhshasuhasjkaskjsdklmaklsmklamklasmasklmasklmaslkmkaklmsklasmklashasjkashasjksjkhjkاسمhshasuhasjkaskjsdklmaklsmklamklasmasklmasklmaslkmkaklmsklasmklashasjkashasjksjkhjk
                        </h3>
                        <p>اسم المؤلف 5</p>
                    </div>
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسم الكتاب 6</h3>
                        <p>اسم المؤلف 6</p>
                    </div>
                    <button class="read-more-button">Click More</button>
                </div>
                <hr>
                <div class="row">
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسم الكتاب 7</h3>
                        <p>اسم المؤلف 7</p>
                    </div>
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسم الكتاب 8</h3>
                        <p>اسم المؤلف 8</p>
                    </div>
                    <div class="book">
                        <img src="image/arrival_2.jpg" alt="صورة الكتاب">
                        <h3>اسم الكتاب 9</h3>
                        <p>اسم المؤلف 9</p>
                    </div>
                    <button class="read-more-button">Click More</button>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var readMoreButton = document.querySelector(".read-more-button");
                readMoreButton.addEventListener("click", function() {
                    // إجراء الإجراء الذي ترغب فيه عند النقر على الزر "انقر للمزيد" هنا
                    console.log("تم النقر على الزر!");
                });
            });
        </script>


    @endsection
