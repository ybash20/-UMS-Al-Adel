<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ crocodicstudio\crudbooster\helpers\CRUDBooster::getSetting('favicon') ? asset(crocodicstudio\crudbooster\helpers\CRUDBooster::getSetting('favicon')) : asset('vendor/crudbooster/assets/logo50.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','page_title')</title>

</head>
<body>
   <header>
    @include('layouts.header')
   </header>

    <div>
        @section('divcontent')

        @show
    </div>

    <main>
        @section('main')

        @show
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

</body>
</html>
