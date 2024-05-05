<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
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
        {{-- @include('layouts.news') --}}
        @include('layouts.news_section')
        @section('main')

        @show
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

</body>
</html>
