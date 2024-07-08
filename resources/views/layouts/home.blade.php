<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ crocodicstudio\crudbooster\helpers\CRUDBooster::getSetting('favicon') ? asset(crocodicstudio\crudbooster\helpers\CRUDBooster::getSetting('favicon')) : asset('vendor/crudbooster/assets/logo50.png') }}">
    <title>Home</title>
        <style>
        /* Center the loader on the screen */
        #page-loader {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999; /* Make sure the loader is on top of everything */
            width: 200px; /* Adjust width to your animation size */
            height: 200px; /* Adjust height to your animation size */
        }
        .wr{
            position: fixed;
            background: #fff;
            height: 100%;
            width: 100%;
            z-index: 9998;
        }
    </style>
</head>

<body>
    <div class="wr" id="wr-loader">
        <div id="page-loader" class="page-loader"></div>
    </div>
    <div class="wrapper">
        <header>
            @include('layouts.header')
        </header>

        <div>
            @include('layouts.slider')
        </div>

        <main>

        </main>

        <section>
            @include('layouts.news_section')
        </section>

        <section>
            @include('layouts.statistics')
        </section>

        <footer>
            @include('layouts.footer')
        </footer>
    </div>
</body>
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
            //path: 'vendor/crocodicstudio/crudbooster/assets/data.json' // Path to your animation file
        });
        $('d-n').remove
        // Hide loader and show content when the page has fully loaded
        $(window).on('load', function() {
            setTimeout(function() {
                // Fade out the loader
                $('#page-loader').fadeOut('slow', function() {});
                $('#wr-loader').fadeOut('slow', function() {
                    // Show the main content
                    $('.wrapper').fadeIn('slow');
                });
            }, 3500); // Adjust the delay as needed
        });
    </script>
    <!-- loader -->
</html>
