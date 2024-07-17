@extends('layouts.master')
@section('title','Speech of the university president')
@section('university_president', 'active')
@section('about', 'active')

@section('main')
<style>
.president-main {
    margin-top: 7%;
    margin-bottom: 3%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    height: 100%;
}

.president-content {
    width: 40%;
    text-align: center;
}

.president-image {
    max-width: 100%;
    height: auto;
    border-radius: 15px; /* زوايا مستديرة للصورة */
    border: 6px solid #5bb3fa; /* لون البوردر الأخضر */
    /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);  */
    margin-bottom: 15px;
    margin-top: 15px;

    transition: transform 0.3s ease, box-shadow 0.3s ease; /* تأثير الانتقال */
    object-fit: fill;
}

.president-image:hover {
    transform: scale(1.05); /* تكبير الصورة عند الهوفر */
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* زيادة الظل عند الهوفر */
}

.president-caption {
    font-size: 35px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.president-caption2{
    font-size: 35px;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
    direction: rtl;
    text-align: justify;
    margin-top: 5%;
}

.president-caption3{
    color: #333;
    text-align: justify;
}

.president-details {
    width: 50%;
    font-size: 22px;
    text-align: justify;
    color: #333;

}

.president-details p{
    direction: rtl;
}

/* للشاشات التي أصغر من 600px */

@media (max-width: 600px) {
    .president-main {
        flex-direction: column;
        align-items: center;
    }
    .president-content, .president-details {
        width: 100%;
        text-align: center;
    }
    .president-details {
        margin-top: 15px;
    }
}

/* للشاشات التي أكبر من 600px وأصغر من 900px */
@media (min-width: 600px) and (max-width: 900px) {
    .president-main {
        flex-direction: column;
        align-items: center;
    }
    .president-content, .president-details {
        width: 100%;
        text-align: center;
    }
    .president-details {
        margin-top: 15px;
    }
}

/* للشاشات التي أكبر من 900px */
@media (min-width: 900px) {
    .president-main {
        flex-direction: column;
    }
    .president-content {
        width: 60%;
    }
    .president-details {
        margin-top: 15px;
        width: 80%;
    }
}

</style>

<div class="president-main">
    @foreach ($contents as $content)
        <div class="president-content">
            @if (App::getLocale() == 'ar')
            <h1 class="president-caption">{{ $content->Content_Arabic }}</h1>
        @else
        <h1 class="president-caption">{{ $content->Content_English }}</h1>
        @endif             @foreach ($content->images as $image)
                <img src="{{ $image->Image }}" alt="President Image" class="president-image">
            @endforeach
        </div>
        <div class="president-details">
            @if (App::getLocale() == 'ar')
            <h1 class="president-caption2">{{ $content->category->Name_Arabic }}</h1>
            <p class="president-caption3">{!! $content->Description_Arabic !!}</p>
        @else
        <h1 class="president-caption2">{{ $content->category->Name_English }}</h1>
            <p class="president-caption3">{!! $content->Description_English !!}</p>
        @endif        </div>
    @endforeach
</div>

@endsection



