@extends('layouts.master')
@section('title','Library')




<!-- slider -->
@section('divcontent')
<link rel="stylesheet" href="css/lib/styleslider.css">
<div class="bodyslider">
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
        <button id="prev"><</button>
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


{{-- <div class="main">

    <div class="main_tag">
        <h1>WELCOME TO<br><span>BOOK STORE</span></h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda molestias atque laborum 
            non fuga ex deserunt. Exercitationem velit ducimus praesentium, obcaecati hic voluptate id 
            tenetur fuga illum quidem omnis? Rerum?
        </p>
        <a href="#" class="main_btn">Learn More</a>

    </div>

    <div class="main_img">
        <img src="image/table.png">
    </div>

</div> --}}

<!--About-->

{{-- <div class="about">

<div class="about_image">
    <img src="image/about.png">
</div>
<div class="about_tag">
    <h1>About Us</h1>
    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae cumque atque dolor corporis 
        architecto. Voluptate expedita molestias maxime officia natus consectetur dolor quisquam illo? 
        Quis illum nostrum perspiciatis laboriosam perferendis? Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Minus ad eius saepe architecto aperiam laboriosam voluptas nobis voluptates 
        id amet eos repellat corrupti harum consectetur, dolorum dolore blanditiis quam quo.
    </p>
    <a href="#" class="about_btn">Learn More</a>
</div>

</div> --}}


<!--Arrivals-->

<div class="arrivals">
<h1>New Arrivals</h1>

<div class="arrivals_box">

    <div class="arrivals_card">
        <div class="arrivals_image">
            <img src="image/arrival_1.jpg">
        </div>
        <div class="arrivals_tag">
            <p>New Arrivals</p>
            <div class="arrivals_icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <a href="#" class="arrivals_btn">Learn More</a>
        </div>
    </div>
</div>

</div>


@endsection
