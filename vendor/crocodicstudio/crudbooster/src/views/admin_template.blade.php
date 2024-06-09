<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $page_title ? get_setting('appname') . ': ' . strip_tags($page_title) : 'Admin Area' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="generator" content="CRUDBooster {{ \crocodicstudio\crudbooster\commands\CrudboosterVersionCommand::$version }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="shortcut icon" href="{{ CRUDBooster::getSetting('favicon') ? asset(CRUDBooster::getSetting('favicon')) : asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/crudbooster/ionic/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/crudbooster/assets/adminlte/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/css/main.css') }}">

    @if ($style_css)
        <style type="text/css">
            {{ $style_css }}
        </style>
    @endif

    @if ($load_css)
        @foreach ($load_css as $css)
            <link href="{{ $css }}" rel="stylesheet" type="text/css">
        @endforeach
    @endif

    <style type="text/css">
        .dropdown-menu-action {
            left: -130%;
        }

        .btn-group-action .btn-action {
            cursor: default;
        }

        #box-header-module {
            box-shadow: 10px 10px 10px #dddddd;
        }

        .sub-module-tab li {
            background: #F9F9F9;
            cursor: pointer;
        }

        .sub-module-tab li.active {
            background: #ffffff;
            box-shadow: 0px -5px 10px #cccccc;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            border: none;
        }

        .nav-tabs>li>a {
            border: none;
        }

        .breadcrumb {
            margin: 0;
        }

        .form-group>label:first-child {
            display: block;
        }

        #table_dashboard.table-bordered,
        #table_dashboard.table-bordered thead tr th,
        #table_dashboard.table-bordered tbody tr td {
            border: 1px solid #bbbbbb !important;
        }

        .content-wrapper {
            padding: 0 15px 15px 15px;
        }

        .lang-header {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            background-color: #ffffff;
            padding: 7px 10px;
            border-bottom: 1px solid #f4f4f4;
            color: #444444;
            font-size: 15px;
        }

        #list_language {
            margin: 0;
            padding: 0;
            min-width: 120px;
        }

        #langForm {
            display: flex;
            flex-direction: column;
            padding: 5px 0;
        }

        #langForm>button {
            background: #fff;
            border: none;
            text-align: left;
            padding: 7px 10px;
            display: flex;
            align-items: center;
            gap: 7px;
        }

        #langForm>button:hover {
            background: #3c8dbc;
            color: #fff;
        }

        #langForm button:first-child {
            font-family: 'Segoe UI';
        }

        #langForm button:first-child img {
            height: 22px;
        }

        #langForm>button.active {
            background: #3c8dbc;
            color: #fff;
        }

        .lang-icon {
            display: flex !important;
            align-items: center;
            flex-direction: row-reverse;
            gap: 7px;
        }

        .lang-icon i {
            font-size: 20px;
        }

        .dropdown-menu {
            transition: .3s;
        }
    </style>
    @push('bottom')
        <script>
        // Function to remove the third <li> if it is empty
        function removeEmptyThirdLi() {
            // Select the <ol> element with the class 'breadcrumb'
            var breadcrumb = document.querySelector('.breadcrumb');
            if (breadcrumb) {
                // Get the list of <li> elements inside the <ol>
                var listItems = breadcrumb.getElementsByTagName('li');
                // Check if there are at least 3 <li> elements
                if (listItems.length >= 3) {
                    // Get the third <li> element
                    var thirdLi = listItems[2];
                    // Check if the third <li> is empty (only contains whitespace or no text)
                    if (thirdLi.innerHTML.trim() === '') {
                        // Remove the third <li> element
                        thirdLi.remove();
                    }
                }
            }
        }
        // Call the function to remove the empty third <li>
        removeEmptyThirdLi();
        </script>
    @endpush

    @stack('head')

    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
        <link href="{{ asset('vendor/crudbooster/assets/rtl.css') }}" rel="stylesheet" type="text/css">
    @endif

</head>

