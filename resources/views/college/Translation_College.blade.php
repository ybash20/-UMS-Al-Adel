@extends('layouts.master')
@section('title', cbLang('College of Languages and Translation'))
@section('translation', 'active')
@section('college', 'active')

@section('main')
@if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="css/cssAr/css_college.css">
@else
    <link rel="stylesheet" href="css/cssEN/css_college.css">
@endif
<div class="contener">
    <div class="content-q4i p-cby">
        <div class="row-nvg item-dr7">
            @if (App::getLocale() == 'ar')
                <link rel="stylesheet" href="css/cssAr/css_college.css">
            @else
                <link rel="stylesheet" href="css/cssEN/css_college.css">
            @endif
            <div class="box-content p-4">
                <div class="row align-items-xl-center">
                    <div class="col-9">
                        <h2 class="font-weight-normal text-6">{{ cbLang('Dean speech') }}&nbsp;<br>
                            @if (App::getLocale() == 'ar')
                                <strong class="font-weight-extra-bold">{{ $college->Dean_Arabic }}</strong>
                            @else
                                <strong class="font-weight-extra-bold">{{ $college->Dean_English }}</strong>
                            @endif
                        </h2>
                    </div>
                </div>
                <div class="row py-4 text-end">
                    <div class="col">
                        @if (App::getLocale() == 'ar')
                            <p class="text-3-4">{!! $college->Dean_Speech_Arabic !!}</p>
                        @else
                            <p class="text-3-4">{!! $college->Dean_Speech_English !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-q4i p-cby">
        <div class="row-nvg item-dr7">
            <div class="col-qxc">
                <div class="col-qxc">
                    <div class="box-content p-4">
                        <div class="row align-items-xl-center">
                            <div class="col-9">
                                <h2 class="font-weight-normal text-6">{{ cbLang('About the college') }}&nbsp;<br></h2>
                            </div>
                        </div>
                        <div class="row py-4 text-end">
                            <div class="col">
                                @if (App::getLocale() == 'ar')
                                    <p class="text-3-4">{!! $college->Description_Arabic !!}</p>
                                @else
                                    <p class="text-3-4">{!! $college->Description_English !!}</p>
                                @endif
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
</div>
</div>
</div>
    <section id="res-i5c" class="section-j6v">
        <div class="section-header">
            <div class="section-header-inner">
                <a href="#">{{ cbLang('Sections') }}</a>
            </div>
        </div>
        <div class="content">
            <div id="Translation" class="section1">
                <h2 class="h2">الترجمة</h2>
                <p>

                    تُعد الترجمة إحدى التخصصات المرتبطة بالدراسات اللغوية.
                    <span class="more-content">
                        يركز هذا التخصص على دراسة نظريات الترجمة وأساليبها المختلفة، مثل الترجمة الحرفية والترجمة التواصلية
                        والترجمة الوظيفية.
                        كما يتناول أنواع الترجمة المتنوعة، مثل الترجمة التحريرية والشفوية والترجمة الآلية. ويتطلب هذا المجال
                        إتقان لغتين على الأقل،
                        باإلضافة إلى معرفة جيدة بالمصطلحات والجوانب الثقافية في اللغتين. يركز البرنامج الدراسي على تطوير
                        مهارات الطلاب في التحليل اللغوي والترجمة العملية في مجالات مختلفة، كما يتضمن دراسة الأخلاقيات
                        المهنية وضوابط الجودة في مهنة الترجمة.

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
                <button class="read-more" onclick="toggleReadMore(this)">{{ cbLang('Read more') }} </button>
            </div>
            <div id="Languages" class="section2">
                <h2 class="h2">اللغات</h2>
                <p>
                    تخصص اللغات هو مجال أوسع يتناول دراسة اللغات البشرية من زوايا متعددة.
                    <span class="more-content">غطي هذا التخصص العلوم اللغوية الفرعية، مثل علم الأصوات وعلم الصرف وعلم النحو
                        وعلم الدلالة وعلم اللغة الاجتماعي.
                        يركز البرنامج الدراسي على تنمية قدرات الطلاب في تحليل اللغات وفهم بنيتها ووظائفها المختلفة،
                        بالإضافة إلى دراسة تطور اللغات وتأثرها بالعوامل الخارجية. تفتح هذه الدراسات آفاقًا واسعة للعمل في
                        مجالات التعليم واللغويات والترجمة وتكنولوجيا المعلومات.

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
                <button class="read-more" onclick="toggleReadMore(this)">{{ cbLang('Read more') }} </button>
            </div>
        </div>

        <script>
            function toggleReadMore(element) {
                const moreContent = element.previousElementSibling.querySelector('.more-content');
                if (moreContent.style.display === 'none' || moreContent.style.display === '') {
                    moreContent.style.display = 'inline';
                    element.textContent = ' {{ cbLang('Read less') }}';
                } else {
                    moreContent.style.display = 'none';
                    element.textContent = 'اقرأ المزيد';
                }
            }
        </script>
    </section>
    <section id="res-i5c" class="section-j6v">
        <div class="section-header">
            <div class="section-header-inner">
                <a href="#">{{ cbLang('Objectives') }}</a>
            </div>
        </div>
        <div class="contener">
            <div class="content-q4i p-cby">
                <div class="row-nvg item-dr7">
                    <div class="col-qxc">
                        <div
                            class="box-content p-4 XXsnipcss_extracted_selector_selectionXX snipcss0-0-0-1 tether-element-attached-top tether-element-attached-center tether-target-attached-top tether-target-attached-center">
                            <div class="row align-items-xl-center snipcss0-1-1-2">
                            </div>
                            <div class="row py-4 text-end snipcss0-1-1-10">
                                <div class="col snipcss0-2-10-11">
                                    <p class="text-3-4 snipcss0-3-11-12" data-lfr-editable-id="card3"
                                        data-lfr-editable-type="rich-text"> تسعى لتحقيق مجموعة من الأهداف الرئيسية. الهدف
                                        الأول هو تزويد الطلاب بالمعرفة والمهارات اللازمة في مجالات الترجمة والتفسير بين
                                        اللغات المختلفة. وهذا يتضمن إتقان لغتين أو أكثر بشكل متقن، وإكساب الطلاب المهارات
                                        التقنية والإبداعية اللازمة لعملية الترجمة. بالإضافة إلى ذلك، تهدف الكلية إلى تطوير
                                        قدرات التواصل والتفاعل الثقافي للطلاب، حيث تشجع على فهم وتقدير الاختلافات الثقافية.
                                        كما تسعى الكلية إلى إعداد الطلاب للعمل في مختلف المجالات المرتبطة بالترجمة والتواصل
                                        اللغوي، بما في ذلك الترجمة التحريرية والشفهية، والتفسير، والتحرير اللغوي، وخدمات
                                        الاتصال الدولية. وبالإضافة إلى ذلك، تهدف الكلية إلى تعزيز البحث العلمي في مجالات
                                        الترجمة واللغات، وتطوير النظريات والممارسات في هذه المجالات. وأخيرًا، تسعى الكلية
                                        إلى تعزيز الوعي والفهم الثقافي بين الطلاب، مما يؤهلهم للعمل بفعالية في بيئة متعددة
                                        الثقافات. بشكل عام، تهدف كلية الترجمة واللغات إلى إعداد خريجين متمكنين لغويًا
                                        ومؤهلين للعمل في مختلف المجالات التي تتطلب الكفاءة اللغوية والثقافية. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
