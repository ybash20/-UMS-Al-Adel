@extends('layouts.master')
@section('title', 'computer')


@section('main')
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=/Lemonad:200,300,400,500,600,700,800,900&display=swap'); */


        .body_computer {
            background: #FFF;
            text-align: center;
            color: #212529;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            direction: rtl;
        }

        * {
            box-sizing: border-box;
            font-family: 'Lemonada', cursive;

        }

        .row-nvg {
            text-align: right;
            margin-right: -24px;
            margin-left: -30px;
            font-size: 15px;

        }

        @media (min-width: 1200px) {
            .container:not(.container-bs):not(.container-xl-custom):not(.container-xxl-custom) {
                max-width: 1170px;
                margin: 0 auto;
                padding: 0 24px;
            }
        }

        .body_computer1 {
            background-color: #fff;
            color: #212529;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            margin: 0;
            -ms-overflow-style: scrollbar;
            text-align: inherit;
        }

        .body_computer2 {
            background-color: #FFF;
            color: #777;
            font-family: 'Cairo', sans-serif;
            font-size: 14px;
            line-height: 26px;
            margin: 0;
            text-align: right;
        }

        .html_computer {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .html_computer1 {
            direction: rtl;
            overflow-x: hidden;
            box-shadow: none !important;
            -webkit-font-smoothing: antialiased;
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
            border-bottom: 1px solid;
            box-shadow: #040404
        }

        .content-q4i {
            border-top-color: #0088CC;
        }

        .content-q4i:not(.box-content-border-0) {
            margin-top: 62px;
            border-top-width: 6px;
            /* margin-bottom: 164px; */
            /* margin-right: 40px; */
            margin: 69px 15px 40px;        }

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

        .py-r1z {
            padding-top: 1.5rem !important;
        }

        .py-r1z {
            padding-bottom: 1.5rem !important;
        }

        .col-rfy {
            padding-right: 15px;
            padding-left: 15px;
            position: relative;
            width: 100%;
        }

        .col-rfy {
            flex: 0 0 25%;
            max-width: 25%;
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

        .col-wli {
            padding-right: 15px;
            padding-left: 15px;
            position: relative;
            width: 100%;
        }

        .col-wli {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        .h2_1 {
            margin-bottom: .5rem;
            margin-top: 0;
        }

        .h2_2 {
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: .5rem;
        }

        .h2_3 {
            font-size: 2rem;
        }

        .h2_4 {
            color: #212529;
            font-weight: 200;
            letter-spacing: -.05em;
            margin: 0;
            -webkit-font-smoothing: antialiased;
        }

        .h2_5 {
            font-size: 2.2em;
            font-weight: 300;
            line-height: 42px;
            margin: 0 0 32px 0;
        }

        .font-weight-jqf {
            font-weight: 400 !important;
        }

        .text-ynx {
            font-size: 1.80em !important;
        }

        .content-q4i p-cby {
            margin-top: 35px;
        }

        .col-qxc h2 {
            text-align: right;
            margin-bottom: 0;
            position: relative;
        }


        .featured-box.featured-box-primary.featured-box-text-start.mt-0 .col-qxc h2::after,
        .featured-box.featured-box-primary.featured-box-text-start.mt-0 .col-wli h2::after {
            content: "";
            position: absolute;
            bottom: -14px;
            right: 0;
            height: 4px;
            background: #c99e2d;
            width: 60px;
        }

        .p_1 {
            margin-bottom: 1rem;
            margin-top: 0;
        }

        .p_2 {
            text-align: justify !important;
        }

        .p_3 {
            color: #212529;
            line-height: 26px;
            margin: 0 0 20px;
            text-align: justify;
        }

        .text-6il {
            font-size: 1.1em !important;
        }

        .img_1 {
            vertical-align: middle;
        }

        .leader-olg img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
        }

        .strong_1 {
            font-weight: bolder;
        }

        .font-weight-extra-jqe {
            font-weight: 800 !important;
        }

        .a_1 {
            color: #007bff;
            cursor: pointer;
            text-decoration: none;
        }

        .a_2 {
            color: #c99e2d;
        }

        .a_3 {
            text-decoration: none;
        }

        .a_4 {
            color: #1b3c6a;
        }

        .a_5 {
            outline: none !important;
        }

        [type="button"] {
            cursor: pointer;
            -webkit-appearance: button;
        }

        .btn-y2x {
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem;
            color: #212529;
            cursor: pointer;
            display: inline-block;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            padding: .375rem .75rem;
            text-align: center;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            user-select: none;
            vertical-align: middle;
        }

        .box-iyc {
            color: #c79d2d;
            border: 1px solid;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 500;
        }

        .btn-y2x {
            font-size: 0.8rem;
            padding: 0.533rem 0.933rem;
            cursor: pointer;
        }

        .ovsoj {
            float: left;
        }

        .a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .a:hover {
            color: #0099e6;
        }

        a,
        .a:hover {
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

        .btn-y2x:hover {
            color: #212529;
            text-decoration: none;
        }

        .box-iyc:hover {
            color: #fff;
            background: #c79d2d;
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
@endsection
