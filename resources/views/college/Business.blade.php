@extends('layouts.master')
@section('title', cbLang('College of Administrative Sciences'))
@section('business', 'active')
@section('college', 'active')

@section('main')

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
            <div id="Business-Administration" class="section1">
                <h2 class="h2">ادارة اعمال</h2>
                <p>
                    دارة الأعمال هي الركيزة الأساسية لنجاح أي مؤسسة. تركز هذه التخصص على التخطيط والتنظيم والتوجيه والرقابة
                    على جميع الموارد المتاحة للمنظمة
                    <span class="more-content">
                        بهدف تحقيق أهدافها بفعالية وكفاءة. يشمل ذلك وضع استراتيجية طويلة المدى للشركة
                        ، تصميم الهيكل التنظيمي الملائم، تنمية وإدارة الموارد البشرية، تطوير خطط التسويق والمبيعات الفعالة،
                        وضبط العمليات والإجراءات الداخلية لزيادة الإنتاجية.
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
                <button class="read-more" onclick="toggleReadMore(this)">{{ cbLang('Read more') }}</button>
            </div>
            <div id="Business-Administration" class="section2">
                <h2 class="h2">محاسبة</h2>
                <p>
                    المحاسبة هي عصب أي عمل تجاري، حيث تتولى تسجيل وتبويب وتلخيص جميع المعاملات المالية للمنشأة.
                    <span class="more-content">
                        تشمل المهام المحاسبية إعداد البيانات المالية كالميزانية العمومية وقائمة الدخل والتدفقات النقدية،
                        إجراء التحليل المالي لتقييم الأداء والمركز المالي، احتساب الضرائب المستحقة على الشركة،
                        وتقديم التقارير المالية الدورية للإدارة
                        . تُعد المعلومات المحاسبية الموثوقة والدقيقة أساسية لاتخاذ القرارات الإدارية الرشيدة وضمان الامتثال
                        التنظيمي والقانوني. لذلك، تلعب المحاسبة دورًا محوريًا في ضمان الاستدامة المالية والإدارية للمنشآت
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
                <button class="read-more" onclick="toggleReadMore(this)">{{ cbLang('Read more') }}</button>
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
                                        data-lfr-editable-type="rich-text">

                                        الكلية تسعى إلى تزويد الطلاب بالمعرفة والمهارات الأساسية في مجالات إدارة الأعمال
                                        والمحاسبة. هذا يشمل فهم المبادئ والنظريات الأساسية في المجالات الوظيفية المختلفة
                                        كالتمويل والتسويق والإدارة وإدارة الموارد البشرية. كما تركز الكلية على تطوير مهارات
                                        التحليل والحكم والاتخاذ القرار اللازمة لإدارة المؤسسات بفعالية. ثانياً، تهدف الكلية
                                        إلى إعداد الطلاب للعمل في مختلف الوظائف الإدارية والمالية داخل المنظمات. وتحقق ذلك
                                        من خلال توفير فرص للتدريب العملي وربط المناهج الدراسية باحتياجات سوق العمل.
                                        وبالإضافة إلى ذلك، تسعى الكلية إلى تنمية روح المبادرة والابتكار لدى الطلاب من خلال
                                        برامج ريادة الأعمال وتشجيع المشاريع الإبداعية. وأخيراً، تهدف الكلية إلى تعزيز الوعي
                                        بالممارسات الأخلاقية والمسؤولية الاجتماعية بين الطلاب من خلال دمج هذه المواضيع ضمن
                                        المناهج الدراسية. وتتلخص الأهداف الرئيسية للكلية في إعداد خريجين قادرين على قيادة
                                        وإدارة المنظمات بكفاءة في بيئة الأعمال المتغيرة.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
