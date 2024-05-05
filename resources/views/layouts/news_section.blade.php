@section('news_sectioin')
    <style>
        /* arabic */
        @font-face {
            font-family: 'Readex Pro';
            font-style: normal;
            font-weight: 400;
            src: url(fonts/readex.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+0750-077F, U+0870-088E, U+0890-0891, U+0898-08E1, U+08E3-08FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE70-FE74, U+FE76-FEFC, U+102E0-102FB, U+10E60-10E7E, U+10EFD-10EFF, U+1EE00-1EE03, U+1EE05-1EE1F, U+1EE21-1EE22, U+1EE24, U+1EE27, U+1EE29-1EE32, U+1EE34-1EE37, U+1EE39, U+1EE3B, U+1EE42, U+1EE47, U+1EE49, U+1EE4B, U+1EE4D-1EE4F, U+1EE51-1EE52, U+1EE54, U+1EE57, U+1EE59, U+1EE5B, U+1EE5D, U+1EE5F, U+1EE61-1EE62, U+1EE64, U+1EE67-1EE6A, U+1EE6C-1EE72, U+1EE74-1EE77, U+1EE79-1EE7C, U+1EE7E, U+1EE80-1EE89, U+1EE8B-1EE9B, U+1EEA1-1EEA3, U+1EEA5-1EEA9, U+1EEAB-1EEBB, U+1EEF0-1EEF1;
        }

        .news-list .single-post a {
            font-size: 1rem;
            font-weight: 600;
            color: #4C535F;
            text-decoration: none;
            display: block;
        }

        :root {
            --primary-color: #5D3EBD;
            --secondary-color: #F5C000;
            --secondary2-color: #E2C079;
            --secondary3-color: #CDAE6C;
            --primary2-color: #0074A7;
            --sub-color: #129EBF;
            --sub2-color: #058FBD;
            --primary-font-color: #4C535F;
            --secondary-font-color: #717B8C;
            --third-font-color: #8D98AA;
            --forth-font-color: #94753B;
            --icon-color: #BAC1CC;
            --input-font-color: #CCD3DF;
            --font-color: #E0E4EC;
            --disabled-color: #EDF0F5;
            --background-color: #f9fbfd;
            --white-color: #FFFFFF;
            --black-color: #000000;
            --warning-color: #faa61a;
            --info-color: #00C0F3;
            --success-color: #26A69A;
            --error-color: #EF5350;
            --font-bold: "din-bold";
            --font-regular: "Readex Pro";
            --font-light: "Readex Pro";
            --font-medium: "Readex Pro";
            --font-sans: , sans-serif;
        }

        .newsbody {
            font-family: var(--font-regular);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            direction: rtl;
        }

        .newsbody {
            /* CSS Variables that may have been missed get put on body */
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
        }

        * {
            box-sizing: border-box;
        }

        .newsbody {
            margin: 0;
            font-family: var(--font-regular);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        .newsbody {
            background-color: var(--background-color);
            font-family: var(--font-regular);
            color: #4c535f;
            font-size: 0.9rem;
            line-height: 1.8;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        :root {
            --background-color: #f9fbfd;
            --font-regular: "Readex Pro";
        }


        .bg-5gp {
            background-color: #fff !important;
        }

        .news_section.pat-7mb {
            position: relative;
            overflow: hidden;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
        }

        :-webkit-scrollbar {
            width: 6px;
            height: 0px;
            background-color: #f5f5f5;
            border-radius: 10px;
        }

        :-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #5e5e61;
            border-radius: 10px;
        }

        :-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #f5f5f5;
            border-radius: 10px;
        }

        .mx-tka {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .content-lga {
            max-width: 1562px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        @media (max-width: 1562px) {
            .content-lga {
                margin-left: auto;
                margin-right: auto;
                padding-left: 18px;
                padding-right: 18px;
            }
        }

        .text-oqa {
            text-align: center !important;
        }

        .row-qk7 {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) * -.5);
            margin-left: calc(var(--bs-gutter-x) * -.5);
        }

        .pt-iso {
            padding-top: 0 !important;
        }

        .news_h3 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .news_h3 {
            font-size: calc(1.3rem + .6vw);
        }

        @media (min-width: 1200px) {
            .news_h3 {
                font-size: 1.75rem;
            }
        }

        .mt-mby {
            margin-top: 3rem !important;
        }

        .section-ivd {
            font-size: 32px;
            font-weight: 500;
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
        }

        .news_p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .section-xf4 {
            text-align: center;
            margin-bottom: 48px;
            font-size: 18px;
        }

        .row-qk7>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y);
        }

        @media (min-width: 992px) {
            .col-gb5 {
                flex: 0 0 auto;
                width: 50%;
            }
        }

        .mb-g7w {
            margin-bottom: 1.5rem !important;
        }

        .px-5jw {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .card-4ox {
            position: relative;
            margin: 5px;
            overflow: hidden;
            cursor: pointer;
        }

        .d-q8z {
            display: flex !important;
        }

        .post-217 {
            border-bottom: 1px solid #EDF0F5;
            padding: 10px 0 20px !important;
            align-items: center;
        }

        @media (min-width: 992px) {
            .col-sp4 {
                flex: 0 0 auto;
                width: 100%;
            }
        }

        .my-4nd {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .news_a {
            color: #0d6efd;
            text-decoration: underline;
        }

        .news_a {
            color: #006ea1;
            font-style: normal;
            text-decoration: none;
        }

        .card-4ox a {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .news_a:hover {
            color: #0a58ca;
        }

        .news_a:hover {
            color: #A88143;
        }

        .news_img {
            vertical-align: middle;
        }

        .w-ay8 {
            width: 100% !important;
        }

        .h-d84 {
            height: 100% !important;
        }

        .card-4ox img {
            width: 100%;
        }

        .card-4ox img {
            transform: scale(1);
            transition: all 0.3s ease-in-out;
        }

        .card-4ox:hover img {
            transform: scale(1.1);
        }

        .column-zop {
            flex-direction: column !important;
        }

        .content-kj5 {
            justify-content: flex-end !important;
        }

        .card-4ox .container-7xn {
            position: absolute;
            width: 100%;
            bottom: 0;
            height: 100%;
            background: rgb(0, 0, 0, 0.2);
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.1) 48%, rgba(0, 0, 0, 0.70) 100%);
            padding: 10px 20px 10px 20px;
            transition: all 0.3s ease-in-out;
        }

        .post-231 {
            width: 20%;
            min-width: 20%;
        }

        .content-lao {
            padding: 10px 10px 0px 20px;
        }

        .btn-31z {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .btn-primary-zq4 {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-84b {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            border-radius: .3rem;
        }

        .btn-primary-zq4 {
            color: #fff;
            background-color: #006ea1;
            border-color: #006ea1;
        }

        .btn-31z:hover {
            color: #212529;
        }

        .btn-primary-zq4:hover {
            color: #fff;
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }

        .btn-primary-zq4:hover {
            color: #fff;
            background-color: #00496b;
            border-color: #00496b;
        }

        .d-a64 {
            display: none !important;
        }

        .card-4ox .card-lf7 {
            position: relative;
            color: #fff;
            font-size: 18px;
            transition: all 0.3s ease-in-out;
            display: block;
            overflow: hidden;
        }

        .list-i5d .post-217 a {
            font-size: 1.4rem;
            font-weight: 600;
            color: #4C535F;
            text-decoration: none;
            display: block;
        }

        .news_h4 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .news_h4 {
            font-size: calc(1.275rem + .3vw);
        }

        @media (min-width: 1200px) {
            .news_h4 {
                font-size: 1.5rem;
            }
        }

        .card-4ox .title-b9o {
            color: #fff;
            padding-bottom: 10px;
            font-size: 18px;
        }

        .post-217 img {
            width: 100%;

        }

        .news_post_p {
            color: #787878;
            font-size: 11px;
            margin: 0;
        }

        .card_p {
            padding: 5px 15px 15px;
        }

        .lhr {
            height: 3px;
            border: none;
            background-color: #00496b;
            width: 13%;
        }
    </style>
    <div class="newsbody">
        <section class=" news_section bg-5gp pat-7mb">
            <div class="content-lga mx-tka">
                <div class="text-oqa">
                    <h3 class="news_h3 section-ivd mt-mby"><span>الأحداث والأخبار</span>
                        <hr class="lhr">
                    </h3>
                </div>
            </div>
            <div class="content-lga mx-tka">
                <div class="row-qk7 pt-iso">
                    <div class="col-gb5 px-5jw mb-g7w">
                        <div class="card-4ox">
                            <a class="news_a" href="/news0034"><span class="d-a64">دشن صاحب السمو الملكي الأمير سلمان بن
                                    سلطان بن عبد العزيز،
                                    أمير منطقة المدينة المنورة، مهرجان الثقافات والشعوب في دورته الثانية عشرة.</span></a>
                            <img class="news_img w-ay8 h-d84" width="715" height="402"
                                src="https://iu.edu.sa/media/university%20news/4F2A3242.jpg?width=715&amp;height=402&amp;rmode=crop&amp;token=B6NeewpEwbR6jaJeC5TQmhsCKHEgKEgodlIzNlPneOE%3D">
                            <div class="container-7xn d-q8z column-zop content-kj5">
                                <div class="card-lf7">
                                    <h4 class="news_h4 title-b9o">دشن صاحب السمو الملكي الأمير سلمان بن سلطان بن عبد العزيز،
                                        أمير
                                        منطقة
                                        المدينة المنورة، مهرجان الثقافات والشعوب في دورته الثانية عشرة.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card_p">
                            <p class="news_post_p">أبرز الأخبار الصحفية والتغطيات الإعلامية للفعاليات والأحداث الجامعية أبرز
                                الأخبار الصحفية والتغطيات الإعلامية للفعاليات والأحداث الجامعيةأبرز الأخبار الصحفية
                                والتغطيات الإعلامية للفعاليات</p>
                        </div>
                    </div>
                    <div class="col-gb5 px-5jw mb-g7w list-i5d">
                        <div class="post-217 pt-iso d-q8z item-oe3">
                            <div class="post-231">
                                <a class="news_a" href="/news0028"><img class="news_img w-ay8 h-d84" width="145"
                                        height="109"
                                        src="https://iu.edu.sa/media/university%20news/4F2A8832.JPG?width=145&amp;height=109&amp;rmode=crop&amp;token=BNuc6A7x21GU%2B2BnXouAfKO9Z%2FkCIHwHSI9Kku4Mo0M%3D"></a>
                            </div>
                            <div class="content-lao"> <a class="news_a" href="/news0028">سعادة رئيس الجامعة الإسلامية المكلف
                                    يدشن فعاليات
                                    وأنشطة أسبوع البحث العلمي الخامس تحت شعار: (همّةُ وأثر )</a>
                                <p class="news_post_p">أبرز الأخبار الصحفية والتغطيات الإعلامية للفعاليات والأحداث
                                    الجامعيةأبرز الأخبار الصحفية والتغطيات الإعلامية للفعاليات والأحداث الجامعيةأبرز الأخبار
                                    الصحفية والتغطيات الإعلامية للفعاليات</p>
                            </div>
                        </div>
                        <div class="post-217 pt-iso d-q8z item-oe3">
                            <div class="post-231">
                                <a class="news_a" href="/eid2"><img class="news_img w-ay8 h-d84" width="145"
                                        height="109"
                                        src="https://iu.edu.sa/media/university%20news/4G4A2838.jpg?width=145&amp;height=109&amp;rmode=crop&amp;token=BNuc6A7x21GU%2B2BnXouAfKO9Z%2FkCIHwHSI9Kku4Mo0M%3D"></a>
                            </div>
                            <div class="content-lao"> <a class="news_a" href="/eid2">رئيس الجامعة الاسلامية يرعى حفل
                                    المعايدة بمناسبة عيد
                                    الفطر المبارك </a>
                            </div>
                        </div>
                        <div class="post-217 pt-iso d-q8z item-oe3">
                            <div class="post-231">
                                <a class="news_a" href="/news/eid"><img class="news_img w-ay8 h-d84" width="145"
                                        height="109"
                                        src="https://iu.edu.sa/media/university%20news/1400.png?width=145&amp;height=109&amp;rmode=crop&amp;token=BNuc6A7x21GU%2B2BnXouAfKO9Z%2FkCIHwHSI9Kku4Mo0M%3D"></a>
                            </div>
                            <div class="content-lao"> <a class="news_a" href="/news/eid">تهنئكم الجامعة الإسلامية بحلول عيد
                                    الفطر المبارك
                                    وكل
                                    عام وأنتم بخير</a>
                            </div>
                        </div>
                        <div class="col-sp4 my-4nd text-oqa">
                            <a class="news_a btn-31z btn-primary-zq4 btn-84b w-ay8" href="{{ asset('/news') }}">المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@show
