@extends('layouts.master')
@section('title', 'Islamic')
@section('islamic', 'active')
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
                            <p class="text-3-4">{!! $college->Dean_Speech !!}</p>
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
            <div id="Qur’anic-Sciences" class="section1">
                <h2 class="h2">علوم القراّن</h2>
                <p>
                    علوم القرآن الكريم تعد أحد أهم التخصصات الإسلامية الأساسية.
                    <span class="more-content">
                        تشمل هذه العلوم دراسة نزول القرآن وتدوينه
                        ، وعلوم الرسم والقراءات القرآنية، وأسباب النزول والناسخ والمنسوخ، وتفسير معاني القرآن وأساليبه
                        البلاغية. كما تشتمل على علوم التجويد والأحكام المتعلقة بتلاوة القرآن.
                        إن إتقان هذه العلوم يساعد في فهم الخطاب القرآني والكشف عن دلالاته وأسراره، وتوجيه المسلمين للعمل
                        بأحكامه وتعاليمه. وتعد هذه المعارف أساسية لكافة الدراسات الإسلامية الأخرى كالتفسير والفقه والحديث
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
            <div id="Islamic-Studies" class="section2">
                <h2 class="h2">دراسات إسلامية</h2>
                <p>

                    الدراسات الإسلامية هي مجال أكاديمي واسع يشمل مختلف جوانب الإسلام والحضارة الإسلامية.
                    <span class="more-content">

                        يتناول هذا التخصص دراسة العقيدة الإسلامية والأحكام الشرعية، ومصادرها الأساسية كالقرآن الكريم والسنة
                        النبوية.
                        كما يتطرق إلى تاريخ الإسلام وتطوره عبر العصور، والفقه الإسلامي والأنظمة القانونية والاقتصادية
                        المستمدة منه
                        . بالإضافة إلى ذلك، تشمل الدراسات الإسلامية البحث في علوم اللغة العربية والأدب الإسلامي والفلسفة
                        والعلوم الاجتماعية المرتبطة بالإسلام.


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
                                        data-lfr-editable-type="rich-text">كلية الدراسات الإسلامية وعلوم القرآن تسعى لتحقيق
                                        مجموعة شاملة من الأهداف الأكاديمية والتربوية. على رأس هذه الأهداف هو تزويد الطلاب
                                        بالمعرفة المتعمقة والفهم الدقيق للعلوم الإسلامية والقرآنية. يشمل ذلك دراسة القرآن
                                        الكريم وعلومه، السنة النبوية وعلومها، العقيدة الإسلامية، الفقه والتشريع الإسلامي،
                                        والتاريخ الإسلامي. كما تركز الكلية على تنمية مهارات الطلاب في البحث والتحليل
                                        والتفسير النقدي للنصوص الشرعية. بالإضافة إلى ذلك، تهدف الكلية إلى إعداد الطلاب للعمل
                                        في مختلف المجالات المرتبطة بالدراسات الإسلامية، كالوعظ والإرشاد الديني، التدريس في
                                        المؤسسات التعليمية الإسلامية، والعمل في المؤسسات الدينية والإدارية. ومن الأهداف
                                        المهمة أيضًا تعزيز الهوية والقيم الإسلامية لدى الطلاب، وتنمية شخصياتهم بما يتوافق مع
                                        المبادئ والأخلاقيات الإسلامية. وأخيرًا، تسعى الكلية إلى المساهمة في إجراء البحوث
                                        العلمية المتخصصة في مجالات الدراسات الإسلامية وعلوم القرآن، بما يسهم في تطوير هذه
                                        العلوم وخدمة المجتمع.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
