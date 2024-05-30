<?php if (isset($_GET['lang'])) {
    setcookie('lang', $_GET['lang'], time() + 3 * 86, 400);
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ cbLang('page_title_login') }} </title>
    <meta name='generator' content='CRUDBooster' />
    <meta name='robots' content='noindex,nofollow' />
    <link rel="shortcut icon"
        href="{{ CRUDBooster::getSetting('favicon') ? asset(CRUDBooster::getSetting('favicon')) : asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- support rtl-->
    @if (in_array(App::getLocale(), ['ar', 'fa']))
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css" />
        <link href="{{ asset('vendor/crudbooster/assets/rtl.css') }}" rel="stylesheet" type="text/css" />
    @endif
    <link rel='stylesheet' href='{{ asset('vendor/crudbooster/assets/css/main.css') }}' />
    <style type="text/css">
        a {
            color: #3c8dbc
        }

        a:hover,
        a:active,
        a:focus {
            outline: none;
            text-decoration: none;
            color: #72afd2
        }

        .btn:active {
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            -moz-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
        }

        .btn:focus {
            outline: none
        }

        .btn-primary {
            background-color: #3c8dbc;
            border-color: #367fa9
        }

        .btn-primary:hover,
        .btn-primary:active {
            background-color: #367fa9
        }

        @media (max-width:768px) {
            .login-box {
                width: 90%;
                margin-top: 20px
            }
        }

        .login-box-body {
            background: #fff;
            padding: 20px;
            border-top: 0;
            color: #666
        }

        .login-box-msg {
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px
        }

        :root {
            --primary: #0661c278;
            --secondary: #bfc0c0;
            --white: #fff;
            --text-clr: #5b6475;
            --header-clr: #25273d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            outline: none;
            /* font-family: 'Lemonada', cursive; */
        }
        .input {
            margin: 7px 0;
        }

        .input:focus {
            border-color: var(--primary);
        }

        .fas.fa-user-graduate {
            font-size: 80px;
            color: rgb(0, 0, 0);
            justify-content: center;
        }

        .fas.fa-user-tie {
            font-size: 80px;
            color: rgb(6, 6, 6);
            justify-content: center;
        }

        .button {
            background: #fff;
            border-radius: 20px;
            padding: 15px;
            border-width: 1px;
            border-style: solid;
        }

        .img_login {
            width: 250px;
            height: 150px;
        }

        .button_lang {
            width: 75px;
            background-color: #3c8dbc;
            border-radius: 4px;
            color: white;
            border: none;
            font-family: sans-serif;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-button {
            background-color: #5c81cc;
            border: none;
            color: #fff;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 30px;
            border-radius: 4px;
            cursor: pointer;
            padding: 5px;
            width: 100%;
        }

        .header-button:hover {
            background-color: #fff
        }

        @media (max-width: 508px) {
            .header-button {
                background-color: #5c81cc;
                border: none;
                color: #fff;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 30px;
                border-radius: 4px;
                cursor: pointer;
                padding: 5px;
                width: 100%;
                margin-top: -256px;
            }
        }

        .login-page {
            margin-top: 0;
            margin-bottom: 0;
            background: #0661c278;
        }

        .login-box-body {
            background: #fff;
            padding: 20px;
            border-top: 0;
            color: #666
        }

        .login-box-body {
            max-width: 508px;
            box-shadow: 10px 10px 35px -10px black;
            border-radius: 15px;
            height: 100%;
            padding: 37px;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        @media (max-width: 700px) {
            .login-box-body {
                width: auto;
                margin: 0px auto;
                margin-top: 100%;
                box-shadow: 9px 12px 54px -8px #555;
                border-radius: 4%;
                height: 215px;
                padding: 37px;
                background-color: white;
            }
        }

        .login-box-msg {
            font-weight: 600;
            font-size: 16px;
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px
        }

        .alert-warning {
            border: 1px solid transparent;
            padding: 15px;
            border-color: #e08e0b;
            margin-bottom: 20px;
            border-radius: 3px;
            background-color: #f39c12 !important;
            color: #fff !important;
            animation: ani .5s;
            position: relative;
        }

        @keyframes ani {
            from {
                transform: translateY(-15px);
            }

            to {
                transform: translateY(0);
            }
        }

        .login-box {
            width: 360px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @media (max-width:768px) {
            .login-box {
                width: 90%;
                margin-top: 20px
            }
        }

        .form-control,
        .btn {
            border-radius: 4px;
        }

        .forgot {
            text-align: center;
            font-size: 14px;
            font-weight: 500;
            margin: 7px 0;
        }
        .form_1,
        .form_2,
        .form_select{
            text-align: center;
        }
    </style>
</head>

<body class="login-page">
    <header>
        <div class="header-container">
            <a href="{{ route('home') }}" class="header-button">
                <i class="fas fa-home"></i>
            </a>
        </div>
    </header>
    <div class="login-box">
        <div class="login-box-body">
            <form id="langForm" method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form_select">
                <button type="submit" name="lang" value="ar" class="button_lang">
                    AR
                </button>
                <button type="submit" name="lang" value="en" class="button_lang">
                    EN
                </button>
            </form>

            @if (Session::get('message') != '')
                <div class='alert-warning'>
                    {{ Session::get('message') }}
                </div>
            @endif

            <p class='login-box-msg'>
                {{ cbLang('login_message') }}
            </p>

            <form class="form_1 data_info" autocomplete='off' action="{{ route('postLogin') }}" method="post">
                @csrf
                <div>
                    <p class='login-box-msg'>
                        {{ cbLang('Label-employer') }}
                    </p>
                    <img src="{{ asset('vendor/crudbooster/assets/empployee.png') }}" class="img_login">
                    <input class="input form-control" autocomplete='off' type="text" name='email'
                        placeholder="Email" required />
                </div>
                <div>
                    <input class="input form-control" autocomplete='off' type="password" name='password'
                        placeholder="Password" required />
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    <i class='fa fa-lock'></i>
                    {{ cbLang('button_sign_in') }}
                </button>
                <p class="forgot">
                    <a href='{{ route('getForgot') }}'>
                        {{ cbLang('text_forgot_password') }}
                    </a>
                </p>
                <button type="button" class="button">
                    <i class="fas fa-user-graduate"></i>
                </button>
            </form>
            {{-- end form1 --}}
            <form class="form_2 data_info">
                <p class='login-box-msg'>{{ cbLang('Label-student') }}</p>
                <img src="{{ asset('vendor/crudbooster/assets/student.png') }}" class="img_login">
                <div>
                    <div>
                        <input class="input form-control" type="text" name="username" id="ID"
                            placeholder="ID">
                    </div>
                    <div>
                        <input class="input form-control" type="password" name="password2" id="password2"
                            placeholder="Password">
                    </div>
                </div>
                <a href="{{ asset('/student') }}" class="btn btn-primary btn-block">
                    <i class='fa fa-lock'></i>
                    {{ cbLang('button_sign_in') }}
                </a>
                <p class="forgot">
                    <a href='{{ route('getForgot') }}'>
                        {{ cbLang('text_forgot_password') }}
                    </a>
                </p>
                <button type="button" class="button">
                    <i class="fas fa-user-tie"></i>
                </button>
            </form>
            <!--a href="#">I forgot my password</a-->
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <script>
        // Get the selected language from the cookie
        var selectedLang = getCookie('lang');
        // Get the language buttons
        var arButton = document.querySelector('button[name="lang"][value="en"]');
        var enButton = document.querySelector('button[name="lang"][value="ar"]');

        // Hide the appropriate button based on the selected language
        if (selectedLang === 'ar') {
            enButton.style.display = 'none';
        } else {
            arButton.style.display = 'none';
        }

        // Helper function to get the value of a cookie
        function getCookie(name) {
            var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
            if (match) {
                return match[2];
            } else {
                return '';
            }
        }
    </script>
    <script>
        window.onload = function() {
            // تحديد زر "button with a tie icon"
            var tieButton = document.querySelector(".button i.fa-user-tie").parentElement;
            // تحديد زر "fas fa-user-graduate"
            var graduateButton = document.querySelector(".fas.fa-user-graduate");

            // إضافة حدث النقر على زر "fas fa-user-graduate"
            graduateButton.addEventListener("click", function() {
                // إخفاء form2 وإظهار form1
                form1.classList.add("hidden");
                form2.classList.remove("hidden");
            });

            // تحديد العناصر التي تحتوي على الفئة "form_1 data_info" و "form_2 data_info"
            var form1 = document.querySelector(".form_1.data_info");
            var form2 = document.querySelector(".form_2.data_info");
            form1.classList.add("hidden");
            // تحديد الأزرار
            var button1 = document.querySelector(".button1");
            var button2 = document.querySelector(".button2");

            // إضافة حدث النقر على زر "button with a tie icon"
            tieButton.addEventListener("click", function() {
                // إخفاء form2 وإظهار form1
                form2.classList.add("hidden");
                form1.classList.remove("hidden");
            });

            // إضافة حدث النقر على الزر الأول
            button1.addEventListener("click", function() {
                // إخفاء form2 وإظهار form1
                form2.classList.add("hidden");
                form1.classList.remove("hidden");

                // إخفاء الزر الأول وإظهار الزر الثاني
                button1.classList.add("hidden");
                button2.classList.remove("hidden");
            });

            // إضافة حدث النقر على الزر الثاني
            button2.addEventListener("click", function() {
                // إخفاء form1 وإظهار form2
                form1.classList.add("hidden");
                form2.classList.remove("hidden");

                // إخفاء الزر الثاني وإظهار الزر الأول
                button2.classList.add("hidden");
                button1.classList.remove("hidden");
            });
        };
    </script>
    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('vendor/crudbooster/assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.4.1 JS -->
    <script src="{{ asset('vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript">
    </script>
</body>

</html>
