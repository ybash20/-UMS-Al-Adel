@section('footer')
    <style>
        .visually-hidden {
            position: absolute !important;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
            width: 1px;
            height: 1px;
            word-wrap: normal;
        }

        .clearfix:after {
            display: table;
            clear: both;
            content: "";
        }

        .fab {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-lg {
            font-size: 1.33333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-facebook:before {
            content: "\f09a"
        }

        .fa-instagram:before {
            content: "\f16d"
        }

        .fa-linkedin:before {
            content: "\f08c"
        }

        .fa-tiktok:before {
            content: "\e07b"
        }

        .fa-twitter:before {
            content: "\f099"
        }

        .fa-youtube:before {
            content: "\f167"
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(fonts/font-awesome/fa-brands-400.eot);
            src: url(fonts/font-awesome/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(fonts/font-awesome/fa-brands-400.woff2) format("woff2"), url(fonts/font-awesome/fa-brands-400.woff) format("woff"), url(fonts/font-awesome/fa-brands-400.ttf) format("truetype"), url(fonts/font-awesome/fa-brands-400.svg#fontawesome) format("svg")
        }

        .fab {
            font-family: "Font Awesome 5 Brands"
        }

        .fab {
            font-weight: 400
        }

        .social-media-links--platforms {
            padding-left: 0;
        }

        .social-media-links--platforms.horizontal li {
            display: inline-block;
            text-align: center;
            padding: .2em .35em;
        }

        .body {
            margin: 0;
        }

        .a {
            background-color: transparent;
        }

        .img {
            border-style: none;
        }

        html {
            font-size: 62.5%
        }

        @font-face {
            font-family: "GE-Dinar";
            src: url(fonts/GE-Dinar-One-Light.otf);
            font-weight: light;
            font-style: normal
        }

        @font-face {
            font-family: "GE-Dinar";
            src: url(fonts/GE-Dinar-One-Regular.otf);
            font-weight: bold;
            font-style: normal
        }

        @font-face {
            font-family: "GE-Dinar";
            src: url(fonts/GE-Dinar-One-Medium.otf);
            font-weight: medium;
            font-style: normal
        }

        @font-face {
            font-family: "GE-Dinar";
            src: url(fonts/GE-Dinar-One-Bold.otf);
            font-weight: bold;
            font-style: normal
        }

        @font-face {
            font-family: "Dosis";
            src: url(fonts/Dosis-Light.ttf);
            font-weight: light;
            font-style: normal
        }

        @font-face {
            font-family: "Dosis";
            src: url(fonts/Dosis-Regular.ttf);
            font-weight: normal;
            font-style: normal
        }

        @font-face {
            font-family: "Dosis";
            src: url(fonts/Dosis-Medium.ttf);
            font-weight: medium;
            font-style: normal
        }

        @font-face {
            font-family: "Dosis";
            src: url(fonts/Dosis-Bold.ttf);
            font-weight: bold;
            font-style: normal
        }

        [lang=ar] .body {
            font-family: "GE-Dinar", sans-serif;
            text-align: right;
        }

        .content {
            --base-size: 1.6rem;
            --type-scale: 1.1;
            --h5: calc(var(--base-size) * var(--type-scale));
            --h4: calc(var(--h5) * var(--type-scale));
            --h3: calc(var(--h4) * var(--type-scale));
            --h2: calc(var(--h3) * var(--type-scale));
            --h1: calc(var(--h2) * var(--type-scale));
            font-size: var(--base-size)
        }

        .content h3 {
            font-size: var(--h3)
        }

        .content h5 {
            font-size: var(--h5)
        }

        .content * {
            font-size: var(--base-size)
        }

        .content li {
            line-height: 2
        }

        .body {
            margin: 0
        }

        input[type=search]:focus-visible,
        input[type=text]:focus-visible,
        input[type=password]:focus-visible,
        input[type=email]:focus-visible,
        input[type=number]:focus-visible,
        select.form-select:focus-visible {
            outline-color: #0084bd
        }

        footer.footer {
            background-color: #0084bd;
            padding: 2rem;
            color: #fff;
            line-height: 1.5
        }

        footer.footer a {
            line-height: 1.5
        }

        footer.footer a {
            color: #fff;
            font-weight: normal;
            text-decoration: none
        }

        footer.footer .block-social-media-links {
            position: relative;
            padding: 2rem 0
        }

        footer.footer .block-social-media-links ul.social-media-links--platforms {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: clamp(1rem, 2vw + 1rem, 3rem);
            margin: 0 auto;
            width: fit-content;
            background-color: #0084bd;
            z-index: 50;
            padding: 0 2rem
        }

        footer.footer .block-social-media-links ul.social-media-links--platforms li {
            padding: 0;
            display: flex
        }

        footer.footer .block-social-media-links .fab {
            color: #fff;
            font-size: clamp(3rem, 2rem + 3vw, 4rem)
        }

        footer.footer .block-social-media-links::before {
            position: absolute;
            z-index: 0;
            inset: calc(50% - .5px) 0 auto 0;
            content: "";
            height: .5px;
            width: 100%;
            background-color: #fff;
            display: block
        }

        footer.footer #block-footerinner {
            padding: 2rem 0;
            border-bottom: .5px solid #fff
        }

        footer.footer .footer-inner {
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
            gap: 3rem
        }

        footer.footer .footer-inner .section {
            flex: 1 1 25rem;
            display: flex
        }

        @media screen and (max-width: 700px) {
            footer.footer .footer-inner .section {
                justify-content: flex-start
            }
        }

        footer.footer .footer-inner .section_title {
            margin: 1rem 0;
            font-weight: bold
        }

        footer.footer .footer-inner .section_list {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 1rem
        }

        footer.footer .footer-inner .section_list li {
            display: flex;
            align-items: center;
            gap: 1rem
        }

        footer.footer .footer-inner .section_list li img {
            height: 15px;
            width: auto
        }

        footer.footer .footer-inner .section.stars {
            width: 70%;
            max-width: 25rem
        }

        footer.footer .footer-inner .section.stars img {
            display: block;
            width: 100%;
            object-fit: contain
        }

        @media screen and (orientation: portrait)and (max-width: 700px) {
            footer.footer .footer-inner .section_list {
                flex-flow: row wrap
            }

            footer.footer .footer-inner .section_list li {
                flex: 1 1 100%
            }
        }

        footer.footer .region-bottom-footer {
            display: flex;
            flex-flow: column-reverse;
            text-align: center;
            gap: 2rem
        }

        @media screen and (max-width: 600px) {
            footer.footer .region-bottom-footer {
                white-space: normal
            }
        }

        footer.footer .region-bottom-footer .copyright-links {
            padding: 1rem 0;
            border-bottom: .5px solid #fff
        }

        footer.footer .navbar-nav {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
            padding: 0
        }

        footer.footer .navbar-nav .nav-link {
            padding: 0
        }

        @media screen and (max-width: 600px) {
            footer.footer .navbar-nav {
                flex-flow: column nowrap;
                gap: 2rem
            }
        }

        @media screen and (min-width: 900px) {
            footer.footer {
                padding: 4rem 10rem 2rem 10rem;
                white-space: nowrap
            }

            footer.footer .navbar-nav {
                gap: 2rem;
                justify-content: flex-end
            }

            footer.footer .region-bottom-footer {
                flex-flow: row nowrap;
                justify-content: space-between;
                padding: 2rem 0 0 0
            }

            footer.footer .region-bottom-footer .block-copyright-footer {
                white-space: normal
            }

            footer.footer .region-bottom-footer .copyright-links {
                padding: 0;
                border-bottom: unset
            }
        }

        :root {
            --hue: 223;
            --trans-dur: 0.3s;
            --trans-timing: cubic-bezier(0.65, 0, 0.35, 1)
        }

        .timeline .timeline__arrow:focus-visible {
            background-color: hsl(var(--hue), 10%, 50%, 0.4)
        }

        .ul.inline {
            display: inline;
            padding-left: 0;
        }

        [dir="rtl"] ul.inline {
            padding-right: 0;
            padding-left: 15px;
        }

        .ul.inline li {
            display: inline;
            padding: 0 0.5em;
            list-style-type: none;
        }

        .muneer-trigger-button-box button:focus-visible {
            color: var(--muneer-btn-color-hover);
            background: var(--muneer-btn-bg-hover);
        }

        .muneer-trigger-button-box button:focus-visible .muneer-trigger-button-icon svg {
            fill: var(--muneer-btn-color-hover);
        }

        .muneer-multi-toggle-box:focus-visible,
        .muneer-toggle-box:focus-visible {
            outline: 0;
        }

        :root {
            --bs-blue: #003cc5;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-gray-100: #f8f9fa;
            --bs-gray-200: #e9ecef;
            --bs-gray-300: #dee2e6;
            --bs-gray-400: #ced4da;
            --bs-gray-500: #adb5bd;
            --bs-gray-600: #6c757d;
            --bs-gray-700: #495057;
            --bs-gray-800: #343a40;
            --bs-gray-900: #212529;
            --bs-primary: #003cc5;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-primary-rgb: 0, 60, 197;
            --bs-secondary-rgb: 108, 117, 125;
            --bs-success-rgb: 25, 135, 84;
            --bs-info-rgb: 13, 202, 240;
            --bs-warning-rgb: 255, 193, 7;
            --bs-danger-rgb: 220, 53, 69;
            --bs-light-rgb: 248, 249, 250;
            --bs-dark-rgb: 33, 37, 41;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 33, 37, 41;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-font-sans-serif: cairo, system-ui, -apple-system, "Segoe UI",
                Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans",
                sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
                "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.15),
                    rgba(255, 255, 255, 0));
            --bs-body-font-family: var(--bs-font-sans-serif);
            --bs-body-font-size: 1rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #212529;
            --bs-body-bg: #fff;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        .body {
            margin: 0;
            font-family: "GE-Dinar";
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .ul {
            padding-left: 2rem;
        }

        .ul {
            margin-top: 0;
            margin-bottom: 1rem;
        }


        .img {
            vertical-align: middle;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-year-field {
            padding: 0;
        }

        ::-webkit-inner-spin-button {
            height: auto;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        .form-control[type="file"]:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .form-control::file-selector-button {
            padding: 0.375rem 0.75rem;
            margin: -0.375rem -0.75rem;
            margin-inline-end: 0.75rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .form-control::file-selector-button {
                transition: none;
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #dde0e3;
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #dde0e3;
        }

        .form-control-sm::file-selector-button {
            padding: 0.25rem 0.5rem;
            margin: -0.25rem -0.5rem;
            margin-inline-end: 0.5rem;
        }

        .form-control-lg::file-selector-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            margin-inline-end: 1rem;
        }

        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer;
        }

        .nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #003cc5;
            text-decoration: none;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {

            .nav-link {
                transition: none;
            }
        }

        /* .nav-link:hover, */
        .nav-link:focus {
            color: #00309e;
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }

        .d-flex {
            display: flex !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .flex-column {
            flex-direction: column !important;
        }

        .navbar-nav .nav-link {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        footer {
            text-align: right;
            padding: 2rem 0 0 ;
        }

        footer .region-footer {
            display: flex;
            flex-direction: column;
        }

        .region-footer {
            padding: 0 0.5rem;
        }

        .fa-twitter::before {
            content: "";
            background-image: url("images/twitter_x.svg");
            background-size: 100% 100%;
            display: block;
            width: clamp(3rem, 2rem + 3vw, 4.5rem);
            height: clamp(3rem, 2rem + 3vw, 4.5rem);
            background-repeat: no-repeat;
        }
    </style>
    <div dir="rtl" class="h-100 html">
        <div class="body d-flex flex-column h-100">
            <div class="content" lang="ar">
                <footer class="footer">
                    <div class="region region-footer">
                        <div id="block-socialmedialinks"
                            class="social-block block-social-media-links block block-social-media-links-block">
                            <ul class=" ul social-media-links--platforms platforms inline horizontal">
                                <li>
                                    <a class="a social-media-link-icon--twitter" href="https://www.twitter.com/_KSU"
                                        target="_blank" rel="nofollow">
                                        <span class="fab fa-twitter fa-lg"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class=" a social-media-link-icon--facebook"
                                        href="https://www.facebook.com/King.Saud.University" target="_blank" rel="nofollow">
                                        <span class="fab fa-facebook fa-lg"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class=" a social-media-link-icon--tiktok" href="https://www.tiktok.com/@ksu1957"
                                        target="_blank" rel="nofollow">
                                        <span class="fab fa-tiktok fa-lg"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class=" a social-media-link-icon--instagram"
                                        href="https://www.instagram.com/king_saud_university" target="_blank"
                                        rel="nofollow">
                                        <span class="fab fa-instagram fa-lg"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="a social-media-link-icon--linkedin"
                                        href="https://www.linkedin.com/school/king-saud-university" target="_blank"
                                        rel="nofollow">
                                        <span class="fab fa-linkedin fa-lg"></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="a social-media-link-icon--youtube"
                                        href="https://www.youtube.com/user/pdksuchannel" target="_blank" rel="nofollow">
                                        <span class="fab fa-youtube fa-lg"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="block-footerinner"
                            class="block block-block-content block-block-contentfcdc7ed7-cba6-4b59-8f6e-d28e0d5182d4">
                            <div
                                class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
                                <div class="footer-inner">
                                    <div class="section contacts">
                                        <div class="section_content_container">
                                            <h3 class="section_title">تواصل معنا</h3>

                                            <ul class="ul section_list">
                                                <li>
                                                    <a class="a" href="https://ksu.edu.sa/ar/Contact_Us"><span>اتصل
                                                            بنا</span></a>
                                                </li>
                                                <li>
                                                    <a class="a" href="https://ksu.edu.sa/ar/node/3035"><span>موقع
                                                            الجامعة</span></a>
                                                </li>
                                                <li>
                                                    <a class="a"
                                                        href="https://dfpa.ksu.edu.sa/ar/jobs"><span>التوظيف</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="section applications">
                                        <div class="section_content_container">
                                            <h3 class="section_title">تطبيقات الجامعة</h3>
                                            <ul class="ul section_list">
                                                <li>
                                                    <span>الخدمات الالكترونية للمنسوبين</span>
                                                </li>
                                                <li>
                                                    <span>الخدمات الالكترونية للطلاب</span>
                                                </li>
                                                <li>
                                                    <span>تطبيق آيات</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="section contacts">
                                        <div class="section_content_container">
                                            <h3 class="section_title">روابط مهمة</h3>
                                            <ul class="ul section_list">
                                                <li>
                                                    <a class="a" href="https://ksu.edu.sa/ar/node/3043"><span>السياسات
                                                            والأنظمة</span></a>
                                                </li>
                                                <li>
                                                    <a class="a"
                                                        href="https://ksu.edu.sa/ar/sustainability"><span>الاستدامة</span></a>
                                                </li>
                                                <li>
                                                    <a class="a" href="https://data.ksu.edu.sa/ar"><span>البيانات
                                                            المفتوحة</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="section stars">
                                        <a class="a"
                                            href="https://www.topuniversities.com/universities/king-saud-university"
                                            rel="noreferrer" target="_blank">
                                            <img alt="" aria-hidden="true" data-entity-type="" data-entity-uuid=""
                                                src="images\Logo.png" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="region region-bottom-footer">
                        <div id="block-copyrightfooter" class="copyright-footer block block-copyright-footer">
                            <?php
                            $currentYear = date('Y'); // الحصول على السنة الحالية

                            echo "حقوق &copy; جميع الحقوق محفوظة. جامعة العادل. 2012 - $currentYear";
                            ?>
                            </div>
                        <nav role="navigation" aria-labelledby="block-footer-menu" id="block-footer"
                            class="copyright-links block block-menu navigation menu--footer">
                            <h5 class="visually-hidden" id="block-footer-menu">Footer</h5>
                            <ul data-block="ul bottom_footer" class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="a" href="ar/copyright.html" class="nav-link"
                                        data-drupal-link-system-path="node/3070">حقوق النشر
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a" href="ar/privacy.html" class="nav-link"
                                        data-drupal-link-system-path="node/2921">سياسة الخصوصية
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="a" href="ar/terms.html" class="nav-link"
                                        data-drupal-link-system-path="node/3071">شروط الاستخدام</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </footer>
            </div>
        </div>
    </div>
@show
