@extends('layouts.master')
@section('title', 'computer')


@section('main')
    <style>
        * {
            box-sizing: border-box;

        }

        .row-nvg {
            text-align: right;
            /* margin-right: -24px;
                                                margin-left: -30px; */
            font-size: 20px;

        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: auto;
            }
        }

        .p-cby {
            padding: 1.5rem !important;
        }

        .content-q4i {
            border-radius: 8px;
            border-top: 1px solid rgba(0, 0, 0, 0.06);
            border-top-width: 4px;
            padding: 1.8rem;
            position: relative;
            /* border-bottom: 1px solid; */
            padding: 15px;
            /* border-left: groove; */
            /* border-right: groove; */
            box-shadow: 9px 8px 13px -9px #777;
        }

        .content-q4i {
            border-top-color: #0088CC;
        }

        .content-q4i:not(.box-content-border-0) {
            margin-top: 62px;
            border-top-width: 6px;
            /* margin-bottom: 164px; */
            /* margin-right: 40px; */
            margin: 69px 15px 40px;
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
        }

        :selection {
            color: #FFF;
            background: #0088CC;
        }

        @media (min-width: 1200px) {
            .item-dr7 {
                align-items: center !important;
            }
        }

        .col-qxc {
            padding-right: 15px;
            padding-left: 15px;
            position: relative;
            width: 100%;
        }

        .col-qxc {
            flex: 0 0 75%;
        }

        .col-qxc h2 {
            text-align: right;
            margin-bottom: 0;
            position: relative;
        }

        a {
            color: #1b3c6a;
        }

        .contener {
            display: flex;
        }

        @media (max-width: 600px) {
            .contener {
                display: block;
            }
        }

        /*iiiii*/

        /* @import url('https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900&display=swap'); */

        .body {
            color: #212529;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-align: inherit;
            direction: rtl;
        }

        * {
            box-sizing: border-box;
        }

        .body {
            background-color: #fff;
            color: #212529;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            margin: 0;
            -ms-overflow-style: scrollbar;
            text-align: inherit;
        }

        .body {
            background-color: #FFF;
            color: #777;
            font-family: 'Cairo', sans-serif;
            font-size: 14px;
            line-height: 26px;
            margin: 0;
            text-align: right;
        }

        .html {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .html {
            direction: rtl;
            overflow-x: hidden;
            box-shadow: none !important;
            -webkit-font-smoothing: antialiased;
        }

        :root {
            --animate-duration: 1s;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: auto;
            }
        }

        .border-ofn {
            border: 0 !important;
        }

        .m-6ji {
            margin: 0 !important;
        }

        .section.section-j6v {
            background: #f7f7f7;
            border-top: 5px solid #f1f1f1;
            margin: 30px 0;
            padding: 50px 0;
        }

        #res-i5c {

            background-color: #f3f3f3;

            background-position: 100% 100%;
            /* background-repeat: no-repeat; */
            position: relative;
            box-shadow: 11px 2px 26px 3px darkgrey;
            /* border-radius: 64px;*/
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
        }

        #res-i5c:before {
            content: "";
            display: block;
            height: 12px;
            left: 0;
            max-width: 465px;
            position: absolute;
            top: 0;
            width: 50%;
            background-color: #0088CC;
        }

        :selection {
            color: #FFF;
            background: #0088CC;
        }

        .h2 {
            margin-bottom: .5rem;
            margin-top: 0;
        }

        .h2 {
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: .5rem;
        }

        .h2 {
            font-size: 2rem;
        }

        .h2 {
            color: #212529;
            font-weight: 200;
            letter-spacing: -.05em;
            margin: 0;
            -webkit-font-smoothing: antialiased;
        }

        .h2 {
            font-size: 2.2em;
            font-weight: 300;
            line-height: 42px;
            margin: 0 0 32px 0;
        }

        a {
            color: #007bff;
            cursor: pointer;
            text-decoration: none;
        }

        a {
            color: #c99e2d;
        }

        a {
            text-decoration: none;
        }

        a {
            color: #1b3c6a;
        }

        a {
            outline: none !important;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        a:hover {
            color: #0099e6;
        }

        a,
        a:hover {
            color: #1b3c6a;
        }

        a:not(.btn):hover {
            text-decoration: none;
        }

        /* These were inline style tags. Uses id+class to override almost everything */
        /* Section Styles */
        /* Section Styles */
        #res-i5c.section-j6v {
            border: none;
            padding: 20px;
            border-radius: 10px;
        }

        .section-header {
            display: flex;
            justify-content: center;
            max-width: 1562px;
            padding-left: 20px;
            padding-right: 20px;
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .section-header-inner {
            text-align: center !important;
            line-height: 1.5;
            font-size: 32px;
            font-weight: 500;
            margin: 30px 0;
        }

        .section-header-inner a {
            color: #212529;
            text-decoration: none;
            position: relative;
        }

        .section-header-inner a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background-color: #007bff;
            display: block;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            transition: 0.5s;
        }

        .section-header-inner a:hover::after {
            width: 90%;
        }

        /* Button Styles */
        .section-btn-coll {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .section-btn-coll .section-button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            margin: 0 15px;
            transition: background-color 0.3s ease;
            font-size: large;
        }

        .section-btn-coll .section-button:hover {
            background-color: #0056b3;
        }

        .section-btn-coll .section-button:first-of-type {
            margin-left: 0;
        }

        .section-btn-coll .section-button:last-of-type {
            margin-right: 0;
        }

        @media (max-width: 1562px) {
            .section-header {
                padding-left: 18px;
                padding-right: 18px;
            }
        }

        .body {
            font-family: Arial, sans-serif;
            direction: rtl;
            text-align: right;
            margin: 0;
            padding: 0;
        }

        .section-btn-coll {
            display: flex;
            gap: 10px;
            padding: 20px;
            background-color: #f8f8f8;
            border-bottom: 1px solid #ddd;
        }

        .section-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .section-button:hover {
            background-color: #0056b3;
        }

        .content {
            padding: 20px;
        }

        .more-content {
            display: none;
        }


        .read-more {
            color: #007BFF;
            cursor: pointer;
        }

        .Business-Administration {
            /* border: 1px solid #0056b3; */
            box-shadow: 13px 2px 21px 3px darkgrey;
            margin: 13px;
            height: auto;
            text-align: right;
            padding: 21px;
            border-radius: 8px;
            font-size: 18px;
        }

        iframe {
            width: 100%;
            height: 500px;
            border: none;
            box-shadow: 13px 2px 21px 3px darkgrey;
            border-radius: 4px;
            margin-top: 5px;

        }
    </style>
    <div class="contener">
        <div class="content-q4i p-cby">
            <div class="row-nvg item-dr7">
                <div class="col-qxc">
                    <div
                        class="box-content p-4 XXsnipcss_extracted_selector_selectionXX snipcss0-0-0-1 tether-element-attached-top tether-element-attached-center tether-target-attached-top tether-target-attached-center">
                        <div class="row align-items-xl-center snipcss0-1-1-2">
                            <div class="col-9 snipcss0-2-2-6">
                                <h2 class="font-weight-normal text-6 snipcss0-3-6-7" data-lfr-editable-id="card2"
                                    data-lfr-editable-type="rich-text">نبذة عن الجامعة&nbsp;<br class="snipcss0-4-7-8">
                                </h2>
                            </div>
                        </div>
                        <div class="row py-4 text-end snipcss0-1-1-10">
                            <div class="col snipcss0-2-10-11">
                                <p class="text-3-4 snipcss0-3-11-12" data-lfr-editable-id="card3"
                                    data-lfr-editable-type="rich-text">
                                    الحمد لله وحده والصلاة والسلام على من لا نبي بعده وعلى
                                    آله وصحبه
                                    أصبح الناس على مختلف مستوياتهم يدركون أهمية الحاسوب وتقنية المعلومات ويشعرون بالقفزة
                                    الحضارية الكبيرة التي أدخلها الحاسوب على العالم. ففي غضون سنوات قليلة دخلت الإنترنت إلى
                                    وعي
                                    كثير من الناس وصارت هذه الشبكة المتصلة بمئات الملايين من الحواسيب عبر العالم وسيلة
                                    للتواصل
                                    ونقل المعلومات بين أطراف العالم المترامية بحرية وبسرعة فائقة. وبلا ريب أن هذه المعلومات
                                    المتداولة تحتوي مضامين مختلفة تشكل ثقافة الإنسان وتدير دفة حضارة المجتمعات. ففي ضوء هذا
                                    الادراك لأهمية الحاسوب وتقنية المعلومات فقد حرصت جامعة نجران منذ نشأتها على إطلاق برامج
                                    نوعية في مجالات التقنية باستحداث كلية علوم الحاسب ونظم المعلومات.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-q4i p-cby">
            <div class="row-nvg item-dr7">
                <div class="col-qxc">
                    <div
                        class="box-content p-4 XXsnipcss_extracted_selector_selectionXX snipcss0-0-0-1 tether-element-attached-top tether-element-attached-center tether-target-attached-top tether-target-attached-center">
                        <div class="row align-items-xl-center snipcss0-1-1-2">
                            <div class="col-9 snipcss0-2-2-6">
                                <h2 class="font-weight-normal text-6 snipcss0-3-6-7" data-lfr-editable-id="card2"
                                    data-lfr-editable-type="rich-text">كلمة العميد&nbsp;<br class="snipcss0-4-7-8">
                                    <strong class="font-weight-extra-bold snipcss0-4-7-9">د. خالد بانافع </strong>
                                </h2>
                            </div>
                        </div>
                        <div class="row py-4 text-end snipcss0-1-1-10">
                            <div class="col snipcss0-2-10-11">
                                <p class="text-3-4 snipcss0-3-11-12" data-lfr-editable-id="card3"
                                    data-lfr-editable-type="rich-text">
                                    الحمد لله وحده والصلاة والسلام على من لا نبي بعده وعلى
                                    آله وصحبه
                                    أصبح الناس على مختلف مستوياتهم يدركون أهمية الحاسوب وتقنية المعلومات ويشعرون بالقفزة
                                    الحضارية الكبيرة التي أدخلها الحاسوب على العالم. ففي غضون سنوات قليلة دخلت الإنترنت إلى
                                    وعي
                                    كثير من الناس وصارت هذه الشبكة المتصلة بمئات الملايين من الحواسيب عبر العالم وسيلة
                                    للتواصل
                                    ونقل المعلومات بين أطراف العالم المترامية بحرية وبسرعة فائقة. وبلا ريب أن هذه المعلومات
                                    المتداولة تحتوي مضامين مختلفة تشكل ثقافة الإنسان وتدير دفة حضارة المجتمعات. ففي ضوء هذا
                                    الادراك لأهمية الحاسوب وتقنية المعلومات فقد حرصت جامعة نجران منذ نشأتها على إطلاق برامج
                                    نوعية في مجالات التقنية باستحداث كلية علوم الحاسب ونظم المعلومات.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="res-i5c" class="section-j6v">
        <div class="section-header">
            <div class="section-header-inner">
                <a href="#">الاقسام</a>
            </div>
        </div>
        <div class="content">
            <div id="Business-Administration" class="Business-Administration">
                <h2>محاسبة</h2>
                <p>
                    علوم الحاسوب هو مجال يركز على دراسة العمليات التي تتعلق بالحوسبة.
                    <span class="more-content">
                        ويشمل نظريات الخوارزميات، وهياكل البيانات، وبرمجة الحاسوب، والذكاء الاصطناعي،وأنظمة التشغيل، وقواعد
                        البيانات، وغيرها من
                        المواضيع المتقدمة.

                        <br>
                        : الرسالة
                        <br>
                        اعـداد كـوادر ذات كـفاءات عاليـة في مجال علـوم الحاسوب من خلال دمـج المعرفـة النظريـة والتطبيـق
                        العملي بما يـؤهلهم للمنافسـة فـي سـوق العمـل.

                        <br>
                        : الخطة الدراسية
                        <br>
                        <iframe src="https://cfm.ehu.es/ricardo/docs/python/Learning_Python.pdf" frameBorder="0"
                            scrolling="auto"></iframe>
                    </span>
                </p>
                <span class="read-more" onclick="toggleReadMore(this)">اقرأ المزيد</span>
            </div>
            <div id="Business-Administration" class="Business-Administration">
                <h2>ادارة اعمال</h2>
                <p>
                    تقنية المعلومات تشمل استخدام الحواسيب والشبكات لتخزين ومعالجة البيانات.
                    <span class="more-content">
                        وهي تتضمن إدارة أنظمة المعلومات، وتطوير البرمجيات، وأمن المعلومات، والدعم
                        الفني، وغيرها من الخدمات المتعلقة بالحوسبة.


                        <br>
                        : الرسالة
                        <br>

                        توفير تعليم متميز وعالي الجودة في مجال تقنية المعلومات وتزويد الخريجين بالمعرفة والمهارات اللازمة
                        لجعلهم قادرين على المنافسة في سوق العمل.
                        <br>
                        : الخطة الدراسية
                        <br>
                        <iframe src="https://cfm.ehu.es/ricardo/docs/python/Learning_Python.pdf" frameBorder="0"
                        scrolling="auto"></iframe>
                    </span>
                </p>
                <span class="read-more" onclick="toggleReadMore(this)">اقرأ المزيد</span>
            </div>
            
        </div>

        <script>
            function toggleReadMore(element) {
                const moreContent = element.previousElementSibling.querySelector('.more-content');
                if (moreContent.style.display === 'none' || moreContent.style.display === '') {
                    moreContent.style.display = 'inline';
                    element.textContent = 'اقرأ أقل';
                } else {
                    moreContent.style.display = 'none';
                    element.textContent = 'اقرأ المزيد';
                }
            }
        </script>
    </section>
@endsection
