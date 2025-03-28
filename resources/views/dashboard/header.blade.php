<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{url(config('ums.ADMIN_PATH'))}}" title='{{Session::get('appname')}}' class="logo">
        {{UMS::getSetting('appname')}}
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">
                Toggle navigation
            </span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="lang-icon" href="#" class="dropdown-toggle" data-toggle="dropdown" title='Language' aria-expanded="false">

                    </a>
                    <ul id='list_language' class="dropdown-menu">
                        <li class="lang-header">{{ ucwords(lang('lang')) }}</li>
                        <li>
                            <div id="langForm" class="form_select">
                                <a href="/change-language/ar" name="lang" id="langAr" value="ar">
                                    <img src="{{ asset('image/ar.png') }}">
                                    العربية
                                </a>
                                <a href="/change-language/en" name="lang" id="langEn" value="en">
                                    <img src="{{ asset('image/en.png') }}">
                                    English
                                </a>
                            </div>
                        </li>
                        @push('bottom')
                            <script>
                                var form = document.getElementById("langForm");
                                var locale = "{{ app()->getLocale() }}";
                                var langAr = document.getElementById('langAr');
                                var langEn = document.getElementById('langEn');
                                var icon = document.querySelector('.lang-icon');
                                icon.innerHTML = '<i class="fa fa-globe"></i>';
                                if (locale === 'en') {
                                    langEn.classList.add('active');
                                    icon.innerHTML += 'English';
                                } else if (locale === 'ar') {
                                    langAr.classList.add('active');
                                    icon.innerHTML += 'العربية';
                                }
                            </script>
                        @endPush
                    </ul>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title='Notifications' aria-expanded="false">
                        <i id='icon_notification' class="fa fa-bell-o"></i>
                        <span id='notification_count' class="label label-danger" style="display:none">
                            0
                        </span>
                    </a>
                    <ul id='list_notifications' class="dropdown-menu">
                        <li class="lang-header">
                            {{lang("text_no_notification")}}
                        </li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">
                                <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                    <li>
                                        <a href="#">
                                            <em>
                                                {{lang("text_no_notification")}}
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                                <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 195.122px; background: rgb(0, 0, 0);"></div>
                                <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
                            </div>
                        </li>
                        <li class="footer">
                            <a href="{{route('NotificationsControllerGetIndex')}}">
                                {{lang("text_view_all_notification")}}
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ UMS::myPhoto() }}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            {{ UMS::myName() }}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ UMS::myPhoto() }}" class="img-circle" alt="User Image"/>
                            <p>
                                {{ UMS::myName() }}
                                <small>
                                    {{ UMS::myPrivilegeName() }}
                                </small>
                                <small>
                                    <em>
                                        <?php echo date('d F Y')?>
                                    </em>
                                </small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-{{ lang('left') }}">
                                <a href="{{ route('AdminUmsUsersControllerGetProfile') }}" class="btn btn-default btn-flat">
                                    <i class='fa fa-user'></i>
                                    {{lang("label_button_profile")}}
                                </a>
                            </div>
                            <div class="pull-{{ lang('right') }}">
                                <a title='Lock Screen' href="{{ route('getLockScreen') }}" class='btn btn-default btn-flat'>
                                    <i class='fa fa-key'></i>
                                </a>
                                <a href="javascript:void(0)" id="logoutButton" title="{{lang('button_logout')}}" class="btn btn-danger btn-flat">
                                    <i class='fa fa-power-off'></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
@push('bottom')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select the anchor tag
            const logoutButton = document.getElementById('logoutButton');

            // Attach an event listener to the button
            logoutButton.addEventListener('click', function(event) {            // Prevent default action
                event.preventDefault();
                // Call the logout function
                logout();
            });
        });
            // Define the logout function
        function logout() {
            swal({
                title: '{{lang('alert_want_to_logout')}}',
                type:'info',
                showCancelButton:true,
                allowOutsideClick:true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: '{{lang('button_logout')}}',
                cancelButtonText: '{{lang('button_cancel')}}',
                closeOnConfirm: false
                }, function(){
                location.href = "{{ route('getLogout') }}";
                });
        }
    </script>
@endPush
