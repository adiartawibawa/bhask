@php
$activeClass = 'active';
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="/images/logo.png" alt="">
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ $currentAdminMenu == 'dashboard' ? $activeClass : '' }}"><a class="nav-link"
                    href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            @foreach ($moduleAdminMenus as $moduleAdminMenu)
                <li class="menu-header">{{ $moduleAdminMenu['module'] }}</li>
                @foreach ($moduleAdminMenu['admin_menus'] as $moduleMenu)
                    @can($moduleMenu['permission'])
                        <li class="{{ $currentAdminMenu == strtolower($moduleMenu['name']) ? $activeClass : '' }}"><a
                                class="nav-link" href="{{ url($moduleMenu['route']) }}"><i
                                    class="{{ $moduleMenu['icon'] }}"></i> <span>{{ $moduleMenu['name'] }}</span></a>
                        </li>
                    @endcan
                @endforeach
            @endforeach
            <li class="menu-header">@lang('general.menu_account_label')</li>
            @can('view_users')
                <li class="{{ $currentAdminMenu == 'users' ? $activeClass : '' }}"><a class="nav-link"
                        href="{{ route('users.index') }}"><i class="fas fa-user"></i> <span>Users</span></a></li>
            @endcan
            @can('view_roles')
                <li class="{{ $currentAdminMenu == 'roles' ? $activeClass : '' }}"><a class="nav-link"
                        href="{{ route('roles.index') }}"><i class="fas fa-lock"></i>
                        <span>@lang('roles.menu_role_label')</span></a></li>
            @endcan
            <li class="menu-header">@lang('general.menu_setting_label')</li>
            @if (auth()->user()->hasRole(\App\Models\Role::ADMIN))
                <li class="{{ $currentAdminMenu == 'settings' ? $activeClass : '' }}"><a class="nav-link"
                        href="{{ route('settings.update') }}"><i class="fas fa-cogs"></i>
                        <span>@lang('settings.menu_settings_label')</span></a></li>
            @endif
        </ul>

    </aside>
</div>
