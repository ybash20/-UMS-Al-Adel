@extends('layouts.master')
@section('title', 'Computer')
@section('computer', 'active')
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="res-i5c" class="section-j6v">
        <div class="section-header">
            <div class="section-header-inner">
                <a href="#" class="section">الاقسام</a>
            </div>
        </div>
        <div class="content">
            <div id="computer-science" class="section1">
                <h2 class="h2">علوم الحاسوب</h2>
                <p>
                    علوم الحاسوب هو مجال يركز على دراسة العمليات التي تتعلق بالحوسبة.
                    <span class="more-content">
                        ويشمل نظريات الخوارزميات، وهياكل البيانات، وبرمجة الحاسوب، والذكاء الاصطناعي،وأنظمة التشغيل،
                        وقواعد
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
                <button class="read-more" onclick="toggleReadMore(this)">اقرأ المزيد</button>
            </div>
            <div id="information-technology" class="section2">
                <h2 class="h2">تقنية المعلومات</h2>
                <p>
                    تقنية المعلومات تشمل استخدام الحواسيب والشبكات لتخزين ومعالجة البيانات.
                    <span class="more-content">
                        وهي تتضمن إدارة أنظمة المعلومات، وتطوير البرمجيات، وأمن المعلومات، والدعم
                        الفني، وغيرها من الخدمات المتعلقة بالحوسبة.


                        <br>
                        : الرسالة
                        <br>

                        توفير تعليم متميز وعالي الجودة في مجال تقنية المعلومات وتزويد الخريجين بالمعرفة والمهارات
                        اللازمة
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
            <div id="networks" class="section3">
                <h2 class="h2">شبكات</h2>
                <p>
                    الشبكات هي مجال من مجالات علم الحاسوب يختص بدراسة الربط بين الحواسيب والأجهزة الأخرى لتبادل
                    البيانات.
                    <span class="more-content"> الشبكات تلعب دورًا حيويًا في الاتصالات، بما في ذلك الإنترنت، والشبكات
                        المحلية، والشبكات الواسعة، والشبكات اللاسلكية. من خلال الشبكات، يمكن للأجهزة التواصل مع بعضها
                        البعض
                        وتبادل الموارد والمعلومات بسرعة وفعالية.
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
                                        data-lfr-editable-type="rich-text">
                                        رفد المجتمع بمتخصصين في مجالات الحاسوب والمعلومات ذوي كفاءة عالية قادرين على التعامل
                                        مع المشاكل التخصصية المختلفة
                                        إنشاء شراكة فاعلة مع القطاع الحكومي وقطاع الاعمال وباقي المؤسسات ذات العلاقة لضمان
                                        مخرجات تعليمية فعالة وموجهة نحو تحقيق الأهداف ومتسقة مع احتياجات تلك القطاعات.
                                        تطوير العلاقات وتبادل الخبرات مع كليات المعنية في الجامعات المختلفة محليا وإقليميا
                                        بما ينعكس على تطوير برامج الكلية وفق متطلبات الجودة والاعتماد الأكاديمي.
                                        تعزيز دور الكلية في خدمة المجتمع المحلي والمساهمة في تنميته من خلال تقديم برامج
                                        متجددة.
                                        تحسين قدرات الطلاب الدراسية المهنية والتنافسية وتشجيع البحث العلمي والتعليم الذاتي
                                        المستمر.
                                        تنمية روح التعاون والعمل الجماعي والقيادة الفاعلة والشعور بالمسؤولية والالتزام
                                        بأخلاقيات المهنة.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
