@extends('layouts.master')
@section('title','details news')
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
        text-align: justify;
        color: #333;
    }
    
    /* للشاشات التي أصغر من 600px */
    @media (max-width: 600px) {
        .details_news-images {
            grid-template-columns: repeat(1, 1fr);
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
    </style>
    
    <div class="details_news-main">
        <div class="details_news-content">
            <h1 class="details_news-caption">{{ $news->Title }}</h1>
            <div class="details_news-images">
                @foreach($news->images as $image)
                    <img src="{{ $image->News_Image ? asset($image->News_Image) : asset('image/about.png') }}" alt="News Image" class="details_news-image">
                @endforeach
            </div>
        </div>
        <div class="details_news-details">
            <h1 class="details_news-caption2">{{ \Carbon\Carbon::parse($news->Publication_date)->format('Y-m-d') }}</h1>
            <p class="details_news-caption3">{!! $news->Article !!}</p>
            <p class="details_news-caption3">{!! $news->Author !!}</p>

        </div>
    </div>
    

@endsection