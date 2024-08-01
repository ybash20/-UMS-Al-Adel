<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $page_title ? get_setting('appname') . ': ' . strip_tags(lang($page_title)) : 'Admin Area' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="shortcut icon" href="{{ UMS::getSetting('favicon') ? asset(UMS::getSetting('favicon')) : asset('vendor/ums/assets/logo50.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="{{ asset('vendor/ums/assets/adminlte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/ums/assets/adminlte/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/ums/ionic/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/ums/assets/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/ums/assets/adminlte/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ums/assets/css/main.css') }}">

    @include('dashboard.admin_template_plugins')

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
        .dataTables_wrapper{
            padding: 15px;
        }
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

        #langForm>a {
            color: inherit;
            background: #fff;
            border: none;
            text-align: left;
            padding: 7px 10px;
            display: flex;
            align-items: center;
            gap: 7px;
        }

        #langForm>a:hover {
            background: #3c8dbc;
            color: #fff;
        }

        #langForm a:first-child {
            font-family: 'Segoe UI';
        }

        #langForm a:first-child img {
            height: 22px;
        }

        #langForm>a.active {
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
        .btn_action {
            width: 90px;
        }
        .mod_btn_action {
            width: 170px;
        }
        .mod_button_action a:first-child p {
            margin: 0;
            display: inline;
        }
        @media (max-width: 880px) {
            .btn_action,
            .mod_btn_action {
                width: 50px
            }
            .button_action a,
            .mod_button_action a {
                width: 24px;
                margin: 5px;
            }
        }
        @media (max-width: 981px){
            .mod_btn_action {
                width: 90px;
            }
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

            // Check on window resize
            window.addEventListener('resize', function(){
                const modButtonActions = document.querySelectorAll('.mod_button_action');
                modButtonActions.forEach(modButtonAction => {
                    const firstChild = modButtonAction.firstElementChild;
                    const pElement = firstChild.querySelector('p');
                    if (pElement) {
                        if (window.innerWidth < 981) {
                            pElement.style.display = 'none';
                        } else {
                            pElement.style.display = 'inline';
                        }
                    }
                });
            });
        </script>
    @endpush

    @stack('head')

    @if (App::getLocale() == 'ar')
        <style>
            .sidebar-menu>li:hover>a,
            .sidebar-menu>li.active>a {
                color: #fff;
                background: #1e282c;
                border-right-color: #3c8dbc;
            }

            .sidebar-menu>li>a {
                border-right: 3px solid transparent;
            }

            .sidebar-menu .treeview-menu>li>a {
                padding: 5px 25px 5px 5px;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('vendor/ums/assets/bootstrap-rtl.min.css') }}">
        <link href="{{ asset('vendor/ums/assets/rtl.css') }}" rel="stylesheet" type="text/css">
    @else
        <style>
            .sidebar-menu>li:hover>a,
            .sidebar-menu>li.active>a {
                color: #fff;
                background: #1e282c;
                border-left-color: #3c8dbc;
            }
            .sidebar-menu>li>a {
                border-left: 3px solid transparent;
            }
        </style>
    @endif

</head>

