@extends('layouts.master')
@section('title', 'Electronic registration.blade')

@section('main')

    {{-- <link rel="stylesheet" type="text/css" href="styles.css"> --}}
    <link rel="stylesheet" href="css/css_registration.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    {{-- <header>
		@include('layouts.header')
	   </header>
	 --}}
    <div class="body_form">

        <div class="wrapper">
            <div class="header">
                <ul>
                    <li class="active form_1_progessbar">
                        <div>
                            <p>1</p>
                        </div>
                    </li>
                    <li class="form_2_progessbar">
                        <div>
                            <p>2</p>
                        </div>
                    </li>
                    <li class="form_3_progessbar">
                        <div>
                            <p>3</p>
                        </div>
                    </li>
                    <li class="form_4_progessbar">
                        <div>
                            <p>4</p>
                        </div>
                    </li>
                    <li class="form_5_progessbar">
                        <div>
                            <p>5</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="form_wrap">
                <div class="form_1 data_info">
                    <h2>المعلومات الشخصية</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div>
                                <label for="name"> اسم الطالب</label>
                            <input type="text" name="name" class="input" id="name">
                            <label for="date of birth">تاريخ الميلاد</label>
                            <input type="date" name="date of birth" class="input" id="date of birth">
                            <label for="gender">نوع الجنس</label>
                            <select class="select">
                                <option value="">حدد نوع الجنس</option>
                                <option value="male">ذكر</option>
                                <option value="female">أنثى</option>
                            </select>

                            <label for="current address">العنوان الحالي:المحافظة</label>
                            <input type="text" name="current address" class="input" id="current address">

                            <label for="district">العنوان الحالي:المديرية</label>
                            <input type="text" name="district" id="district" class="input">

                            <label for="id-type">نوع الهوية</label>
                            <select name="id-type" id="id-type" class="input">
                                <option value="">حدد نوع الهوية</option>
                                <option value="National identity card">بطاقة الهوية الوطنية</option>
                                <option value="passport">جواز السفر</option>
                                <option value="driving license">رخصة القيادة</option>
                            </select>

                            <label for="id-number">رقم الهوية</label>
                            <input type="text" name="id-number" id="id-number" class="input">

                            <label for="landline">رقم الهاتف الأرضي</label>
                            <input type="tel" name="landline" id="landline" class="input">
                            </div>
                        </div>
                        <div class="input_wrap2">
                            <label for="Nationality" class="label">الجنسية</label>
                                <input type="text" name="Nationality" class="input" id="Nationality">
                                <label for="Place of birth" class="label">محل الميلاد</label>
                                <input type="text" name="Place of birth" class="input" id="Place of birth">
                                <label for="marital-status" class="label">الحالة الاجتماعية</label>
                                <select name="marital-status" id="marital-status" class="input">
                                    <option value="">حدد حالة اجتماعية</option>
                                    <option value="single">أعزب/عزباء</option>
                                    <option value="married">متزوج/متزوجة</option>
                                    <option value="divorced">مطلق/مطلقة</option>
                                    <option value="widowed">أرمل/أرملة</option>
                                </select>
                                <label for="blood-type" class="label">فصيلة الدم</label>
                                <select name="blood-type" id="blood-type" class="input">
                                    <option value="">حدد فصيلة الدم</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>

                                <label for="city" class="label">العنوان الحالي:الحي/القرية</label>
                                <input type="text" name="city" id="city" class="input">

                                <label for="issue-date" class="label">تاريخ الإصدار</label>
                                <input type="date" name="issue-date" id="issue-date" class="input">

                                <label for="issue-location" class="label">جهة الإصدار</label>
                                <input type="text" name="issue-location" id="issue-location" class="input">

                                <label for="mobile" class="label">رقم الجوال</label>
                                <input type="tel" name="mobile" id="mobile" class="input">
                           
                        </div>
                        </div>
                    </div>
                <div class="form_2 data_info" style="display: none;">
                    <h2>بيانات الشهادة الثانوية العامة</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div>
                                <label for="seat-number">رقم الجلوس</label>
                                <input type="number" name="seat-number" id="seat-number" class="input">

                                <label for="department">القسم</label>
                                <select name="department" id="department" class="select">
                                    <option value="">حدد نوع القسم</option>
                                    <option value="Scientific">علمي</option>
                                    <option value="literary">أدبي</option>
                                </select>

                                <label for="percentage">النسبة المئوية</label>
                                <input type="number" name="percentage" id="percentage" class="input">

                                <label for="governorate">المحافظة</label>
                                <input type="text" name="governorate" id="governorate" class="input">

                                <label for="director">المديرية</label>
                                <input type="text" name="director" id="director" class="input">
                            </div>
                        </div>
                        <div class="input_wrap2">
                            <label for="total-marks">مجموع الدرجات</label>
                            <input type="number" name="total-marks" id="total-marks" class="input">

                            <label for="academic-year">العام الدراسي</label>
                            <select name="academic-year" id="academic-year" class="select">
                                <?php
                                $currentYear = date('Y');
                                for ($year = 2001; $year <= $currentYear; $year++) {
                                    $nextYear = $year + 1;
                                    $academicYear = $year . '-' . $nextYear;
                                    echo "<option value=\"$academicYear\">$academicYear</option>";
                                }
                                ?>
                            </select>
                            <label for="final-grade">النهائية الكبرى للدرجات المستحقة</label>
                            <input type="number" name="final-grade" id="final-grade" class="input">

                            <label for="certificate-date">تاريخ إصدار الشهادة</label>
                            <input type="date" name="certificate-date" id="certificate-date" class="input">

                            <label for="school">المدرسة</label>
                            <input type="text" name="school" id="school" class="input">
                        </div>
                    </div>
                </div>
                <div class="form_3 data_info" style="display: none;">
                    <h2>التخصص الذي يرغب الطالب الاتحاق به</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div>
                                <label>كلية العلوم الإدارية</label>
                                <select class="select">
                                    <option value="">حدد تخصص</option>
                                    <option value="business_administration">إدارة أعمال</option>
                                    <option value="accounting">محاسبة</option>
                                </select>

                                <label>كلية اللغات و الترجمة</label>
                                <select class="select">
                                    <option value="">حدد تخصص</option>
                                    <option value="English Language">لغة إنجليزية</option>
                                    <option value="Translation">الترجمة</option>
                                </select>

                            </div>
                        </div>
                        <div class="input_wrap2">
                            <label>كلية الحاسوب</label>
                            <select class="select">
                                <option value="">حدد تخصص</option>
                                <option value="Computer Science">علوم الحاسوب</option>
                                <option value="information technology">تقنية المعلومات</option>
                                <option value="networks">شبكات</option>

                            </select>


                            <label>كلية الشريعة والقانون</label>
                            <select class="select">
                                <option value="">حدد تخصص</option>
                                <option value="Sharia and law">الشريعة و القانون</option>
                            </select>

                            <label>كلية العلوم الإدارية</label>
                            <select class="select">
                                <option value="">حدد تخصص</option>
                                <option value="business_administration">إدارة أعمال</option>
                                <option value="accounting">محاسبة</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form_4 data_info" style="display: none;">
                    <h2>بيانات ولي امر الطالب</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div>
                                <label for="relationship">صلة القرابة</label>
                                <input type="text" id="relationship" name="relationship" class="input">

                                <label for="occupation">المهنة</label>
                                <input type="text" id="occupation" name="occupation" class="input">
                                <label for="phone_number">رقم الهاتف</label>
                                <input type="tel" id="phone_number" name="phone_number" class="input">

                            </div>
                        </div>
                        <div class="input_wrap2">
                            <label for="guardian_name">اسم ولي الأمر</label>
                            <input type="text" id="guardian_name" name="guardian_name" class="input">

                            <label for="workplace">جهة العمل</label>
                            <input type="text" id="workplace" name="workplace" class="input">

                            <label for="location">المحافظة/البلد</label>
                            <input type="text" id="location" name="location" class="input">
                        </div>
                    </div>
                    <h2>اشخاص يمكن الرجوع اليهم</h2>
                    <div class="input_wrap">
                        <div class="input_guardian_name">
                        <label for="guardian_name2">الاسم</label>
                        <input type="text" id="guardian_name2" name="guardian_name2" class="input">
                        <input type="text" id="guardian_name3" name="guardian_name3" class="input">

                        <label for="phone_number2">رقم الجوال</label>
                        <input type="tel" id="phone_number2" name="phone_number2" class="input">
                        <input type="tel" id="phone_number3" name="phone_number3" class="input">
                        </div>
                        <div class="input_wrap2">
                        <label for="telephone_fix">رقم الهاتف </label>
                        <input type="tel" id="telephone_fix" name="telephone_fix" class="input">
                        <input type="tel" id="telephone_fix2" name="telephone_fix2" class="input">

                        <label for="relationship2">صلة القرابة</label>
                        <input type="text" id="relationship2" name="relationship2" class="input">
                        <input type="text" id="relationship3" name="relationship3" class="input">
                    </div>
                    </div>
                </div>
                <div class="form_5 data_info" style="display: none;">
                    <h2>طرق التواصل </h2>
                <div>
                    @if (!empty(config('services.google')))
                    <div style="margin-bottom:10px" class='row'>
                        <div class='col-xs-12'>

                            <a href='{{ route('redirect', 'google') }}' class="btn btn-primary btn-block btn-flat"><i
                                    class='fa fa-google'></i>
                                Google Login</a>

                            <hr>
                        </div>
                    </div>
                @endif
                </div>

                </div>
                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">التالي <span class="icon"><ion-icon
                                    name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_2_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon
                                    name="arrow-back-sharp"></ion-icon></span>رجوع</button>
                        <button type="button" class="btn_next">التالي <span class="icon"><ion-icon
                                    name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_3_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon
                                    name="arrow-back-sharp"></ion-icon></span>رجوع</button>
                        <button type="button" class="btn_next">التالي <span class="icon"><ion-icon
                                    name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_4_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon
                                    name="arrow-back-sharp"></ion-icon></span>رجوع</button>
                        <button type="button" class="btn_next">التالي <span class="icon"><ion-icon
                                    name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_5_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon
                                    name="arrow-back-sharp"></ion-icon></span>رجوع</button>
                        <button type="button" class="btn_done">انهاء</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal_wrapper">
            <div class="shadow"></div>
            <div class="success_wrap">
                <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                <p>تم ارسال معلوماتك انتظر الرد</p>
            </div>
        </div>
    </div>

    {{-- <script type="text/javascript" src="scripts.js"></script> --}}
    <script src="js/js_registration.js"></script>


@endsection
