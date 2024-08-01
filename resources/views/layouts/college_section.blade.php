    <!--About-->
    <div class="main_continar">
        <div class="statistics-header">
            <div class="statistics-header-inner">
                <h3 style="color: #007bff">
                    {{ lang('College') }}
                </h3>
            </div>
        </div>
        <div class="book_lib_row">
            @foreach ($colleges as $college)
                <a href="{{ route('colleges.show',$college->id) }}" class="book-section">
                    <div class="books">
                        @if (App::getLocale() == 'ar')
                            <h2>{{ $college->Name_Arabic }}</h2>
                        @else
                            <h2>{{ $college->Name_English }}</h2>
                        @endif
                        @foreach ($majors[$college->id] as $major)
                            <div class="book">
                            @if (App::getLocale() == 'ar')
                                <h3 class="book-name">{{ $major->Name_Arabic }}</h3>
                            @else
                                <h3 class="book-name">{{ $major->Name_English }}</h3>
                            @endif
                            </div>
                            @if (!$loop->last)
                                <hr class="book-separator">
                            @endif
                        @endforeach
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@push('bottom')
    <script>
        const colleges = document.querySelectorAll('.college');
        colleges.forEach(college => {
            college.addEventListener('click', () => {
                colleges.forEach(college => {
                    college.classList.remove('selected');
                });
                college.classList.add('selected');
            });
        });
    </script>
@endpush