<body class="{{ Session::get('theme_color', 'skin-blue') }} {{ config('crudbooster.ADMIN_LAYOUT') }} {{ $sidebar_mode ?? '' }}">
    <div id="app" class="wrapper">
        @include('crudbooster::header')
        @include('crudbooster::sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                @php
                    $module = CRUDBooster::getCurrentModule();
                    @endphp
                @if ($module)
                    <h1>
                        <!-- END BUTTON -->
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ CRUDBooster::adminPath() }}">
                                    <i class="fa fa-dashboard"></i>
                                    {{ cbLang('home') }}
                                </a>
                            </li>
                            <li class="active">
                                <i class="{{ $page_icon ?? $module->icon }}"></i>
                                {{ cbLang($module->path) }}
                            </li>
                            {{-- @if ($button_show || ($button_add && CRUDBooster::isCreate()) || ($button_export && CRUDBooster::getCurrentMethod() == 'getIndex') || ($button_import && CRUDBooster::getCurrentMethod() == 'getIndex')) --}}
                            <li>
                                @if (CRUDBooster::getCurrentMethod() == 'getIndex')
                                    @if ($button_show)
                                        <a href="{{ CRUDBooster::mainpath() . '?' . http_build_query(Request::all()) }}" id="btn_show_data" class="btn btn-sm btn-primary" title="{{ cbLang('action_show_data') }}">
                                            <i class="fa fa-table"></i>
                                            {{ cbLang('action_show_data') }}
                                        </a>
                                    @endif
                                    @if ($button_add && CRUDBooster::isCreate())
                                        <a href="{{ CRUDBooster::mainpath('add') . '?return_url=' . urlencode(Request::fullUrl()) . '&parent_id=' . g('parent_id') . '&parent_field=' . $parent_field }}" id="btn_add_new_data" class="btn btn-sm btn-success" title="{{ cbLang('action_add_data') }}">
                                            <i class="fa fa-plus-circle"></i>
                                            {{ cbLang('action_add_data') }}
                                        </a>
                                    @endif
                                @endif
                                @if ($button_export && CRUDBooster::getCurrentMethod() == 'getIndex')
                                    <a href="javascript:void(0)" id="btn_export_data" data-url-parameter="{{ $build_query }}" title="Export Data" class="btn btn-sm btn-primary btn-export-data">
                                        <i class="fa fa-upload"></i>
                                        {{ cbLang('button_export') }}
                                    </a>
                                @endif

                                @if ($button_import && CRUDBooster::getCurrentMethod() == 'getIndex')
                                    <a href="{{ CRUDBooster::mainpath('import-data') }}" id="btn_import_data" data-url-parameter="{{ $build_query }}" title="Import Data" class="btn btn-sm btn-primary btn-import-data">
                                        <i class="fa fa-download"></i>
                                        {{ cbLang('button_import') }}
                                    </a>
                                @endif

                                @if (!empty($index_button))
                                    @foreach ($index_button as $ib)
                                        <a href='{{ $ib['url'] }}' id='{{ str_slug($ib['label']) }}' class='btn {{ $ib['color'] ? 'btn-' . $ib['color'] : 'btn-primary' }} btn-sm'
                                            @if ($ib['onClick']) onClick='return {{ $ib['onClick'] }}' @endif
                                            @if ($ib['onMouseOver']) onMouseOver='return {{ $ib['onMouseOver'] }}' @endif
                                            @if ($ib['onMouseOut']) onMouseOut='return {{ $ib['onMouseOut'] }}' @endif
                                            @if ($ib['onKeyDown']) onKeyDown='return {{ $ib['onKeyDown'] }}' @endif
                                            @if ($ib['onLoad']) onLoad='return {{ $ib['onLoad'] }}' @endif >
                                            <i class='{{ $ib['icon'] }}'></i> {{ $ib['label'] }}
                                        </a>
                                    @endforeach
                            </li>
                            {{-- @endif --}}
                        </ol>
                    </h1>
                @endif
                @else
                    <h1>
                        {{ Session::get('appname') }}
                        <small>
                            {{ cbLang('text_dashboard') }}
                        </small>
                    </h1>
                @endif
            </section>

            <!-- Main content -->
            <!-- <section id='content_section' class="content"> -->

            @if (@$alerts)
                @foreach (@$alerts as $alert)
                    <div class='callout callout-{{ $alert['type'] }}'>
                        {!! $alert['message'] !!}
                    </div>
                @endforeach
            @endif

            @if (Session::get('message') != '')
                <div class='alert alert-{{ Session::get('message_type') }}'>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        &times;
                    </button>
                    <h4>
                        <i class="icon fa fa-info"></i>
                        {{ cbLang('alert_' . Session::get('message_type')) }}
                    </h4>
                    {!! Session::get('message') !!}
                </div>
            @endif
            <!-- Your Page Content Here -->
            @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <!-- Footer -->
        @include('crudbooster::footer')

    </div><!-- ./wrapper -->


    @include('crudbooster::admin_template_plugins')

    <!-- load js -->
    @if ($load_js)
        @foreach ($load_js as $js)
            <script src="{{ $js }}"></script>
        @endforeach
    @endif
    <script type="text/javascript">
        var site_url = "{{ url('/') }}";
        @if ($script_js)
            {!! $script_js !!}
        @endif
    </script>

    @stack('bottom')

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>

</html>
