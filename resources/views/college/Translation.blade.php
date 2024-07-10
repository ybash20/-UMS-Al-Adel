@extends('layouts.master')
@section('title', 'translation')
@section('translation', 'active')
@section('college', 'active')

@section('main')
    <link rel="stylesheet" href="css/css_college.css">
    <div class="contener">
        <div class="content-q4i p-cby">
            <div class="row-nvg item-dr7">
                <div class="box-content p-4">
                    <div class="row align-items-xl-center">
                        <div class="col-9">
                            <h2 class="font-weight-normal text-6">كلمة العميد&nbsp;<br>
                                <strong class="font-weight-extra-bold">{{ $college->Dean }}</strong>
                            </h2>
                        </div>
                    </div>
                    <div class="row py-4 text-end">
                        <div class="col">
                            <p class="text-3-4">{!! $college->Dean_Speech  !!}</p>
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
                                    <h2 class="font-weight-normal text-6">نبذة عن الكلية&nbsp;<br></h2>
                                </div>
                            </div>
                            <div class="row py-4 text-end">
                                <div class="col">
                                    <p class="text-3-4">{!! $college->Description !!}</p>
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
                <a href="#">الاقسام</a>
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
                <button class="read-more" onclick="toggleReadMore(this)">اقرأ المزيد</button>
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
                <button class="read-more" onclick="toggleReadMore(this)">اقرأ المزيد</button>
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
