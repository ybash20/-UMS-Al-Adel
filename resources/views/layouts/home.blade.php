@extends('layouts.master')
@section('title', 'Home')
@section('home', 'active')

@section('divcontent')
    @push('head')
        <style>
            body{
                background-color: #f6f6f6;
            }
            /* Center the loader on the screen */
            #page-loader {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 9999; /* Make sure the loader is on top of everything */
                height: 250px; /* Adjust height to your animation size */
            }
            .wr{
                position: fixed;
                background: #fff;
                height: 100%;
                width: 100%;
                z-index: 9998;
            }
            .wrapper{
                display: none;
            }
        </style>
        @if (App::getLocale() == 'ar')
            <link rel="stylesheet" href="{{ asset('css/cssAR/statistics.css') }}">
            <link rel="stylesheet" href="{{ asset('css/cssAR/news_section.css') }}">
            <link rel="stylesheet" href="{{ asset('css/cssAR/library_section.css') }}">
            {{-- <link rel="stylesheet" href="{{ asset('css/cssAR/college_section.css') }}"> --}}
            <style>
                .main_continar {
                    direction: rtl;
                    text-align: right;
                }
            </style>
        @else
            <link rel="stylesheet" href="{{ asset('css/cssEN/statistics.css') }}">
            <link rel="stylesheet" href="{{ asset('css/cssEN/news_section.css') }}">
            <link rel="stylesheet" href="{{ asset('css/cssEN/library_section.css') }}">
            {{-- <link rel="stylesheet" href="{{ asset('css/cssEN/college_section.css') }}"> --}}
        @endif
    @endpush

    @push('top_loader')
        {{-- loader  --}}
        <div class="wr" id="wr-loader">
            <div id="page-loader" class="page-loader"></div>
        </div>
        {{-- loader  --}}
        <div class="wrapper">
    @endpush

    @push('bottom_loader')
        </div>
    @endpush

    {{-- slider --}}
    @include('layouts.slider')
    {{-- slider --}}

    {{-- News Section --}}
    @include('layouts.news_section')
    {{-- News Section --}}

    {{-- News Section --}}
    @include('layouts.college_section')
    {{-- News Section --}}

    {{-- library Section --}}
    @include('layouts.library_section')
    {{-- library Section --}}

    {{-- Statistics --}}
    @include('layouts.statistics')
    {{-- Statistics --}}

    @push('bottom')
        <!-- loader -->
        <script src="{{ asset('vendor/crudbooster/assets/lottie.min.js') }}"></script>
        <!-- Load jQuery -->
        <script src="{{ asset('vendor/crudbooster/assets/jquery-3.6.0.min.js') }}"></script>
        <script>
            // Load the animation
            var animation = lottie.loadAnimation({
                container: document.getElementById('page-loader'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: 'vendor/crudbooster/assets/data.json'
            });
            // Hide loader and show content when the page has fully loaded
            $(window).on('load', function() {
                setTimeout(function() {
                    $('#page-loader').fadeOut('slow', function() {});
                    $('.wrapper').fadeIn(1);
                    $('#wr-loader').fadeOut(1500, function() {
                        // Show the main content
                    });
                }, 3500); // Adjust the delay as needed
            });
        </script>
        <!-- loader -->
    @endpush

@endsection
