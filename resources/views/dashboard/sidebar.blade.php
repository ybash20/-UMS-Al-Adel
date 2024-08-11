<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-{{ lang('left') }} image">
                <img src="{{ UMS::myPhoto() }}" class="img-circle" alt="{{ lang('user_image') }}" />
            </div>
            <div class="pull-{{ lang('left') }} info">
                <p>
                    {{ UMS::myName() }}
                </p>
                <!-- Status -->
                <a href="#">
                    <i class="fa fa-circle text-success"></i>
                    {{ lang('online') }}
                </a>
            </div>
        </div>
        <div class='main-menu'>
            <ul class="sidebar-menu">
                <!-- Sidebar Menu -->
                <li class="header">
                    {{ lang('menu_navigation') }}
                </li>
                <!-- Optionally, you can add icons to the links -->
                <?php $dashboard = UMS::sidebarDashboard(); ?>
                @if ($dashboard)
                    <li data-id='{{ $dashboard->id }}' class="{{ Request::is(config('ums.ADMIN_PATH')) ? 'active' : '' }}">
                        <a href='{{ UMS::adminPath() }}' class='{{ $dashboard->color ? 'text-' . $dashboard->color : '' }}'>
                            <i class='fa fa-dashboard'></i>
                            <span>
                                {{ lang('text_dashboard') }}
                            </span>
                        </a>
                    </li>
                @endif
                @foreach (UMS::sidebarMenu() as $menu)
                    <li data-id='{{ $menu->id }}' class='{{ !empty($menu->children) ? 'treeview' : '' }} {{ Request::is($menu->url_path . '*') ? 'active' : '' }}'>
                        <a href='{{ $menu->is_broken ? "javascript:alert('" . lang('controller_route_404') . "')" : $menu->url }}' class='{{ $menu->color ? 'text-' . $menu->color : '' }}'>
                            <i class='{{ $menu->icon }} {{ $menu->color ? 'text-' . $menu->color : '' }}'></i>
                            <span>
                                {{lang( $menu->name )}}
                            </span>
                            @if (!empty($menu->children))
                                <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                            @endif
                        </a>
                        @if (!empty($menu->children))
                            <ul class="treeview-menu">
                                @foreach ($menu->children as $child)
                                    <li data-id='{{ $child->id }}'
                                        class='{{ Request::is($child->url_path .= !Str::endsWith(Request::decodedPath(), $child->url_path) ? '/*' : '') ? 'active' : '' }}'>
                                        <a href='{{ $child->is_broken ? "javascript:alert('" . lang('controller_route_404') . "')" : $child->url }}'
                                            class='{{ $child->color ? 'text-' . $child->color : '' }}'>
                                            <i class='{{ $child->icon }}'></i> <span>{{lang($child->name)}}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                @if (UMS::isManager())
                    <li class="header">
                        {{ lang('MANAGER') }}
                    </li>
                    <li class='treeview'>
                        <a href='#'>
                            <i class='fa fa-key'></i>
                            <span>
                                {{ lang('Privileges_Roles') }}
                            </span>
                            <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                        </a>
                        <ul class='treeview-menu'>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/privileges/add*') ? 'active' : '' }}">
                                <a href='{{ Route('PrivilegesControllerGetAdd') }}'>
                                    {{-- {{ $current_path }} --}}
                                    <i class='fa fa-plus'></i>
                                    <span>
                                        {{ lang('Add_New_Privilege') }}
                                    </span>
                                </a>
                            </li>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/privileges') ? 'active' : '' }}">
                                <a href='{{ Route('PrivilegesControllerGetIndex') }}'>
                                    <i class='fa fa-bars'></i>
                                    <span>
                                        {{ lang('List_Privilege') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='treeview'>
                        <a href='#'>
                            <i class='fa fa-users'></i>
                            <span>
                                {{ lang('users') }}
                            </span>
                            <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                        </a>
                        <ul class='treeview-menu'>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/users/add*') ? 'active' : '' }}">
                                <a href='{{ Route('AdminUmsUsersControllerGetAdd') }}'>
                                    <i class='fa fa-plus'></i>
                                    <span>
                                        {{ lang('add_user') }}
                                    </span>
                                </a>
                            </li>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/users') ? 'active' : '' }}">
                                <a href='{{ Route('AdminUmsUsersControllerGetIndex') }}'>
                                    <i class='fa fa-bars'></i>
                                    <span>
                                        {{ lang('List_users') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/menu_management*') ? 'active' : '' }}">
                        <a href='{{ Route('MenusControllerGetIndex') }}'>
                            <i class='fa fa-bars'></i>
                            <span>
                                {{ lang('Menu Management') }}
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class='fa fa-wrench'></i>
                            <span>
                                {{ lang('settings') }}
                            </span>
                            <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/settings/add*') ? 'active' : '' }}">
                                <a href='{{ route('SettingsControllerGetAdd') }}'>
                                    <i class='fa fa-plus'></i>
                                    <span>
                                        {{ lang('Add_New_Setting') }}
                                    </span>
                                </a>
                            </li>
                            <?php
                            $groupSetting = DB::table('ums_settings')->groupby('group_setting')->pluck('group_setting');
                            foreach($groupSetting as $gs):
                            ?>
                            <li class="<?= $gs == Request::get('group') ? 'active' : '' ?>">
                                <a href='{{ route('SettingsControllerGetShow') }}?group={{ urlencode($gs) }}&m=0'>
                                    <i class='fa fa-wrench'></i>
                                    <span>
                                        {{ lang($gs) }}
                                    </span>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li class='treeview'>
                        <a href='#'>
                            <i class='fa fa-th'></i>
                            <span>
                                {{ lang('Module Generator') }}
                            </span>
                            <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                        </a>
                        <ul class='treeview-menu'>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/module_generator/step1') ? 'active' : '' }}">
                                <a href='{{ Route('ModulsControllerGetStep1') }}'>
                                    <i class='fa fa-plus'></i>
                                    <span>
                                        {{ lang('Add_New_Module') }}
                                    </span>
                                </a>
                            </li>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/module_generator') ? 'active' : '' }}">
                                <a href='{{ Route('ModulsControllerGetIndex') }}'>
                                    <i class='fa fa-bars'></i>
                                    <span>
                                        {{ lang('List_Module') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='treeview'>
                        <a href='#'>
                            <i class='fa fa-dashboard'></i>
                            <span>
                                {{ lang('Statistic Builder') }}
                            </span>
                            <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                        </a>
                        <ul class='treeview-menu'>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/statistic_builder/add') ? 'active' : '' }}">
                                <a href='{{ Route('StatisticBuilderControllerGetAdd') }}'><i class='fa fa-plus'></i>
                                    <span>
                                        {{ lang('Add_New_Statistic') }}
                                    </span>
                                </a>
                            </li>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/statistic_builder') ? 'active' : '' }}">
                                <a href='{{ Route('StatisticBuilderControllerGetIndex') }}'>
                                    <i class='fa fa-bars'></i>
                                    <span>
                                        {{ lang('List_Statistic') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='treeview'>
                        <a href='#'>
                            <i class='fa fa-fire'></i>
                            <span>
                                {{ lang('API Generator') }}
                            </span>
                            <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                        </a>
                        <ul class='treeview-menu'>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/api_generator/generator*') ? 'active' : '' }}">
                                <a href='{{ Route('ApiCustomControllerGetGenerator') }}'>
                                    <i class='fa fa-plus'></i>
                                    <span>
                                        {{ lang('Add_New_API') }}
                                    </span>
                                </a>
                            </li>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/api_generator') ? 'active' : '' }}">
                                <a href='{{ Route('ApiCustomControllerGetIndex') }}'><i class='fa fa-bars'></i>
                                    <span>
                                        {{ lang('list_API') }}
                                    </span>
                                </a>
                            </li>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/api_generator/screet-key*') ? 'active' : '' }}">
                                <a href='{{ Route('ApiCustomControllerGetScreetKey') }}'>
                                    <i class='fa fa-bars'></i>
                                    <span>
                                        {{ lang('Generate_Screet_Key') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class='treeview'>
                        <a href='#'>
                            <i class='fa fa-envelope-o'></i>
                            <span>
                                {{ lang('Email Templates') }}
                            </span>
                            <i class="fa fa-angle-{{ lang('right') }} pull-{{ lang('right') }}"></i>
                        </a>
                        <ul class='treeview-menu'>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/email_templates/add*') ? 'active' : '' }}">
                                <a href='{{ Route('EmailTemplatesControllerGetAdd') }}'>
                                    <i class='fa fa-plus'></i>
                                    <span>
                                        {{ lang('Add_New_Email') }}
                                    </span>
                                </a>
                            </li>
                            <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/email_templates') ? 'active' : '' }}">
                                <a href='{{ Route('EmailTemplatesControllerGetIndex') }}'>
                                    <i class='fa fa-bars'></i>
                                    <span>
                                        {{ lang('List_Email_Template') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is(config('ums.ADMIN_PATH') . '/logs*') ? 'active' : '' }}">
                        <a href='{{ Route('LogsControllerGetIndex') }}'>
                            <i class='fa fa-flag'></i>
                            <span>
                                {{ lang('Log User Access') }}
                            </span>
                        </a>
                    </li>
                    @endif
            </ul><!-- /.sidebar-menu -->
        </div>
    </section>
    <!-- /.sidebar -->
</aside>
