@section('navbar')
    <style>
        header {
            width: 1200px;
            max-width: 90%;
            margin: auto;
            position: relative;
            z-index: 100;
        }

        @font-face {
            font-family: 'icomoon';
            src: url('fonts/icomoon/fonts/icomoon.eot');
            src: url('fonts/icomoon/fonts/icomoon.eot') format('embedded-opentype'),
                url('fonts/icomoon/fonts/icomoon.ttf') format('truetype'),
                url('fonts/icomoon/fonts/icomoon.woff') format('woff'),
                url('fonts/icomoon/fonts/icomoon.svg') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        [class^="icon-"] {
            font-family: 'icomoon' !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;

            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .icon-phone:before {
            content: "\f095";
        }

        .icon-twitter:before {
            content: "\f099";
        }

        .icon-facebook:before {
            content: "\f09a";
        }

        .icon-envelope:before {
            content: "\f0e0";
        }

        .icon-linkedin:before {
            content: "\f0e1";
        }

        .icon-instagram:before {
            content: "\f16d";
        }

        .icon-close2:before {
            content: "\e5cd";
        }

        .icon-menu:before {
            content: "\e5d2";
        }

        .fade:not(.show) {
            opacity: 0;
        }

        .tooltip.show {
            opacity: 0.9;
        }

        .dropdown-menu.show {
            display: block;
        }

        .collapse:not(.show) {
            display: none;
        }

        .sticky-wrapper.is-sticky .site-navbar {
            background-color: #007bff;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li {
            display: inline-block;
            padding: 10px 5px;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li:last-child {
            padding-right: 0;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li:last-child>a {
            padding-right: 0;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li.has-children>a {
            padding-right: 20px;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li>a {
            padding: 10px 10px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 15px;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li>a:hover {
            color: #fff !important;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li>a.active {
            color: #fff !important;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-navigation .site-menu>li.active a {
            color: #fff;
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .headerhtml {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        .nav {
            display: block;
        }

        .headerh1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        .header_ul {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .header_ul .header_ul {
            margin-bottom: 0;
        }

        .header_a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
        }

        .header_a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        button:not(:disabled),
        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled) {
            cursor: pointer;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        .headerh1,
        .header_h3 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .headerh1 {
            font-size: 2.5rem;
        }

        .header_h3 {
            font-size: 1.75rem;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .header_row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .col-2,
        .col-6,
        .col-10 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before,
        .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {
            border-color: #28a745;
        }

        .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before,
        .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {
            border-color: #dc3545;
        }

        .btn-primary:not(:disabled):not(.disabled):active,
        .btn-primary:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        .btn-secondary:not(:disabled):not(.disabled):active,
        .btn-secondary:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #545b62;
            border-color: #4e555b;
        }

        .btn-secondary:not(:disabled):not(.disabled):active:focus,
        .btn-secondary:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
        }

        .btn-success:not(:disabled):not(.disabled):active,
        .btn-success:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #1e7e34;
            border-color: #1c7430;
        }

        .btn-success:not(:disabled):not(.disabled):active:focus,
        .btn-success:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
        }

        .btn-info:not(:disabled):not(.disabled):active,
        .btn-info:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #117a8b;
            border-color: #10707f;
        }

        .btn-info:not(:disabled):not(.disabled):active:focus,
        .btn-info:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
        }

        .btn-warning:not(:disabled):not(.disabled):active,
        .btn-warning:not(:disabled):not(.disabled).active {
            color: #212529;
            background-color: #d39e00;
            border-color: #c69500;
        }

        .btn-warning:not(:disabled):not(.disabled):active:focus,
        .btn-warning:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
        }

        .btn-danger:not(:disabled):not(.disabled):active,
        .btn-danger:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #bd2130;
            border-color: #b21f2d;
        }

        .btn-danger:not(:disabled):not(.disabled):active:focus,
        .btn-danger:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
        }

        .btn-light:not(:disabled):not(.disabled):active,
        .btn-light:not(:disabled):not(.disabled).active {
            color: #212529;
            background-color: #dae0e5;
            border-color: #d3d9df;
        }

        .btn-light:not(:disabled):not(.disabled):active:focus,
        .btn-light:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
        }

        .btn-dark:not(:disabled):not(.disabled):active,
        .btn-dark:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #1d2124;
            border-color: #171a1d;
        }

        .btn-dark:not(:disabled):not(.disabled):active:focus,
        .btn-dark:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .btn-outline-primary:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        }

        .btn-outline-secondary:not(:disabled):not(.disabled):active,
        .btn-outline-secondary:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }

        .btn-outline-success:not(:disabled):not(.disabled):active,
        .btn-outline-success:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-outline-success:not(:disabled):not(.disabled):active:focus,
        .btn-outline-success:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        }

        .btn-outline-info:not(:disabled):not(.disabled):active,
        .btn-outline-info:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .btn-outline-info:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
        }

        .btn-outline-warning:not(:disabled):not(.disabled):active,
        .btn-outline-warning:not(:disabled):not(.disabled).active {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .btn-outline-danger:not(:disabled):not(.disabled):active,
        .btn-outline-danger:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        }

        .btn-outline-light:not(:disabled):not(.disabled):active,
        .btn-outline-light:not(:disabled):not(.disabled).active {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-outline-light:not(:disabled):not(.disabled):active:focus,
        .btn-outline-light:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
        }

        .btn-outline-dark:not(:disabled):not(.disabled):active,
        .btn-outline-dark:not(:disabled):not(.disabled).active {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled).active:focus {
            -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
            box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
        }

        .dropdown {
            position: relative;
        }

        .custom-control-input:focus:not(:checked)~.custom-control-label::before {
            border-color: #80bdff;
        }

        .custom-control-input:not(:disabled):active~.custom-control-label::before {
            color: #fff;
            background-color: #b3d7ff;
            border-color: #b3d7ff;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover,
        .nav-link:focus {
            text-decoration: none;
        }

        .nav-link.disabled {
            color: #6c757d;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link:focus {
            border-color: #e9ecef #e9ecef #dee2e6;
        }

        .nav-tabs .nav-link.disabled {
            color: #6c757d;
            background-color: transparent;
            border-color: transparent;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills .nav-link {
            border-radius: 0.25rem;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #007bff;
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.5);
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }

        .navbar-dark .navbar-nav .show>.nav-link,
        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #fff;
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem;
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.5);
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link:focus {
            color: rgba(0, 0, 0, 0.7);
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, 0.3);
        }

        .navbar-light .navbar-nav .show>.nav-link,
        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 0.9);
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.5);
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.75);
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }

        .navbar-dark .navbar-nav .show>.nav-link,
        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #fff;
        }




        .close:not(:disabled):not(.disabled):hover,
        .close:not(:disabled):not(.disabled):focus {
            opacity: .75;
        }

        .d-none {
            display: none !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        @media (min-width: 768px) {

            .d-md-inline-block {
                display: inline-block !important;
            }
        }

        @media (min-width: 992px) {
            .d-lg-none {
                display: none !important;
            }

            .d-lg-block {
                display: block !important;
            }
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
            font-size: 14px;
        }

        @supports ((position: -webkit-sticky) or (position: sticky)) {}

        .my-0 {
            margin-top: 0 !important;
        }

        .my-0 {
            margin-bottom: 0 !important;
        }

        .mr-2 {
            margin-right: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mr-4 {
            margin-right: 1.5rem !important;
        }

        .pl-0 {
            padding-left: 0 !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .py-3 {
            padding-top: 1rem !important;
        }

        .py-3 {
            padding-bottom: 1rem !important;
        }

        .mr-auto {
            margin-right: auto !important;
        }

        @media (min-width: 768px) {

            .ml-md-0 {
                margin-left: 0 !important;
            }
        }

        .text-right {
            text-align: right !important;
        }

        .text-white {
            color: #fff !important;
        }

        @media print {

            *,
            *::before,
            *::after {
                text-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            .header_a:not(.btn) {
                text-decoration: underline;
            }

            @page {
                size: a3;
            }

            .bodyheader {
                min-width: 992px !important;
            }

            .container {
                min-width: 992px !important;
            }
        }

        .header_h3 {
            font-family: 'Lemonada', cursive;
        }

        .header_a {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .header_a,
        .header_a:hover {
            text-decoration: none !important;
        }

        .site-navbar-wrap {
            position: absolute;
            z-index: 99;
            width: 100%;
            left: 0;
        }

        .site-navbar-wrap a {
            color: #007bff;
        }

        .site-navbar-wrap .site-navbar-top {
            font-size: 0.8rem;
        }

        .site-navbar-top {
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
        }

        .site-navbar {
            background-color: #007bff52;
            margin-bottom: 0px;
            width: 100%;
        }

        .site-navbar .site-logo {
            font-weight: 200;
            line-height: 0;
            position: relative;
        }

        .site-navbar .site-logo a {
            font-weight: 200;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .site-navbar .site-navigation .site-menu {
            margin-bottom: 0;
        }

        .site-navbar .site-navigation .site-menu a {
            text-decoration: none !important;
            display: inline-block;
            font-weight: 500;
        }

        .site-navbar .site-navigation .site-menu>li {
            display: inline-block;
            padding: 10px 5px;
        }

        .site-navbar .site-navigation .site-menu>li>a {
            padding: 10px 5px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 15px;
            text-decoration: none !important;
        }

        .site-navbar .site-navigation .site-menu>li>a:hover {
            color: #fff;
        }

        .site-navbar .site-navigation .site-menu>li:last-child {
            padding-right: 0;
        }

        .site-navbar .site-navigation .site-menu>li:last-child>a {
            padding-right: 0;
        }

        .site-navbar .site-navigation .site-menu .has-children {
            position: relative;
        }

        .site-navbar .site-navigation .site-menu .has-children>a {
            position: relative;
            padding-right: 20px;
        }

        .site-navbar .site-navigation .site-menu .has-children>a:before {
            position: absolute;
            content: "\e313";
            font-size: 16px;
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            font-family: 'icomoon';
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown {
            visibility: hidden;
            opacity: 0;
            top: 100%;
            position: absolute;
            text-align: left;
            -webkit-box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.25);
            box-shadow: 0 0px 4px 0px rgba(0, 0, 0, 0.25);
            padding: 0px 0;
            margin-top: 20px;
            margin-left: 0px;
            background: #fff;
            -webkit-transition: 0.2s 0s;
            -o-transition: 0.2s 0s;
            transition: 0.2s 0s;
            border-radius: 4px;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top {
            position: absolute;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            border-color: rgba(136, 183, 213, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown a {
            font-size: 14px;
            text-transform: none;
            letter-spacing: normal;
            -webkit-transition: 0s all;
            -o-transition: 0s all;
            transition: 0s all;
            color: #343a40;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown a.active {
            color: #007bff;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown .active>a {
            color: #fff !important;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li {
            list-style: none;
            padding: 0;
            margin: 0;
            min-width: 200px;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li:first-child>a {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li:last-child>a {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li>a {
            padding: 9px 20px;
            display: block;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li>a:hover {
            background: #ebeef0;
            color: #212529;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children>a:before {
            content: "\e315";
            right: 20px;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children>.dropdown,
        .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children>ul {
            left: 100%;
            top: 0;
        }

        .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children:hover>a,
        .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children:active>a,
        .site-navbar .site-navigation .site-menu .has-children .dropdown>li.has-children:focus>a {
            background: #ebeef0;
            color: #212529;
        }

        .site-navbar .site-navigation .site-menu .has-children:hover>a,
        .site-navbar .site-navigation .site-menu .has-children:focus>a,
        .site-navbar .site-navigation .site-menu .has-children:active>a {
            color: #fff;
        }

        .site-navbar .site-navigation .site-menu .has-children:hover,
        .site-navbar .site-navigation .site-menu .has-children:focus,
        .site-navbar .site-navigation .site-menu .has-children:active {
            cursor: pointer;
        }

        .site-navbar .site-navigation .site-menu .has-children:hover>.dropdown,
        .site-navbar .site-navigation .site-menu .has-children:focus>.dropdown,
        .site-navbar .site-navigation .site-menu .has-children:active>.dropdown {
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
            margin-top: 0px;
            visibility: visible;
            opacity: 1;
        }

        .site-mobile-menu {
            width: 300px;
            position: fixed;
            right: 0;
            z-index: 2000;
            background: #fff;
            height: calc(100vh);
            -webkit-transform: translateX(110%);
            -ms-transform: translateX(110%);
            transform: translateX(110%);
            -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
            box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
            -webkit-transition: .3s all ease-in-out;
            -o-transition: .3s all ease-in-out;
            transition: .3s all ease-in-out;
        }

        .offcanvas-menu .site-mobile-menu {
            -webkit-transform: translateX(0%);
            -ms-transform: translateX(0%);
            transform: translateX(0%);
        }

        .site-mobile-menu .site-mobile-menu-header {
            width: 100%;
            float: left;
            padding-left: 20px;
            padding-right: 20px;
        }

        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
            float: right;
        }

        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
            font-size: 30px;
            display: inline-block;
            padding-left: 10px;
            padding-right: 0px;
            line-height: 1;
            cursor: pointer;
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
            color: #dee2e6;
        }

        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
            float: left;
            margin-top: 10px;
            margin-left: 0px;
        }

        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
            display: inline-block;
            text-transform: uppercase;
        }

        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
            max-width: 70px;
        }

        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
            text-decoration: none;
        }

        .site-mobile-menu .site-mobile-menu-body {
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
            position: relative;
            padding: 20px;
            height: calc(100vh - 52px);
            padding-bottom: 150px;
        }

        .site-mobile-menu .site-nav-wrap {
            padding: 0;
            margin: 0;
            list-style: none;
            position: relative;
        }

        .site-mobile-menu .site-nav-wrap a {
            padding: 10px 20px;
            display: block;
            position: relative;
            color: #212529;
        }

        .site-mobile-menu .site-nav-wrap a.active,
        .site-mobile-menu .site-nav-wrap a:hover {
            color: #007bff;
        }

        .site-mobile-menu .site-nav-wrap li {
            position: relative;
            display: block;
        }

        .site-mobile-menu .site-nav-wrap li.active>a {
            color: #007bff;
        }

        .site-mobile-menu .site-nav-wrap .arrow-collapse {
            position: absolute;
            right: 0px;
            top: 10px;
            z-index: 20;
            width: 36px;
            height: 36px;
            text-align: center;
            cursor: pointer;
            border-radius: 50%;
        }

        .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
            background: #f8f9fa;
        }

        .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
            font-size: 12px;
            z-index: 20;
            font-family: "icomoon";
            content: "\f078";
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%) rotate(-180deg);
            -ms-transform: translate(-50%, -50%) rotate(-180deg);
            transform: translate(-50%, -50%) rotate(-180deg);
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .site-mobile-menu .site-nav-wrap>li {
            display: block;
            position: relative;
            float: left;
            width: 100%;
        }

        .site-mobile-menu .site-nav-wrap>li>a {
            padding-left: 20px;
            font-size: 20px;
        }

        .site-mobile-menu .site-nav-wrap>li>ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .site-mobile-menu .site-nav-wrap>li>ul>li {
            display: block;
        }

        .site-mobile-menu .site-nav-wrap>li>ul>li>a {
            padding-left: 40px;
            font-size: 16px;
        }

        .site-mobile-menu .site-nav-wrap>li>ul>li>ul {
            padding: 0;
            margin: 0;
        }

        .site-mobile-menu .site-nav-wrap>li>ul>li>ul>li {
            display: block;
        }

        .site-mobile-menu .site-nav-wrap>li>ul>li>ul>li>a {
            font-size: 16px;
            padding-left: 60px;
        }

        .sticky-wrapper {
            position: absolute;
            z-index: 100;
            width: 100%;
        }

        .sticky-wrapper+.site-blocks-cover {
            margin-top: 96px;
        }

        .sticky-wrapper .site-navbar {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        .sticky-wrapper .site-navbar ul li.active a {
            color: #fff;
        }

        .ico_pr {
            padding-right: 0.75rem;
            padding-left: 0.75rem
        }

        .d-end-flex {
            display: flex;
            justify-content: flex-end;
        }

        .fs-20 {
            font-size: 20px;
        }
    </style>
    <div class="bodyheader headerhtml">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->
        <div class="site-navbar-wrap">
            <div class="site-navbar-top">
                <div class="container py-3">
                    <div class="header_row align-items-center">
                        <div class="col-6">
                            <div class="d-flex mr-auto">
                                <a href="#" class="header_a d-flex align-items-center mr-4">
                                    <span class="icon-envelope mr-2"></span>
                                    <span class="d-none d-md-inline-block">info@domain.com</span>
                                </a>
                                <a href="#" class="header_a d-flex align-items-center mr-auto">
                                    <span class="icon-phone mr-2"></span>
                                    <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <div class="mr-auto d-end-flex">
                                <a href="#" class="header_a d-flex align-items-center ico_pr"><span
                                        class="icon-twitter"></span></a>
                                <a href="#" class="header_a d-flex align-items-center ico_pr"><span
                                        class="icon-facebook"></span></a>
                                <a href="#" class="header_a d-flex align-items-center ico_pr"><span
                                        class="icon-linkedin"></span></a>
                                <a href="#" class="header_a d-flex align-items-center ico_pr"><span
                                        class="icon-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-navbar site-navbar-target js-sticky-header">
                <div class="container">
                    <div class="header_row align-items-center">
                        <div class="col-2">
                            <h1 class="headerh1 my-0 site-logo"><a class="header_a" href="index.html">Brand</a></h1>
                        </div>
                        <div class="col-10">
                            <nav class="nav site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                            class="header_a site-menu-toggle js-menu-toggle text-white fs-20"><span
                                                class="icon-menu"></span></a></div>
                                    <ul class="header_ul site-menu main-menu js-clone-nav d-none d-lg-block">
                                        <li class="active"><a href="#home-section" class="header_a nav-link">Home</a></li>
                                        <li><a href="#classes-section" class=" header_a nav-link">Classes</a></li>
                                        <li class="has-children">
                                            <a href="#" class="header_a nav-link">Pages</a>
                                            <ul class="header_ul dropdown arrow-top">
                                                <li><a href="#" class="header_a nav-link">Team</a></li>
                                                <li><a href="#" class="header_a nav-link">Pricing</a></li>
                                                <li><a href="#" class="header_a nav-link">FAQ</a></li>
                                                <li class="has-children">
                                                    <a class="header_a" href="#">More Links</a>
                                                    <ul class="header_ul dropdown">
                                                        <li><a class="header_a" href="#">Menu One</a></li>
                                                        <li><a class="header_a" href="#">Menu Two</a></li>
                                                        <li><a class="header_a" href="#">Menu Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#about-section" class="header_a nav-link">About</a></li>
                                        <li><a href="{{ asset('/reg') }}" class="header_a nav-link">Regstiration</a></li>
                                        <li><a href="#events-section" class="header_a nav-link">Events</a></li>
                                        <li><a href="#gallery-section" class="header_a nav-link">Gallery</a></li>
                                        <li><a href="#contact-section" class="header_a nav-link">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
@show
