@extends('layouts.master')
@section('title',cbLang('News Details'))
@section('details_news', 'active')
@section('about', 'active')

@section('main')
<style>
    .details_news-main {
        margin-top: 7%;
        margin-bottom: 3%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        height: 100%;
        flex-wrap: wrap;
    }
    
    .details_news-content {
        width: 100%;
        text-align: center;
    }
    
    .details_news-images {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    justify-content: center;
}

.details_news-image {
    width: 100%;
    max-width: 85%; /* تحديد الحد الأقصى للعرض */
    height: auto;
    border-radius: 15px;
    border: 4px solid #5bb3fa;
    margin-bottom: 15px;
    margin-top: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    object-fit: fill;
    margin-left: auto;
    margin-right: auto; /* لمحاذاة الصور في المنتصف */
}

    .details_news-image:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }
    
    .details_news-caption {
        font-size: 35px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }
    
    .details_news-caption2 {
        font-size: 35px;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
        direction: rtl;
        text-align: justify;
        margin-top: 5%;
    }
    
    .details_news-caption3 {
        color: #333;
        text-align: justify;
    }
    
    .details_news-details {
        width: 100%;
        font-size: 22px;
        text-align: unset;
        color: #333;
        margin: 10px;
        }
    
    /* للشاشات التي أصغر من 600px */
    @media (max-width: 600px) {
        .details_news-images {
            grid-template-columns: repeat(1, 1fr);
        }
        .slide-wrapper img {
    width: auto;
    height: auto;
    /* object-fit:fill; */
    object-position: center;
    /* position: absolute; */
    top: 0;
    left: 0;
    transition: opacity 0.5s ease-in-out;
}
    }
    
    /* للشاشات التي أكبر من 600px وأصغر من 900px */
    @media (min-width: 600px) and (max-width: 900px) {
        .details_news-images {
            grid-template-columns: repeat(1, 1fr);
        }
        
    }
    
    /* للشاشات التي أكبر من 900px */
    @media (min-width: 900px) {
        .details_news-images {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .slider-container {
    width: 100%;
    height: 50%;
    position: relative;
    /* overflow: hidden; */
}

    .slider-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
        height: 100%;
    }

    .slide-wrapper {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .slide-wrapper img {
        width: 100%;
        height: 100%;
        /* object-fit: cover; */
        object-position: center;
        /* position: absolute; */
        top: 0;
        left: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .prev-btn, .next-btn {
        background-color: #0c0c0c2b;        ;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
    }

    .prev-btn {
        left: 10px;
    }

    .next-btn {
        right: 10px;
    }
    .section_separator {
            border-top: 1px solid #ccc;
            margin-top: 30px;
        }
</style>

<div class="details_news-main">
    <div class="details_news-content">
        <h1 class="details_news-caption">{{ $news->Title }}</h1>
        <div class="slider-container">
            <div class="slider-track">
                <div class="slide-wrapper">
                    <img src="{{ asset($news->images[0]->News_Image) }}" alt="News Image" class="details_news-image">
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="next-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>
        <hr class="section_separator">
    </div>
    <div class="details_news-details">
        <h1 class="details_news-caption2">{{ \Carbon\Carbon::parse($news->Publication_date)->format('Y-m-d') }}</h1>
        <p class="details_news-caption3">{!! $news->Article !!}</p>
        <p class="details_news-caption3">{!! $news->Author !!}</p>
    </div>
</div>

<script>
    const sliderContainer = document.querySelector('.slider-container');
    const sliderTrack = document.querySelector('.slider-track');
    const slideWrapper = document.querySelector('.slide-wrapper');
    const slideImage = slideWrapper.querySelector('img');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentSlide = 0;
    const images = [];

    // Populate the images array dynamically
    @foreach ($news->images as $image)
        images.push('{{ asset($image->News_Image) }}');
    @endforeach

    // Function to move to the next slide
    function nextSlide() {
        currentSlide++;
        if (currentSlide >= images.length) {
            currentSlide = 0;
        }
        updateSlide();
    }

    // Function to move to the previous slide
    function prevSlide() {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = images.length - 1;
        }
        updateSlide();
    }

    // Function to update the slide
    function updateSlide() {
        slideImage.style.opacity = 0; // Fade out the current image
        setTimeout(() => {
            slideImage.src = images[currentSlide];
            slideImage.style.opacity = 1; // Fade in the new image
        }, 500); // Adjust the delay as needed
    }

    // Event listeners for buttons
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Initial setup
    updateSlide();
</script>

@endsection