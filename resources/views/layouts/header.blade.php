{{-- Header Content --}}
<header>
    @if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="css/cssAr/header.css"> 
    @else
    <link rel="stylesheet" href="css/cssEN/header.css">
    @endif
    <div class="bodyheader">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->
        <div class="site-navbar-wrap">
            <div class="site-navbar-top">
                <div class="container py-3">
                    <div class="header_row align-items-center">
                        <div class="col-6">
                            <div class="d-flex mr-auto">
                                <a href="#" class="header_a d-flex align-items-center mr-4 fs-12">
                                    <span class="icon-envelope mr-2"></span>
                                    <span class="d-none d-md-inline-block">
                                        au.adu1@gmali.com
                                    </span>
                                </a>
                                <a href="#" class="header_a d-flex align-items-center mr-auto fs-12">
                                    <span class="icon-phone mr-2"></span>
                                    <span class="d-none d-md-inline-block">
                                        +967 2 367 133
                                    </span>
                                </a>
                            </div>
                            <div class="col-6 text-right">
                                <div class="mr-auto d-end-flex">
                                    <ul class="lang-ul">
                                        <li class="lang-dropdown">
                                            <a class="header_a lang-icon" class="dropdown-toggle" data-toggle="dropdown" title='Language' aria-expanded="false"></a>
                                            <ul id='list_language' class="lang-dropdown-menu">
                                                <li class="lang-header">
                                                    {{ ucwords(cbLang('lang')) }}
                                                </li>
                                                <li>
                                                    <form id="langForm" method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form_select">
                                                        <button type="submit" name="lang" id="langAr" value="ar">
                                                            <img src="{{ asset('image/ar.png') }}">
                                                            العربية
                                                        </button>
                                                        <button type="submit" name="lang" id="langEn" value="en">
                                                            <img src="{{ asset('image/en.png') }}">
                                                            English
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <a href="https://www.instagram.com/aladel.un?igsh=NnkwcDM0eTRkbTVh" class="header_a d-flex align-items-center ico_pr" target="_blank" rel="nofollow">
                                        <span class="icon-instagram fs-16"></span>
                                    </a>
                                    <a href="https://www.facebook.com/Aladel.University/" class="header_a d-flex align-items-center ico_pr" target="_blank" rel="nofollow">
                                        <span class="fa-facebook fab fs-16"></span>
                                    </a>
                                    <a href="https://www.youtube.com/@user-nz4ef8qy7h" class="header_a d-flex align-items-center ico_pr" target="_blank" rel="nofollow">
                                        <span class="fa-youtube fab fs-16"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-navbar site-navbar-target js-sticky-header">
                    <div class="container">
                        <div class="header_row align-items-center">
                            <div class="col-2">
                                <h1 class="headerh1 my-0 site-logo">
                                    <a class="header_a" href="{{ route('home') }}">
                                        {{ cbLang('Al-Adel Unveristiy') }}
                                    </a>
                                </h1>
                            </div>
                            <div class="col-10">
                                <nav class="nav site-navigation text-right" role="navigation">
                                    <div class="container">
                                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                            <a href="#" class="header_a site-menu-toggle js-menu-toggle text-white fs-20">
                                                <span class="icon-menu"></span>
                                            </a>
                                        </div>
                                        <ul class="header_ul site-menu main-menu js-clone-nav d-none d-lg-block">
                                            <li class="@yield('home')">
                                                <a href="{{ route('home') }}" class="header_a nav-link">
                                                    {{ cbLang('home') }}
                                                </a>
                                            </li>
                                            <li class="@yield('library')">
                                                <a href="{{ route('library') }}" class="header_a nav-link">
                                                    {{ cbLang('Library') }}
                                                </a>
                                            </li>
                                            <li class="has-children @yield('college')">
                                                <a href="#" class="header_a nav-link">
                                                    {{ cbLang('College') }}
                                                </a>
                                                <ul class="header_ul dropdown arrow-top">
                                                    <li class="@yield('computer')">
                                                        <a href="{{ route('computer') }}" class="header_a nav-link">
                                                            {{ cbLang('Computer Science') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('business')">
                                                        <a href="{{ route('business') }}" class="header_a nav-link">
                                                            {{ cbLang('Business Administration') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('islamic')">
                                                        <a href="{{ route('islamic') }}" class="header_a nav-link">
                                                            {{ cbLang('Islamic Studies and Quranic Sciences') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('sharia')">
                                                        <a href="{{ route('sharia') }}" class="header_a nav-link">
                                                            {{ cbLang('Sharia and Law') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('translation')">
                                                        <a href="{{ route('translation') }}" class="header_a nav-link">
                                                            {{ cbLang('Languages and Translation') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-children @yield('about')">
                                                <a href="#" class="header_a nav-link">
                                                    {{ cbLang('About') }}
                                                </a>
                                                <ul class="header_ul dropdown arrow-top">
                                                    <li class="@yield('university_president')">
                                                        <a href="{{ route('university_president') }}" class="header_a nav-link">
                                                            {{ cbLang('University President speech') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('SCBT_AlAdel')">
                                                        <a href="{{ route('SCBT_AlAdel') }}" class="header_a nav-link">
                                                            {{ cbLang('Speech of the Chairman of the Board of Trustees of Al-Adel University') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('University_Establishment')">
                                                        <a href="{{ route('University_Establishment') }}" class="header_a nav-link">
                                                            {{ cbLang('University Establishment') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('Students_Affairs')">
                                                        <a href="{{ route('Students_Affairs') }}" class="header_a nav-link">
                                                            {{ cbLang('Students Affairs') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('Foreign_relations')">
                                                        <a href="{{ route('Foreign_relations') }}" class="header_a nav-link">
                                                            {{ cbLang('Foreign relations') }}
                                                        </a>
                                                    </li>
                                                    <li class="@yield('University_guide')">
                                                        <a href="{{ route('University_guide') }}" class="header_a nav-link">
                                                            {{ cbLang('University guide') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="@yield('registration')">
                                                <a href="{{ route('registration') }}" class="header_a nav-link">
                                                    {{ cbLang('Regstiration') }}
                                                </a>
                                            </li>
                                            <li class="@yield('news')">
                                                <a href="#news-section" class="header_a nav-link">
                                                    {{ cbLang('news') }}
                                                </a>
                                            </li>
                                            @if (session()->has('student_id'))
                                                <li class="has-children @yield('profile')">
                                                    <a href="#" class="header_a nav-link">
                                                        {{ cbLang('Profile') }}
                                                    </a>
                                                    <ul class="header_ul dropdown arrow-top">
                                                        <li class="@yield('StudentgetLogin')">
                                                            <a href="{{ route('StudentgetLogin') }}" class="header_a nav-link">
                                                                {{ cbLang('Main') }}
                                                            </a>
                                                        </li>
                                                        <li class="@yield('updatePassword')">
                                                            <a href="{{ route('updatePassword') }}" class="header_a nav-link">
                                                                {{ cbLang('Edit Password') }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item @yield('logout')">
                                                    <a href="{{ route('StudentgetLogout') }}" class="header_a nav-link">
                                                        {{ cbLang('Logout') }}
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </a>
                                                </li>
                                            @else
                                            <li class="nav-item @yield('login')">
                                                <a href="{{ route('StudentgetLogin') }}" class="header_a nav-link">
                                                    {{ cbLang('Login') }}
                                                    <i class="fas fa-sign-in-alt"></i>
                                                </a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- Header Content --}}

@push('bottom')
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        var form = document.getElementById("langForm");
        var locale = "{{ app()->getLocale() }}";
        var langAr = document.getElementById('langAr');
        var langEn = document.getElementById('langEn');
        var icon = document.querySelector('.lang-icon');
        if (locale === 'en') {
            langEn.classList.add('active');
            icon.innerHTML += 'English';
        } else if (locale === 'ar') {
            langAr.classList.add('active');
            icon.innerHTML += 'العربية';
        }
        icon.innerHTML += '<i class="fa fa-globe ico_pr"></i>';
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const langDropdown = document.querySelector('.lang-dropdown');
            const langIcon = langDropdown.querySelector('.lang-icon');
            const dropdownMenu = document.getElementById('list_language');

            // Toggle dropdown on click
            langIcon.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownMenu.classList.toggle('iopen');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!langDropdown.contains(e.target)) {
                    dropdownMenu.classList.remove('iopen');
                }
            });
        });
    </script>
@endpush
{{-- =======
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>
    @show
>>>>>>> Stashed changes --}}
