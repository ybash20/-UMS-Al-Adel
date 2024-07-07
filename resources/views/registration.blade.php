@extends('layouts.master')
@section('title', cbLang('Electronic registration'))

@section('main')
    {{-- <link rel="stylesheet" type="text/css" href="styles.css"> --}}
    <link rel="stylesheet" href="css/css_registration.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <header>
		@include('layouts.header')
	   </header>
	 --}}
    <div class="body_form">

        <div class="wrapper">
            <div class="header">
                <ul>
                    <li class="form_1_progessbar active">
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
                    <li class="form_6_progessbar">
                        <div>
                            <p>6</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="form_wrap">
                <div class="form_1 data_info">
                    <h2>{{ cbLang('personal information') }}</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <label for="Nationality" class="label">{{ cbLang('Nationality') }}</label>
                            <input type="text" name="Nationality" class="input" id="Nationality">
                            <label for="Place of birth" class="label">{{ cbLang('Place of birth') }}</label>
                            <input type="text" name="Place of birth" class="input" id="Place of birth">
                            <label for="marital-status" class="label">{{ cbLang('marital status') }}</label>
                            <select name="marital-status" id="marital-status" class="input">
                                <option value="">{{ cbLang('Select a Marital Status') }}</option>
                                <option value="single">{{ cbLang('Single') }}</option>
                                <option value="married">{{ cbLang('Married') }}</option>
                                <option value="divorced">{{ cbLang('Divorced') }}</option>
                                <option value="widowed">{{ cbLang('Widowed') }}</option>
                            </select>
                            <label for="blood-type" class="label">{{ cbLang('blood-type') }}</label>
                            <select name="blood-type" id="blood-type" class="input">
                                <option value="">{{ cbLang('Select a blood type') }}</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>

                            <label for="city" class="label">{{ cbLang('Current address') }}</label>
                            <input type="text" name="city" id="city" class="input">

                            <label for="issue-date" class="label">{{ cbLang('issue-date') }}</label>
                            <input type="date" name="issue-date" id="issue-date" class="input">

                            <label for="issue-location" class="label">{{ cbLang('issue-location') }}</label>
                            <input type="text" name="issue-location" id="issue-location" class="input">

                            <label for="mobile" class="label">{{ cbLang('Mobile number') }}</label>
                            <input type="tel" name="mobile" id="mobile" class="input">
                        </div>
                        <div class="input_wrap2">
                            <div>
                                <label for="name"> {{ cbLang('student name') }}</label>
                                <input type="text" name="name" class="input" id="name">
                                <label for="date of birth">{{ cbLang('date of birth') }}</label>
                                <input type="date" name="date of birth" class="input" id="date of birth">
                                <label for="gender">{{ cbLang('Select a gender') }}</label>
                                <select class="select">
                                    <option value="">{{ cbLang('Select a gender') }}</option>
                                    <option value="male">{{ cbLang('Male') }}</option>
                                    <option value="female">{{ cbLang('Female') }}</option>
                                </select>

                                <label for="current address">{{ cbLang('Governorate') }}</label>
                                <input type="text" name="current address" class="input" id="current address">

                                <label for="district">{{ cbLang('District') }}</label>
                                <input type="text" name="district" id="district" class="input">

                                <label for="id-type">{{ cbLang('ID Type') }}</label>
                                <select name="id-type" id="id-type" class="input">
                                    <option value="">{{ cbLang('Select ID Type') }}</option>
                                    <option value="National identity card">{{ cbLang('National Identity Card') }}</option>
                                    <option value="passport">{{ cbLang('Passport') }}</option>
                                    <option value="driving license">{{ cbLang('Driving License') }}</option>
                                </select>

                                <label for="id-number">{{ cbLang('ID Number') }}</label>
                                <input type="text" name="id-number" id="id-number" class="input">

                                <label for="landline">{{ cbLang('Landline Number') }}</label>
                                <input type="tel" name="landline" id="landline" class="input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_2 data_info" style="display: none;">
                    <h2>{{ cbLang('High School Certificate Data') }}</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div> <label for="seat-number">{{ cbLang('Seat Number') }}</label>
                                <input type="number" name="seat-number" id="seat-number" class="input">
                                <label for="department">{{ cbLang('Department') }}</label>
                                <select name="department" id="department" class="select">
                                    <option value="">{{ cbLang('Select Department Type') }}</option>
                                    <option value="Scientific">{{ cbLang('Scientific') }}</option>
                                    <option value="literary">{{ cbLang('Literary') }}</option>
                                </select>

                                <label for="percentage">{{ cbLang('Percentage') }}</label>
                                <input type="number" name="percentage" id="percentage" class="input">

                                <label for="governorate">{{ cbLang('Governorate') }}</label>
                                <input type="text" name="governorate" id="governorate" class="input">

                                <label for="director">{{ cbLang('Directorate') }}</label>
                                <input type="text" name="director" id="director" class="input">
                            </div>
                        </div>
                        <div class="input_wrap2">
                            <label for="total-marks">{{ cbLang('Total Marks') }}</label>
                            <input type="number" name="total-marks" id="total-marks" class="input">

                            <label for="academic-year">{{ cbLang('Academic Year') }}</label>
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
                            <label for="final-grade">{{ cbLang('Final Grade') }}</label>
                            <input type="number" name="final-grade" id="final-grade" class="input">

                            <label for="certificate-date">{{ cbLang('Certificate Date') }}</label>
                            <input type="date" name="certificate-date" id="certificate-date" class="input">

                            <label for="school">{{ cbLang('School') }}</label>
                            <input type="text" name="school" id="school" class="input">
                        </div>
                    </div>
                </div>
                <div class="form_3 data_info" style="display: none;">
                    <h2>{{ cbLang('Desired Student Specialization') }}</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div>
                                <label>{{ cbLang('College of Administrative Sciences') }}</label>
                                <select class="select">
                                    <option value="">{{ cbLang('Select Specialization') }}</option>
                                    <option value="business_administration">{{ cbLang('Business Administration') }}
                                    </option>
                                    <option value="accounting">{{ cbLang('Accounting') }}</option>
                                </select>
                                <label>{{ cbLang('College of Languages and Translation') }}</label>
                                <select class="select">
                                    <option value="">{{ cbLang('Select Specialization') }}</option>
                                    <option value="English Language">{{ cbLang('English Language') }}</option>
                                    <option value="Translation">{{ cbLang('Translation') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="input_wrap2">
                            <label>{{ cbLang('College of Computer Science') }}</label>
                            <select class="select">
                                <option value="">{{ cbLang('Select Specialization') }}</option>
                                <option value="Computer Science">{{ cbLang('Computer Science') }}</option>
                                <option value="information technology">{{ cbLang('Information Technology') }}</option>
                                <option value="networks">{{ cbLang('Networks') }}</option>
                            </select>
                            <label>{{ cbLang('College of Sharia and Law') }}</label>
                            <select class="select">
                                <option value="">{{ cbLang('Select Specialization') }}</option>
                                <option value="Sharia and law">{{ cbLang('Sharia and Law') }}</option>
                            </select>

                            <label>{{ cbLang('College of Administrative Sciences') }}</label>
                            <select class="select">
                                <option value="">{{ cbLang('Select Specialization') }}</option>
                                <option value="business_administration">{{ cbLang('Business Administration') }}</option>
                                <option value="accounting">{{ cbLang('Accounting') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form_4 data_info" style="display: none;">
                    <h2>{{ cbLang('Student Guardian Information') }}</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div> <label for="relationship">{{ cbLang('Relationship') }}</label> <input type="text"
                                    id="relationship" name="relationship" class="input">
                                <label for="occupation">{{ cbLang('Occupation') }}</label>
                                <input type="text" id="occupation" name="occupation" class="input">

                                <label for="phone_number">{{ cbLang('Phone Number') }}</label>
                                <input type="tel" id="phone_number" name="phone_number" class="input">
                            </div>
                        </div>
                        <div class="input_wrap2">
                            <label for="guardian_name">{{ cbLang('Guardian Name') }}</label>
                            <input type="text" id="guardian_name" name="guardian_name" class="input">

                            <label for="workplace">{{ cbLang('Workplace') }}</label>
                            <input type="text" id="workplace" name="workplace" class="input">

                            <label for="location">{{ cbLang('Location') }}</label>
                            <input type="text" id="location" name="location" class="input">
                        </div>
                    </div>
                    <h2>{{ cbLang('Contact Persons') }}</h2>
                    <div class="input_wrap">
                        <div class="input_guardian_name">
                            <label for="guardian_name2">{{ cbLang('Name') }}</label>
                            <input type="text" id="guardian_name2" name="guardian_name2" class="input">
                            <input type="text" id="guardian_name3" name="guardian_name3" class="input">

                            <label for="phone_number2">{{ cbLang('Mobile Number') }}</label>
                            <input type="tel" id="phone_number2" name="phone_number2" class="input">
                            <input type="tel" id="phone_number3" name="phone_number3" class="input">
                        </div>
                        <div class="input_wrap2">
                            <label for="telephone_fix">{{ cbLang('Landline Number') }}</label>
                            <input type="tel" id="telephone_fix" name="telephone_fix" class="input">
                            <input type="tel" id="telephone_fix2" name="telephone_fix2" class="input">

                            <label for="relationship2">{{ cbLang('Relationship') }}</label>
                            <input type="text" id="relationship2" name="relationship2" class="input">
                            <input type="text" id="relationship3" name="relationship3" class="input">
                        </div>
                    </div>
                </div>
                <div class="form_5 data_info" style="display: none;">
                    <h2>{{ cbLang('Communication Methods') }}</h2>
                    <form id="emailForm" class="input_wrap"> @csrf <label for="email"
                            id="label_email">{{ cbLang('Email') }}</label> <input type="email" id="email"
                            name="email" class="input_email" required> <button type="submit" name="submit"
                            value="send" class="butten_email">{{ cbLang('Confirm') }}</button>
                        <div class="email_wrapper">
                            <div class="email_shadow"></div>
                            <div class="success_wrap"> <span class="modal_icon"> </span> </div>
                        </div>
                    </form>
                </div>
                <div class="form_6 data_info" style="display: none;">
                    <h2>{{ cbLang('Communication Methods') }}</h2>
                    <form id="codeForm" class="input_wrap"> @csrf <label for="code"
                            id="label_email">{{ cbLang('Confirm Email') }}</label> <input type="text" id="code"
                            name="code" class="input_email" required> <input type="submit" name="submit"
                            value="{{ cbLang('Confirm') }}" class="butten_email">
                        <div class="code_wrapper">
                            <div class="code_shadow"></div>
                            <div class="success_wrap"> <span class="modal_icon"> </span> </div>
                        </div>
                    </form>
                </div>
                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">
                            التالي
                            <span class="icon">
                                <ion-icon name="arrow-forward-sharp"></ion-icon>
                            </span>
                        </button>
                    </div>
                    <div class="common_btns form_2_btns" style="display: none;">
                        <button type="button" class="btn_back">
                            <span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>
                            {{ cbLang('back') }}
                        </button>
                        <button type="button" class="btn_next">
                            {{ cbLang('next') }}
                            <span class="icon">
                                <ion-icon name="arrow-forward-sharp"></ion-icon>
                            </span>
                        </button>
                    </div>
                    <div class="common_btns form_3_btns" style="display: none;">
                        <button type="button" class="btn_back">
                            <span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>
                            {{ cbLang('back') }}
                        </button>
                        <button type="button" class="btn_next">
                            {{ cbLang('next') }}
                            <span class="icon">
                                <ion-icon name="arrow-forward-sharp"></ion-icon>
                            </span>
                        </button>
                    </div>
                    <div class="common_btns form_4_btns" style="display: none;">
                        <button type="button" class="btn_back">
                            <span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>
                            {{ cbLang('back') }}
                        </button>
                        <button type="button" class="btn_next">
                            {{ cbLang('next') }}
                            <span class="icon">
                                <ion-icon name="arrow-forward-sharp"></ion-icon>
                            </span>
                        </button>
                    </div>
                    <div class="common_btns form_5_btns" style="display: none;">
                        <button type="button" class="btn_back">
                            <span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>
                            {{ cbLang('back') }}
                        </button>
                        <button type="button" class="btn_next">
                            {{ cbLang('next') }}
                            <span class="icon">
                                <ion-icon name="arrow-forward-sharp"></ion-icon>
                            </span>
                        </button>
                    </div>
                    <div class="common_btns form_6_btns" style="display: none;">
                        <button type="button" class="btn_back">
                            <span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>
                            {{ cbLang('back') }}
                        </button>
                        <button type="button" class="btn_done"> 
                            {{ cbLang('done') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal_wrapper">
            <div class="mod_shadow"></div>
            <div class="success_wrap">
                <span class="modal_icon">
                    <ion-icon name="checkmark-sharp"></ion-icon>
                </span>
                <p>
                    {{ cbLang('Your information has been sent. Wait for a response') }}
                </p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#emailForm').on('submit', function(event) {
                var wrapper = document.querySelector(".email_wrapper");
                event.preventDefault(); // منع إعادة تحميل الصفحة

                $.ajax({
                    url: "{{ route('check-email') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        showNotification(response.message, response.type, wrapper);
                    },
                    error: function(xhr) {
                        showNotification(xhr.responseJSON.message, xhr.responseJSON.type,
                            wrapper);
                    }
                });
            });
            $('#codeForm').on('submit', function(event) {
                var wrapper = document.querySelector(".code_wrapper");
                event.preventDefault(); // منع إعادة تحميل الصفحة

                $.ajax({
                    url: "{{ route('check-code') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        showNotification(response.message, response.type, wrapper);
                    },
                    error: function(xhr) {
                        showNotification(xhr.responseJSON.message, xhr.responseJSON.type,
                            wrapper);
                    }
                });
            });

            function showNotification(message, type, wrapper) {
                wrapper.classList.add("active");
                var notification = wrapper.querySelector('.success_wrap');

                if (notification.querySelector('p')) {
                    notification.querySelector('p').remove();
                }
                var mod_icon = notification.querySelector('.modal_icon');

                var Paragraph = document.createElement('p');
                if (type === 'error') {
                    mod_icon.classList.add('error');
                    mod_icon.innerHTML = '<ion-icon name="alert-circle-sharp"></ion-icon>';
                } else {
                    mod_icon.classList.remove('error');
                    mod_icon.innerHTML = '<ion-icon name="checkmark-sharp"></ion-icon>';
                }

                Paragraph.textContent = message;
                notification.appendChild(Paragraph);

                // إخفاء الإشعار بعد 5 ثوانٍ
                // setTimeout(function() {
                //     $(notification).slideUp(function() {
                //         $(notification).remove();
                //     });
                // }, 5000);
            }
            var modal_wrapper = document.querySelector(".modal_wrapper");
            var email_wrapper = document.querySelector(".email_wrapper");
            var code_wrapper = document.querySelector(".code_wrapper");

            var mod_shadow = document.querySelector(".mod_shadow");
            var code_shadow = document.querySelector(".code_shadow");
            var email_shadow = document.querySelector(".email_shadow");

            mod_shadow.addEventListener("click", function() {
                modal_wrapper.classList.remove("active");
            });
            email_shadow.addEventListener("click", function() {
                email_wrapper.classList.remove("active");
            });
            code_shadow.addEventListener("click", function() {
                code_wrapper.classList.remove("active");
            });
        });
    </script>
    {{-- <script type="text/javascript" src="scripts.js"></script> --}}
    <script src="js/js_registration.js"></script>
@endsection
