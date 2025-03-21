@section('slider')
    <link rel="stylesheet" href="css/lib/styleslider.css">
    <div class="slider">
            <!-- list Items -->
        <div class="list">
            @foreach ($sliders as $slider)
                <div class="item active">
                    @foreach ($slider['images'] as $image)
                        <img src="{!! asset($image['Image']) !!}">
                    @endforeach
                    <div class="content">
                        @if (App::getLocale() == 'ar')
                            <h2>{{ $slider->Content_Arabic }}</h2>
                            <p>{!! $slider->Description_Arabic !!}</p>
                        @else
                            <h2>{{ $slider->Content_English }}</h2>
                            <p>{!! $slider->Description_English !!}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
            <!-- button arrows -->
        <div class="arrows">
                <button id="prev">
                    <svg viewBox="0 0 256 512">
                        <path d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"/>
                    </svg>
                </button>
                <button id="next">
                    <svg viewBox="0 0 256 512">
                        <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"/>
                    </svg>
                </button>
        </div>
    </div>
    <script src="js/lib/js_slider_library.js"></script>
@show
