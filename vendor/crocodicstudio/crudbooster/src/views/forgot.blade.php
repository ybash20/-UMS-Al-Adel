<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ cbLang('page_title_forgot') }} : {{ $appname }}</title>
    <meta name='generator' content='CRUDBooster.com' />
    <meta name='robots' content='noindex,nofollow' />
    <link rel="shortcut icon" href="{{ CRUDBooster::getSetting('favicon') ? asset(CRUDBooster::getSetting('favicon')) : asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <style>

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

        .form-control {
            border-radius: 0;
            box-shadow: none;
            border-color: #d2d6de
        }

        .form-control:focus {
            border-color: #3c8dbc;
            box-shadow: none
        }

        .form-control::-moz-placeholder,
        .form-control:-ms-input-placeholder,
        .form-control::-webkit-input-placeholder {
            color: #bbb;
            opacity: 1
        }

        .form-control:not(select) {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .btn {
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid transparent
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
        .login-page {
            background: #d2d6de
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
        .login-box-body {
            background: #fff;
            padding: 20px;
            border-top: 0;
            color: #666
        }
        .login-box-body .form-control-feedback {
            color: #777
        }
        .login-box-msg {
            font-weight: 600;
            font-size: 16px;
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px
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

        .login-page {
            margin-top: 0;
            margin-bottom: 0;
            background: #0661c278;
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
        .login-again{
            text-align: center;
            font-size: 14px;
            margin: 7px 0;
        }
        .form-control,
        .btn{
            border-radius: 4px;
        }
    </style>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-box-body">
            @if (Session::get('message') != '')
                <div class='alert-warning'>
                    {{ Session::get('message') }}
                </div>
            @endif
            <form action="{{ route('postForgot') }}" method="post">
                @csrf
                <p class="login-box-msg">
                    {{ cbLang('forgot_message') }}
                </p>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name='email' placeholder="Email Address" required/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="forgot-end">
                    <div class="login-again">
                        <a href='{{ route('getLogin') }}'>
                            {{ cbLang('forgot_text_try_again') }}
                        </a>
                    </div><!-- /.col -->
                    <div class="forgot-btn">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ cbLang('button_submit') }}
                        </button>
                    </div><!-- /.col -->
                </div>
            </form>
            <!--a href="#">I forgot my password</a-->
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('vendor/crudbooster/assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.4.1 JS -->
    <script src="{{ asset('vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>
