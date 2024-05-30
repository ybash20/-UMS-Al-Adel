<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ cbLang('page_title_forgot') }} : {{ $appname }}</title>
    <meta name='generator' content='CRUDBooster.com' />
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
    <!-- Theme style -->
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    {{-- <link rel='stylesheet' href='{{ asset('vendor/crudbooster/assets/css/main.css') }}' />
    <link rel='stylesheet' href='{{ asset('vendor/crudbooster/assets/css/main.css') }}' /> --}}
    <style>
        .login-page {
            border: #0661c278;
            background: #0661c278;
            margin-top: 0;
            margin-bottom: 0;

        }

        .login-box-body {

            max-width: 508px;
            margin: 0px auto;
            margin-top: 50%;
            box-shadow: 9px 12px 54px -8px #555;
            border-radius: 4%;
            height: 258px;
            padding: 37px;
            background-color: white;
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
    </style>
</head>

<body class="login-page">
    <div class="login-box">

        <div class="login-box-body">

            @if (Session::get('message') != '')
                <div class='alert alert-warning'>
                    {{ Session::get('message') }}
                </div>
            @endif

            <p class="login-box-msg">{{ cbLang('forgot_message') }}</p>
            <form action="{{ route('postForgot') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name='email' required placeholder="Email Address" />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        {{ cbLang('forgot_text_try_again') }} <a
                            href='{{ route('getLogin') }}'>{{ cbLang('click_here') }}</a>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit"
                            class="btn btn-primary btn-block btn-flat">{{ cbLang('button_submit') }}</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <br />
            <!--a href="#">I forgot my password</a-->

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('vendor/crudbooster/assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Bootstrap 3.4.1 JS -->
    <script src="{{ asset('vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript">
    </script>

</body>

</html>
