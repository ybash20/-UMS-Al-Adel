@extends('layouts.master')
@section('title', cbLang('Electronic registration'))
@section('registration', 'active')

@section('main')
    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="css/cssAr/css_registration.css">
    @else
        <link rel="stylesheet" href="css/cssEN/css_registration.css">
    @endif
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                </ul>
            </div>
            <form method="POST" class="form_wrap" id="reg-form">
                @csrf
                <div class="form_1 data_info">
                    <h2>{{ cbLang('personal information') }}</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div>
                                <label for="nameAR">{{ cbLang('student name Arabic') }}</label>
                                <input type="text" name="nameAR" class="input" id="nameAR" required>
                            </div>
                            <div>
                                <label for="nameEN">{{ cbLang('student name English') }}</label>
                                <input type="text" name="nameEN" class="input" id="nameEN" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="gender">{{ cbLang('Select a gender') }}</label>
                                <select name="gender" id="gender" class="input" required>
                                    <option value="">{{ cbLang('Select a gender') }}</option>
                                    <option value="0">{{ cbLang('Male') }}</option>
                                    <option value="1">{{ cbLang('Female') }}</option>
                                </select>
                            </div>
                            <div>
                                <label for="nationality" class="label">{{ cbLang('Nationality') }}</label>
                                <input type="text" name="nationality" class="input" id="nationality" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="place_of_birth" class="label">{{ cbLang('Place of birth') }}</label>
                                <input type="text" name="place_of_birth" class="input" id="place_of_birth" required>
                            </div>
                            <div>
                                <label for="date_of_birth">{{ cbLang('date of birth') }}</label>
                                <input type="date" name="date_of_birth" class="input" id="date_of_birth" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="blood_type" class="label">{{ cbLang('blood-type') }}</label>
                                <select name="blood_type" id="blood_type" class="input" required>
                                    <option value="">{{ cbLang('Select a blood type') }}</option>
                                    @foreach ($bloodTypes as $id => $type)
                                        <option value="{{ $id }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="marital_status" class="label">{{ cbLang('marital status') }}</label>
                                <select name="marital_status" id="marital_status" class="input" required>
                                    <option value="">{{ cbLang('Select a Marital Status') }}</option>
                                    @foreach ($maritalStatuses as $id => $status)
                                        <option value="{{ $id }}">{{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <h2>{{ cbLang('address information') }}</h2>
                        <div class="input_wrap">
                            <div>
                                <label for="governorate">{{ cbLang('Governorate') }}</label>
                                <input type="text" name="governorate" class="input" id="governorate" required>
                            </div>
                            <div>
                                <label for="directorate">{{ cbLang('Directorate') }}</label>
                                <input type="text" name="directorate" id="directorate" class="input" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="neighborbooh">{{ cbLang('neighborbooh') }}</label>
                                <input type="text" name="neighborbooh" id="neighborbooh" class="input" required>
                            </div>
                            <div>
                                <label for="address_note" class="label">{{ cbLang('address note') }}</label>
                                <input type="text" name="address_note" id="address_note" class="input">
                            </div>
                        </div>
                        <h2>{{ cbLang('Communication Methods') }}</h2>
                        <div class="input_wrap">
                            <div>
                                <label for="mobile" class="label">{{ cbLang('Phone Number') }}</label>
                                <input type="tel" name="mobile" id="mobile" class="input" required>
                            </div>
                            <div>
                                <label for="landline">{{ cbLang('Landline Number') }}</label>
                                <input type="tel" name="landline" id="landline" class="input">
                            </div>
                        </div>
                        <h2>{{ cbLang('Identity information') }}</h2>
                        <div class="input_wrap">
                            <div>
                                <label for="id_type">{{ cbLang('ID Type') }}</label>
                                <select name="id_type" id="id_type" class="input" required>
                                    <option value="">{{ cbLang('Select ID Type') }}</option>
                                    @foreach ($identityTypes as $id => $type)
                                        <option value="{{ $id }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="id_number">{{ cbLang('ID Number') }}</label>
                                <input type="text" name="id_number" id="id_number" class="input" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="issue_location" class="label">{{ cbLang('issue-location') }}</label>
                                <input type="text" name="issue_location" id="issue_location" class="input" required>
                            </div>
                            <div>
                                <label for="issue_date" class="label">{{ cbLang('issue-date') }}</label>
                                <input type="date" name="issue_date" id="issue_date" class="input" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_2 data_info" style="display: none;">
                    <div class="form_inputs">
                        <h2> {{ cbLang('qualifications') }} </h2>
                        <div class="input_wrap">
                            <div>
                                <label for="qualification_Type">{{ cbLang('qualification_Type') }}</label>
                                <select name="id_type" id="id_type" class="input" required>
                                    <option value="">{{ cbLang('Select Qualification Type') }}</option>
                                    @foreach ($qualificationType as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="disciplines">{{ cbLang('disciplines') }}</label>
                                <select name="disciplines" id="disciplines" class="input" required>
                                    <option value="">{{ cbLang('Select disciplines Type') }}</option>
                                    @foreach ($disciplines as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <h2>{{ cbLang('Institution address information') }}</h2>
                        <div class="input_wrap">
                            <div>
                                <label for="institution_name">{{ cbLang('institution_name') }}</label>
                                <input type="text" name="institution_name" id="institution_name" class="input" required>
                            </div>
                            <div>
                                <label for="institution_country">{{ cbLang('institution_country') }}</label>
                                <input type="text" name="institution_country" id="institution_country" class="input" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="institution_governorate">{{ cbLang('institution_Governorate') }}</label>
                                <input type="text" name="governorate" class="input" id="institution_governorate" required>
                            </div>
                            <div>
                                <label for="institution_directorate">{{ cbLang('institution_Directorate') }}</label>
                                <input type="text" name="institution_directorate" id="institution_directorate" class="input" required>
                            </div>
                        </div>
                        <h2>{{ cbLang('Certificate Data') }}</h2>
                        <div class="input_wrap">
                            <div>
                                <label for="academic_year">{{ cbLang('Academic Year') }}</label>
                                <select name="academic_year" id="academic_year" class="input" required>
                                    <?php
                                    $currentYear = date('Y');
                                    for ($year = 2001; $year <= $currentYear; $year++) {
                                        $nextYear = $year + 1;
                                        $academicYear = $year . '-' . $nextYear;
                                        echo "<option value=\"$academicYear\">$academicYear</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div>
                                <label for="seat_number">{{ cbLang('Seat Number') }}</label>
                                <input type="number" name="seat_number" id="seat_number" class="input" required>
                            </div>

                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="total_grade">{{ cbLang('Final Grade') }}</label>
                                <input type="number" name="total_grade" id="total_grade" class="input" required>
                            </div>
                            <div>
                                <label for="max_pass_grade">{{ cbLang('Total Marks') }}</label>
                                <input type="number" name="max_pass_grade" id="max_pass_grade" class="input" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="percentage">{{ cbLang('Percentage') }}</label>
                                <input type="number" name="percentage" id="percentage" class="input" required>
                            </div>
                            <div>
                                <label for="certificate_date">{{ cbLang('Certificate Date') }}</label>
                                <input type="date" name="certificate_date" id="certificate_date" class="input" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_3 data_info" style="display: none;">
                    <h2>
                        {{ cbLang('Desired Student Specialization') }}
                    </h2>
                    <div class="form_inputs">
                        <div class="input_wrap colleges">
                            <div>
                                <label>{{ cbLang('Colleges') }}</label>
                                <select name="colleges" class="input" id="colleges">
                                    <option value="">{{ cbLang('Select College') }}</option>
                                    {{-- @foreach ($colleges as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="input_wrap majors">
                            <div>
                                <label>{{ cbLang('Majors') }}</label>
                                <select name="majors" class="input" id="majors">
                                    <option value="">{{ cbLang('Select Specialization') }}</option>
                                    {{-- @foreach ($majors as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_4 data_info" style="display: none;">
                    <h2>{{ cbLang('Student Guardian Information') }}</h2>
                    <div class="form_inputs">
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_name">{{ cbLang('Guardian Name') }}</label>
                                <input type="text" id="guardian_name" name="guardian_name" class="input" required>
                            </div>
                            <div>
                                <label for="guardian_relationship">{{ cbLang('Relationship') }}</label>
                                <input type="text" id="guardian_relationship" name="guardian_relationship" class="input" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_occupation">{{ cbLang('Occupation') }}</label>
                                <input type="text" id="guardian_occupation" name="guardian_occupation" class="input" required>
                            </div>
                            <div>
                                <label for="workplace">{{ cbLang('Workplace') }}</label>
                                <input type="text" id="workplace" name="workplace" class="input" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_phone">{{ cbLang('Phone Number') }}</label>
                                <input type="tel" id="guardian_phone" name="guardian_phone" class="input" required>
                            </div>
                            <div>
                                <label for="guardian_location">{{ cbLang('Location') }}</label>
                                <input type="text" id="guardian_location" name="guardian_location" class="input" required>
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_landline">{{ cbLang('Landline Number') }}</label>
                                <input type="tel" id="guardian_landline" name="guardian_landline" class="input" required>
                            </div>
                        </div>
                        <h2>{{ cbLang('Contact Persons') }}</h2>
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_name2">{{ cbLang('Name') }}</label>
                                <input type="text" id="guardian_name2" name="guardian_name2" class="input" required>
                            </div>
                            <div>
                                <input type="text" id="guardian_name3" name="guardian_name3" class="input">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_phone2">{{ cbLang('Phone Number') }}</label>
                                <input type="tel" id="guardian_phone2" name="guardian_phone2" class="input" required>
                            </div>
                            <div>
                                <input type="tel" id="guardian_phone3" name="guardian_phone3" class="input">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_landline2">{{ cbLang('Landline Number') }}</label>
                                <input type="tel" id="guardian_landline2" name="guardian_landline2" class="input" required>
                            </div>
                            <div>
                                <input type="tel" id="guardian_landline3" name="guardian_landline3" class="input">
                            </div>
                        </div>
                        <div class="input_wrap">
                            <div>
                                <label for="guardian_relationship2">{{ cbLang('Relationship') }}</label>
                                <input type="text" id="guardian_relationship2" name="guardian_relationship2" class="input" required>
                            </div>
                            <div>
                                <input type="text" id="guardian_relationship3" name="guardian_relationship3" class="input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">
                            {{ cbLang('next') }}
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
                        <button type="submit" class="btn_done">
                            {{ cbLang('done') }}
                        </button>
                    </div>
                    <div class="common_btns form_5_btns" style="display: none;">
                        <button type="button" class="btn_back">
                            <span class="icon">
                                <ion-icon name="arrow-back-sharp"></ion-icon>
                            </span>
                            {{ cbLang('back') }}
                        </button>
                        <button type="submit" class="btn_done">
                            {{ cbLang('done') }}
                        </button>
                    </div>
                </div>
            </form>
            <div class="form_5 data_info" style="display: none;">
                <h2>{{ cbLang('Communication Methods') }}</h2>
                <form id="emailForm" class="input_wrap">
                    @csrf
                    <label for="email" id="label_email">
                        {{ cbLang('Email') }}
                    </label>
                    <input type="email" id="email" name="email" class="input_email" required>
                    <button type="submit" name="submit" value="send" class="butten_email">
                        {{ cbLang('Confirm') }}
                    </button>
                    <div class="email_wrapper">
                        <div class="email_shadow"></div>
                        <div class="success_wrap">
                            <span class="modal_icon"></span>
                        </div>
                    </div>
                </form>
                <form id="codeForm" class="input_wrap" style="display: none;">
                    @csrf
                    <label for="code" id="label_email">
                        {{ cbLang('Confirm Email') }}
                    </label>
                    <input type="text" id="code" name="code" class="input_email" required>
                    <input type="submit" name="submit" value="{{ cbLang('Confirm') }}" class="butten_email">
                    <div class="code_wrapper">
                        <div class="code_shadow"></div>
                        <div class="success_wrap">
                            <span class="modal_icon"></span>
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal_wrapper">
            <div class="mod_shadow"></div>
            <div class="success_wrap">
                <span class="modal_icon"></span>
            </div>
        </div>
    </div>
@endsection

@push('bottom')
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
                        if (response.type === 'success') {
                            // Show the code form and hide the email form
                            $('#emailForm').hide();
                            $('#codeForm').show();
                        }
                    },
                    error: function(xhr) {
                        showNotification(xhr.responseJSON.message, xhr.responseJSON.type, wrapper);
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
                        if (response.type === 'success') {
                            // Hide the code form
                            $('#codeForm').hide();
                        }
                    },
                    error: function(xhr) {
                        showNotification(xhr.responseJSON.message, xhr.responseJSON.type, wrapper);
                    }
                });
            });

            $('#reg-form').on('submit', function(event) {
                var wrapper = document.querySelector(".modal_wrapper");
                event.preventDefault(); // منع إعادة تحميل الصفحة
                $.ajax({
                    url: "{{ route('post-reg') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        showNotification(response.message, response.type, wrapper);
                    },
                    error: function(xhr) {
                        showNotification(xhr.responseJSON.message, xhr.responseJSON.type, wrapper);
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
                    mod_icon.classList.add('success');
                    mod_icon.innerHTML = '<ion-icon name="checkmark-sharp"></ion-icon>';
                }
                Paragraph.textContent = message;
                notification.appendChild(Paragraph);
                // Hide the notification after 5 seconds
                setTimeout(function() {
                    $(notification).slideUp(function() {
                        $(notification).remove();
                    });
                }, 8000);
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
    <script src="js/js_registration.js"></script>
@endpush
