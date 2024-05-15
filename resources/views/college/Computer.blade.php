{{-- @extends('layouts.master')
@section('title', 'computer')


@section('main') --}}
<style>
    @import url('https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900&display=swap');



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
    }

    .row-lzg {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    @media (min-width: 1200px) {
        .container:not(.container-bs):not(.container-xl-custom):not(.container-xxl-custom) {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 24px;
        }
    }

    body {
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

    body {
        background-color: #FFF;
        color: #777;
        font-family: 'Cairo', sans-serif;
        font-size: 14px;
        line-height: 26px;
        margin: 0;
        text-align: right;
    }

    html {
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    html {
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

    .p-9o8 {
        padding: 1.5rem !important;
    }

    .content-7d7 {
        border-radius: 8px;
        border-top: 1px solid rgba(0, 0, 0, 0.06);
        border-top-width: 4px;
        padding: 1.8rem;
        position: relative;
    }

    .content-7d7 {
        border-top-color: #0088CC;
    }

    .content-7d7:not(.box-content-border-0) {
        top: -1px;
        border-top-width: 4px;
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
        .item-rii {
            align-items: center !important;
        }
    }

    .py-gy9 {
        padding-top: 1.5rem !important;
    }

    .py-gy9 {
        padding-bottom: 1.5rem !important;
    }

    .col-cyc {
        padding-right: 15px;
        padding-left: 15px;
        position: relative;
        width: 100%;
    }

    .col-cyc {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .col-6l9 {
        padding-right: 15px;
        padding-left: 15px;
        position: relative;
        width: 100%;
    }

    .col-6l9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .col-mdz {
        padding-right: 15px;
        padding-left: 15px;
        position: relative;
        width: 100%;
    }

    .col-mdz {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

    h2 {
        margin-bottom: .5rem;
        margin-top: 0;
    }

    h2 {
        font-weight: 500;
        line-height: 1.2;
        margin-bottom: .5rem;
    }

    h2 {
        font-size: 2rem;
    }

    h2 {
        color: #212529;
        font-weight: 200;
        letter-spacing: -.05em;
        margin: 0;
        -webkit-font-smoothing: antialiased;
    }

    h2 {
        font-size: 2.2em;
        font-weight: 300;
        line-height: 42px;
        margin: 0 0 32px 0;
    }

    .font-weight-io5 {
        font-weight: 400 !important;
    }

    .text-c8a {
        font-size: 1.80em !important;
    }

    .col-6l9 h2 {
        text-align: right;
        margin-bottom: 0;
        position: relative;
    }

    .featured-box.featured-box-primary.featured-box-text-start.mt-0 .col-6l9 h2::after,
    .featured-box.featured-box-primary.featured-box-text-start.mt-0 .col-mdz h2::after {
        content: "";
        position: absolute;
        bottom: -14px;
        right: 0;
        height: 4px;
        background: #c99e2d;
        width: 60px;
    }

    p {
        margin-bottom: 1rem;
        margin-top: 0;
    }

    p {
        text-align: justify !important;
    }

    p {
        color: #212529;
        line-height: 26px;
        margin: 0 0 20px;
        text-align: justify;
    }

    .text-ar3 {
        font-size: 1.1em !important;
    }

    img {
        vertical-align: middle;
    }

    .leader-zde img {
        width: 110px;
        height: 110px;
        border-radius: 50%;
    }

    strong {
        font-weight: bolder;
    }

    .font-weight-extra-84k {
        font-weight: 800 !important;
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

    [type="button"] {
        cursor: pointer;
        -webkit-appearance: button;
    }

    .btn-p8r {
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

    .box-dgd {
        color: #c79d2d;
        border: 1px solid;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 500;
    }

    .btn-p8r {
        font-size: 0.8rem;
        padding: 0.533rem 0.933rem;
        cursor: pointer;
    }

    .scoog {
        float: left;
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .ahover {
        color: #0099e6;
    }


    .a_hover {
        color: #1b3c6a;
    }

    .btn-p8r:hover {
        color: #212529;
        text-decoration: none;
    }

    .box-dgd:hover {
        color: #fff;
        background: #c79d2d;
    }

    @import url('https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900&display=swap');

    body {
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

    @media (min-width: 1200px) {
        .container:not(.container-bs):not(.container-xl-custom):not(.container-xxl-custom) {
            max-width: 1170px;
            margin: 0 auto;
            padding: 0 24px;
        }
    }

    body {
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

    body {
        background-color: #FFF;
        color: #777;
        font-family: 'Cairo', sans-serif;
        font-size: 14px;
        line-height: 26px;
        margin: 0;
        text-align: right;
    }

    html {
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    html {
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

    *,
    :before,
    :after {
        box-sizing: border-box;
    }

    :selection {
        color: #FFF;
        background: #0088CC;
    }

    .content-mym:not(.box-content-border-0) {
        top: -1px;
        border-top-width: 4px;
    }

    .box-hb3.box-p66.text-jt4.mt-8dk .col-9 h2::after,
    .box-hb3.box-p66.text-jt4.mt-8dk .col-oo4 h2::after {
        content: "";
        position: absolute;
        bottom: -14px;
        right: 0;
        height: 4px;
        background: #c99e2d;
        width: 60px;
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

    .btn-kra:hover {
        color: #212529;
        text-decoration: none;
    }

    .box-pnr:hover {
        color: #fff;
        background: #c79d2d;
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #style-67UOo.style-67UOo {
        box-sizing: border-box;
        border-style: solid;
        border-width: 0px;
        opacity: 1.0;
    }
</style>




<div class="content-7d7 p-9o8">
    <div class="row-lzg item-rii">
        <div class="col-cyc">
            <div class="leader-zde">
                <img
                    src="https://cscis.nu.edu.sa/documents/46874/0/WhatsApp+Image+2022-04-19+at+6.24.19+AM+%281%29.jpeg/6d378670-d6e8-1cc7-d03d-1204199a851b?t=1682237823865&amp;download=true">
            </div>
        </div>
        <div class="col-6l9">
            <h2 class="font-weight-io5 text-c8a">كلمة العميد&nbsp;<br>
                <strong class="font-weight-extra-84k">د.خالد بانافع </strong>
            </h2>
        </div>
    </div>
    <div class="row-lzg py-gy9">
        <div class="col-mdz">
            <p class="text-ar3">الحمد لله وحده والصلاة والسلام على من لا نبي بعده وعلى آله وصحبه<br> أصبح الناس على
                مختلف مستوياتهم يدركون أهمية الحاسوب وتقنية المعلومات ويشعرون بالقفزة الحضارية الكبيرة التي أدخلها
                الحاسوب على العالم. ففي غضون سنوات قليلة دخلت الإنترنت إلى وعي كثير من الناس وصارت هذه الشبكة المتصلة
                بمئات الملايين من الحواسيب عبر العالم وسيلة للتواصل ونقل المعلومات بين أطراف العالم المترامية بحرية
                وبسرعة فائقة. وبلا ريب أن هذه المعلومات المتداولة تحتوي مضامين مختلفة تشكل ثقافة الإنسان وتدير دفة حضارة
                المجتمعات. ففي ضوء هذا الادراك لأهمية الحاسوب وتقنية المعلومات فقد حرصت جامعة نجران منذ نشأتها على إطلاق
                برامج نوعية في مجالات التقنية باستحداث كلية علوم الحاسب ونظم المعلومات.</p>

        </div>
    </div>
</div>
<div style="padding:5px">
    <div>
        <div>
            <div class="style-67UOo" id="style-67UOo">
                <div>
                    <div>
                        <div class="box-hb3 box-p66 text-jt4 mt-8dk">
                            <div class="content-mym">
                                <div>
                                    <div class="col-oo4">
                                        <div>
                                            {{-- <img
                                                src="https://cscis.nu.edu.sa/documents/46874/0/208619947477+%281%29.jpg/e5fc90ae-105c-1501-f759-80bd43dde305?t=1652174393596&amp;download=true"> --}}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-oo4">
                                        <h2>نبذه عن <b>الكلية</b></h2>
                                        <p>أُنشئت كلية علوم الحاسب ونظم المعلومات بجامعة نجران في مطلع العام الجامعي
                                            1427 هـ حيث شكل قسمي علوم الحاسب و نظم المعلومات النواة الأولى للكلية مقدمةً
                                            من خلالهما عدد من البرامج في مجال الحاسوب وتقنية المعلومات لصناعة السوق
                                            المحلية ولمواكبة التطورات التقنية وتحقيق متطلبات التعليم العالي في وطننا
                                            الغالي.</p>
                                        <div><a href="/about-us" class="btn-kra box-pnr" type="button">المزيد</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
