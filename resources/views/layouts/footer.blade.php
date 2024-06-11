@section('footer')
    <style>
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

        body {
            font-family: 'Dosis';
        }

        .footer {
            direction: rtl;
            font-size: 16px;
            font-family: 'GE-Dinar';
        }

        [lang=ar] .footer {
            font-family: "GE-Dinar", sans-serif;
            text-align: right;
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

        footer.footer .block-social-media-links .footer-ul.social-media-links--platforms {
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

        footer.footer .block-social-media-links .footer-ul.social-media-links--platforms li {
            padding: 0;
            display: flex
        }

        footer.footer .block-social-media-links .fab {
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

        footer.footer .block-footerinner {
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
            align-items: center;
            gap: 2rem
        }

        @media screen and (max-width: 600px) {
            footer.footer .region-bottom-footer {
                white-space: normal
            }

            .footer-block{
                display: inherit;
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
                white-space: nowrap;
                dominant-baseline: alphabetic;
            }
            .footer-block{
                display: flex;
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

        .footer-ul.inline {
            display: inline;
            padding-left: 0;
        }

        [dir="rtl"] .footer-ul.inline {
            padding-right: 0;
            padding-left: 15px;
        }

        .footer-ul.inline li {
            display: inline;
            padding: 0 0.5em;
            list-style-type: none;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        .footer-ul {
            padding-left: 2rem;
        }

        .footer-ul {
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

        .fab:hover {
            color: #00496b;
            transition: 0.2s;
        }

        .map {
            width: 322px;
            height: 258px;
            border-radius: 15px;
            border: none;
        }

        .section-stars a img {
            border-radius: 15px;
        }
        .section-stars{
            display: block;
        }
    </style>
    <footer class="footer">
        <div class="region-footer">
            <div class="block-social-media-links">
                <ul class="footer-ul social-media-links--platforms inline">
                    <li>
                        <a class="social-media-icon" href="https://www.youtube.com/@user-nz4ef8qy7h" target="_blank"
                            rel="nofollow">
                            <span class="fab fa-youtube "></span>
                        </a>
                    </li>
                    <li>
                        <a class="social-media-icon" href="https://www.facebook.com/Aladel.University/" target="_blank"
                            rel="nofollow">
                            <span class="fab fa-facebook "></span>
                        </a>
                    </li>
                    <li>
                        <a class="social-media-icon" href="https://www.instagram.com/aladel.un?igsh=NnkwcDM0eTRkbTVh"
                            target="_blank" rel="nofollow">
                            <span class="fab fa-instagram "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="block-footerinner">
                <div class="footer-inner">
                <div class="footer-block">
                    <div class="section-contacts">
                        <div class="section_content_container">
                            <h3 class="section_title">
                                تواصل معنا
                            </h3>
                            <ul class="footer-ul section_list">
                                <li>
                                    <a href="https://ksu.edu.sa/ar/Contact_Us">
                                        <span>
                                            اتصل بنا
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ksu.edu.sa/ar/node/3035">
                                        <span>
                                            موقع الجامعة
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://dfpa.ksu.edu.sa/ar/jobs">
                                        <span>
                                            التوظيف
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="section-contacts">
                        <div class="section_content_container">
                            <h3 class="section_title">
                                روابط مهمة
                            </h3>
                            <ul class="footer-ul section_list">
                                <li>
                                    <a href="https://ksu.edu.sa/ar/node/3043">
                                        <span>
                                            السياسات والأنظمة
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ksu.edu.sa/ar/sustainability">
                                        <span>
                                            الاستدامة
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://data.ksu.edu.sa/ar">
                                        <span>
                                            البيانات المفتوحة
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <div class="section-stars">
                        <a href="https://www.topuniversities.com/universities/king-saud-university" rel="noreferrer"
                            target="_blank">
                            <h3 class="section_title">
                                شعار الجامعة</h3>
                            <img src="{{ asset('vendor/crudbooster/assets/LOGO.png') }}" />
                        </a>
                    </div>
                    <div class="section-stars">
                        <h3 class="section_title">
                            موقع الجامعة</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8937.163427615887!2d44.97096182687302!3d12.835120648389855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x161e1d29e7cb165f%3A0x738af63d3af0cc21!2z2KzYp9mF2LnYqSDYp9mE2LnYp9iv2YQg2YTZhNi52YTZiNmFINin2YTYpdmG2LPYp9mG2YrYqSDZiNin2YTYqti32KjZitmC2YrYqQ!5e0!3m2!1sar!2s!4v1715543660465!5m2!1sar!2s"
                            class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                            
                    </div>
                </div>
                <div class="region-bottom-footer">
                    <div class="block-copyright-footer">
                        <?php
                        echo 'حقوق &copy; جميع الحقوق محفوظة. جامعة العادل. 2012 - ' . date('Y');
                        ?>
                    </div>
                    <nav class="copyright-links">
                        <ul class="footer-ul nav navbar-nav">
                            <li class="nav-item">
                                <a href="ar/copyright.html" class="nav-link">
                                    حقوق النشر
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ar/privacy.html" class="nav-link">
                                    سياسة الخصوصية
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ar/terms.html" class="nav-link">
                                    شروط الاستخدام
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </footer>
@show
