@extends('layouts.master')
@section('title', cbLang('College of Sharia and Law'))
@section('sharia', 'active')
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
        <div id="Sharia-and-Law" class="section1">
            <h2 class="h2"> الشريعة والقانون</h2>
            <p>
                تخصص الشريعة والقانون يركز على دراسة النظم القانونية والتشريعية من منظور ديني وفلسفي.
                <span class="more-content">
                    الكريم والسنة النبوية والإجماع والقياس. كما يتناول القواعد والمبادئ العامة للشريعة الإسلامية والفقه
                    الإسلامي.
                    من ناحية أخرى، يركز هذا التخصص على دراسة المفاهيم القانونية والتشريعات الوضعية في مختلف المجالات،
                    كالقانون الدستوري والإداري والجنائي والمدني والتجاري والدولي. يتطلب هذا التخصص إتقان المصادر الأساسية
                    للشريعة والقانون،
                    وتطوير مهارات التحليل النقدي للنصوص والقواعد القانونية. كما يُعد هذا البرنامج مناسبًا لمن يرغبون في
                    العمل في المجال القضائي والإفتاء أو الاستشارات القانونية والتشريعية.
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
                    element.textContent = '{{ cbLang('Read less') }}';
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
                <a href="#">الاهداف</a>
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
                                        data-lfr-editable-type="rich-text">تسعى إلى تحقيق مجموعة من الأهداف الأساسية. أولاً
                                        وقبل كل شيء، الكلية تهدف إلى تزويد الطلاب بالمعرفة المتعمقة في مجالي الشريعة
                                        الإسلامية والقانون. وهذا يشمل دراسة المصادر الأساسية للشريعة كالقرآن الكريم والسنة
                                        النبوية، إلى جانب مبادئ القانون والنظم القانونية المختلفة. كما تركز الكلية على تطوير
                                        المهارات القانونية والبحثية للطلاب، لتمكينهم من التحليل والتفسير والتطبيق العملي
                                        للنصوص الشرعية والقانونية. ثانيًا، تهدف الكلية إلى إعداد الطلاب للعمل في مجالات
                                        مهنية متنوعة مثل القضاء والمحاماة والإفتاء والخدمات القانونية الأخرى. وذلك من خلال
                                        ربط المناهج الدراسية باحتياجات سوق العمل وتوفير فرص للتدريب والتطبيق العملي.
                                        بالإضافة إلى ذلك، تسعى الكلية إلى تعزيز الوعي والفهم لدى الطلاب بالقيم والأخلاقيات
                                        المرتبطة بالعمل في المجالات القضائية والقانونية. وأخيرًا، تهدف الكلية إلى إجراء
                                        البحوث والدراسات المتخصصة في مجالات الشريعة والقانون، والمساهمة في تطوير هذين
                                        المجالين وإثرائهما. بشكل عام، فإن كلية الشريعة والقانون تهدف إلى إعداد خريجين
                                        متمكنين علميًا وأخلاقيًا لخدمة المجتمع في المجالات القانونية والشرعية. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
