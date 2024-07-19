<div class="news-section">
    <div class="news-header">
        <div class="news-header-inner">
            <a href="{{ route('news') }}">
                {{ cbLang('Events and news') }}
            </a>
        </div>
    </div>
    <div class="content-lga mx-tka">
        <div class="row-qk7 pt-iso">
            <div class="col-gb5 px-5jw mb-g7w">

                <div class="card-4ox">
                    <a class="news-a" href="{{route('news.details', $mainNews[0]['id'])}}">
                        <span class="d-a64">
                        </span>
                    </a>
                    <img class="news-img w-ay8 h-d84" width="620" height="420"
                        src="{!! asset($mainNews[0]['images'][0]['News_Image']) !!}">
                    <div class="container-7xn d-q8z column-zop content-kj5">
                        <div class="card-lf7">
                            <h4 class="news-h4 title-b9o">
                                @if (App::getLocale() == 'ar')
                                    {{ $mainNews[0]['Title_Arabic'] }}
                                @else
                                    {{ $mainNews[0]['Title_English'] }}
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-p">
                    <p class="news-post-p">
                        @if (App::getLocale() == 'ar')
                            {!! $mainNews[0]['Article_Arabic'] !!}
                        @else
                            {!! $mainNews[0]['Article_English'] !!}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-gb5 px-5jw mb-g7w list-i5d">
                @foreach ($latestNews as $NewsItem)
                    <div class="post-217 pt-iso d-q8z item-oe3">
                        <div class="post-231">
                            <a class="news-a" href="{{route('news.details', $NewsItem->id)}}">
                                <img class="news-img w-ay8 h-d84" width="145" height="109" src="{!! asset($NewsItem->images->first()->News_Image) !!}">
                            </a>
                        </div>
                        <div class="content-lao">
                            <a class="news-a" href="{{route('news.details', $NewsItem->id)}}">
                                @if (App::getLocale() == 'ar')
                                    {{ $NewsItem->Title_Arabic }}
                                @else
                                    {{ $NewsItem->Title_English }}
                                @endif
                            </a>
                            <p class="news-post-p">
                                @if (App::getLocale() == 'ar')
                                    {!!  $NewsItem->Article_Arabic !!}
                                @else
                                    {!!  $NewsItem->Article_English !!}
                                @endif
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="more-news">
                    <a href="{{ route('news') }}">
                        {{ cbLang('more') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
