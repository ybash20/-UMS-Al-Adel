<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{cbLang("page_title_login")}} </title>
    <meta name='generator' content='CRUDBooster'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon"
          href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{asset('vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link href="{{asset('vendor/crudbooster/assets/adminlte/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- support rtl-->
    @if (in_array(App::getLocale(), ['ar', 'fa']))
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">        <link href="{{ asset("vendor/crudbooster/assets/rtl.css")}}" rel="stylesheet" type="text/css"/>
@endif

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel='stylesheet' href='{{asset("vendor/crudbooster/assets/css/main.css")}}'/>
    <style type="text/css">
    :root{
	--primary: #6b59d3;
	--secondary: #bfc0c0;
	--white: #fff;
	--text-clr: #5b6475;
	--header-clr: #25273d;
	--next-btn-hover: #8577d2;
	--back-btn-hover: #8b8c8c;
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	outline: none;
	/* font-family: 'Lemonada', cursive; */
}
body{
	background: var(--primary);
	color: var(--text-clr);
	font-size: 16px;
	position: relative;
}
        .login-page, .register-page {
            /* background: {{ CRUDBooster::getSetting("login_background_color")?:'#dddddd'}} url('{{ CRUDBooster::getSetting("login_background_image")?asset(CRUDBooster::getSetting("login_background_image")):asset('vendor/crudbooster/assets/bg_blur3.jpg') }}'); */
            color: {{ CRUDBooster::getSetting("login_font_color")?:'#ffffff' }}  !important;
            /* background-repeat: no-repeat;
            background-position: center;
            background-size: cover; */
        }

        /* .login-box, .register-box {
            margin: 2% auto;
        } */

        .login-box-body {
            width: 750px;
            max-width: 100%;
            background: var(--white);
            margin: 100px auto 0;
            padding: 50px;
            border-radius: 5px;
            color: {{ CRUDBooster::getSetting("login_font_color")?:'#666666' }}  !important;
        }
        .input {
    border: 2px solid var(--secondary);
    border-radius: 3px;
    padding: 10px;
    width: 250px;
    font-size: 14px;
    transition: 0.5s ease;
    text-align: left;
    margin-right:5px;
    margin-left: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
	
}
.input:focus{
	border-color: var(--primary);
}

.fas.fa-user-graduate {
    font-size:80px;
    color: rgb(0, 0, 0);
    display: flex;
  }
  .fas.fa-user-tie {
    font-size: 80px;
    color:  rgb(6, 6, 6);
    display: flex;

   
  }
  .button{ 
    position: relative;
    animation-name: animatetop;
    animation-duration: 0.4s;
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    width: 100px;
    background: #fff;
    margin: 0 auto;
    border-radius: 20px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    padding: 15px;
    text-align: right;
    overflow: hidden;
    display: block;
    margin-top: 50px;
  }
   

    </style>
</head>

<body class="login-page" style="background: var(--primary);">

<div class="login-box">
    <div class="login-box-body" >

        @if ( Session::get('message') != '' )
            <div class='alert alert-warning'>
                {{ Session::get('message') }}
            </div>
        @endif

        <p class='login-box-msg'>{{cbLang("login_message")}}</p>
        <form autocomplete='off' action="{{ route('postLogin') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            
            @if(!empty(config('services.google')))

                <div style="margin-bottom:10px" class='row'>
                    <div class='col-xs-12'>

                        <a href='{{route("redirect", 'google')}}' class="btn btn-primary btn-block btn-flat"><i class='fa fa-google'></i>
                            Google Login</a>

                        <hr>
                    </div>
                </div>
            @endif
            <div class="form_1 data_info">
            <div>
                <p class='login-box-msg'>{{cbLang("Label-employer")}}</p>      
              <input autocomplete='off' type="text" class="input" name='email' required placeholder="Email"/>
            </div>
            <div>
                <input autocomplete='off' type="password" class="input" name='password' required placeholder="Password"/>
            </div>
            <div style="margin-bottom:10px">
                <div class='col-xs-12'>
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fa fa-lock' style="margin-left:3px"></i> {{cbLang("button_sign_in")}}</button>
                </div>
            </div>
        
            {{-- <div class='row'>
                <div class='col-xs-12' align="center"><p style="padding:10px 0px 10px 0px">{{cbLang("text_forgot_password")}} <a
                                href='{{route("getForgot")}}'>{{cbLang("click_here")}}</a></p></div>
            </div> --}}
            <div>
                <button type="button" class="button">
                    <i class="fas fa-user-graduate"></i>
                  </button>
                </div>
            </div>
        </form>
           {{-- end form1 --}}
           <div class="form_2 data_info">
			<form>
                <p class='login-box-msg'>{{cbLang("Label-student")}}</p>      
				<div>
					<div>
						<input type="text" name="username" class="input" id="ID"  placeholder="ID">
					</div>
					<div>
						<input type="password" name="password2" class="input" id="password2"  placeholder="Password">
					</div>
				</div>
                <div style="margin-bottom:10px">
                    <div class='col-xs-12'>
                        <a href="{{ asset('/student') }}" class="btn btn-primary btn-block btn-flat">
                          <i class='fa fa-lock' style="margin-left:3px"></i> {{cbLang("button_sign_in")}}
                        </a>
                      </div>
                </div>
		
                <div>
                    <button type="button" class="button">
                        <i class="fas fa-user-tie"></i>
                      </button>
                  </div> 
                </div>       
        </form>
           <br/>
        <!--a href="#">I forgot my password</a-->
    </div><!-- /.login-box-body -->

</div><!-- /.login-box -->

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
<script src="{{asset('vendor/crudbooster/assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.4.1 JS -->
<script src="{{asset('vendor/crudbooster/assets/adminlte/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>