<body
class="{{ Session::get('theme_color', 'skin-blue-light') }} {{ config('ums.ADMIN_LAYOUT') }} {{ $sidebar_mode ?? '' }}">
    @php
        $module = UMS::getCurrentModule();
    @endphp
    <!-- Loader -->
    @if (UMS::getCurrentMethod() == 'getDashboard' || !($module))
        <style>
            /* Center the loader on the screen */
            #page-loader {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 9999;
                height: 250px;
            }
            .wr {
                position: absolute;
                background: #fff;
                height: 100%;
                width: 100%;
                z-index: 9998;
            }
            .wrapper{
                display: none;
            }
        </style>
        <!-- Loader -->
        <div class="wr" id="wr-loader">
            <div id="page-loader" class="page-loader"></div>
        </div>
        <script src="{{ asset('vendor/ums/assets/lottie.min.js') }}"></script>
        <script>
            // Load the animation
            var animation = lottie.loadAnimation({
                container: document.getElementById('page-loader'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: "{{ asset('vendor/ums/assets/data.json') }}"
            });
            // Hide loader and show content when the page has fully loaded
            $(window).on('load', function() {
                setTimeout(function() {
                    // Fade out the loader
                    $('#page-loader').fadeOut('slow', function() {});
                    $('#wr-loader').fadeOut('slow', function() {
                        // Show the main content
                        $('.wrapper').fadeIn('slow');
                    });
                }, 3500); // Adjust the delay as needed
            });
        </script>
    @endif
    <!-- loader -->
    <div id="app" class="wrapper">
        @include('dashboard.header')
        @include('dashboard.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                @if ($module)
                    <h1>
                        <!-- END BUTTON -->
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{ UMS::adminPath() }}">
                                    <i class="fa fa-dashboard"></i>
                                    {{ lang('home') }}
                                </a>
                            </li>
                            <li class="active">
                                <i class="{{ $page_icon ?? $module->icon }}"></i>
                                {{ lang($page_title) }}
                            </li>
                            <li>
                                @if (UMS::getCurrentMethod() == 'getIndex')
                                    @if ($button_show)
                                        <a href="{{ UMS::mainpath() . '?' . http_build_query(Request::all()) }}"
                                            id="btn_show_data" class="btn btn-sm btn-primary"
                                            title="{{ lang('action_show_data') }}">
                                            <i class="fa fa-table"></i>
                                            {{ lang('action_show_data') }}
                                        </a>
                                    @endif
                                    @if ($button_add && UMS::isCreate())
                                        <a href="{{ UMS::mainpath('add') . '?return_url=' . urlencode(Request::fullUrl()) . '&parent_id=' . g('parent_id') . '&parent_field=' . $parent_field }}"
                                            id="btn_add_new_data" class="btn btn-sm btn-success"
                                            title="{{ lang('action_add_data') }}">
                                            <i class="fa fa-plus-circle"></i>
                                            {{ lang('action_add_data') }}
                                        </a>
                                    @endif
                                @endif
                                @if ($button_export && UMS::getCurrentMethod() == 'getIndex')
                                    <a href="javascript:void(0)" id="btn_export_data"
                                        data-url-parameter="{{ $build_query }}" title="Export Data"
                                        class="btn btn-sm btn-primary btn-export-data">
                                        <i class="fa fa-upload"></i>
                                        {{ lang('button_export') }}
                                    </a>
                                @endif

                                @if ($button_import && UMS::getCurrentMethod() == 'getIndex')
                                    <a href="{{ UMS::mainpath('import-data') }}" id="btn_import_data"
                                        data-url-parameter="{{ $build_query }}" title="Import Data"
                                        class="btn btn-sm btn-primary btn-import-data">
                                        <i class="fa fa-download"></i>
                                        {{ lang('button_import') }}
                                    </a>
                                @endif

                                @if (!empty($index_button))
                                    @foreach ($index_button as $ib)
                                        <a href='{{ $ib['url'] }}' id='{{ str_slug($ib['label']) }}'
                                            class='btn {{ $ib['color'] ? 'btn-' . $ib['color'] : 'btn-primary' }} btn-sm'
                                            @if ($ib['onClick']) onClick='return {{ $ib['onClick'] }}' @endif
                                            @if ($ib['onMouseOver']) onMouseOver='return {{ $ib['onMouseOver'] }}' @endif
                                            @if ($ib['onMouseOut']) onMouseOut='return {{ $ib['onMouseOut'] }}' @endif
                                            @if ($ib['onKeyDown']) onKeyDown='return {{ $ib['onKeyDown'] }}' @endif
                                            @if ($ib['onLoad']) onLoad='return {{ $ib['onLoad'] }}' @endif>
                                            <i class='{{ $ib['icon'] }}'></i> {{ $ib['label'] }}
                                        </a>
                                    @endforeach
                            </li>
                            {{-- @endif --}}
                        </ol>
                    </h1>
                @endif
            @else
                <h1 class="dash">
                    <span>
                        {{ Session::get('appname') }}
                    </span>
                    <small>
                        {{ lang($page_title) }}
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
                        {{ lang('alert_' . Session::get('message_type')) }}
                    </h4>
                    {!! Session::get('message') !!}
                </div>
            @endif
            <!-- Your Page Content Here -->
            @yield('content')

        </div><!-- /.content-wrapper -->

        <!-- Footer -->
        @include('dashboard.footer')

    </div><!-- ./wrapper -->
    {{-- main-content --}}

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
