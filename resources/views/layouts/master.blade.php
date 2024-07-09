<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ crocodicstudio\crudbooster\helpers\CRUDBooster::getSetting('favicon') ? asset(crocodicstudio\crudbooster\helpers\CRUDBooster::getSetting('favicon')) : asset('vendor/crudbooster/assets/logo50.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','page_title')</title>
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('css/cssAR/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cssAR/footer.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/cssEN/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cssEN/footer.css') }}">
    @endif

    @stack('head')
</head>
<body>
    @stack('top_loader')

    @include('layouts.header')

    <div>
        @section('divcontent')

        @show
    </div>

    <main>
        @section('main')

        @show
    </main>

    @include('layouts.footer')

    @stack('bottom_loader')
</body>
@stack('bottom')
</html>
