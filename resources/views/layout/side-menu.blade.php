@extends('layout.main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('layout.components.mobile-menu')
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="" class="intro-x flex items-center pl-5 pt-4">
                <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                <span class="hidden xl:block text-white text-lg ml-3">
                    Sales
                </span>
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                @foreach ($side_menu as $menuKey => $menu)
                    @if ($menu == 'devider')
                        <li class="side-nav__devider my-6"></li>
                    @else
                        <li>
                            <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                <div class="side-menu__icon">
                                    <i data-lucide="{{ $menu['icon'] }}"></i>
                                </div>
                                <div class="side-menu__title">
                                    {{ $menu['title'] }}
                                    @if (isset($menu['sub_menu']))
                                        <div class="side-menu__sub-icon {{ $first_level_active_index == $menuKey ? 'transform rotate-180' : '' }}">
                                            <i data-lucide="chevron-down"></i>
                                        </div>
                                    @endif
                                </div>
                            </a>
                            @if (isset($menu['sub_menu']))
                                <ul class="{{ $first_level_active_index == $menuKey ? 'side-menu__sub-open' : '' }}">
                                    @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                        <li>
                                            <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}" class="{{ $second_level_active_index == $subMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                <div class="side-menu__icon">
                                                    <i data-lucide="{{ $subMenu['icon'] }}"></i>
                                                </div>
                                                <div class="side-menu__title">
                                                    {{ $subMenu['title'] }}
                                                    @if (isset($subMenu['sub_menu']))
                                                        <div class="side-menu__sub-icon {{ $second_level_active_index == $subMenuKey ? 'transform rotate-180' : '' }}">
                                                            <i data-lucide="chevron-down"></i>
                                                        </div>
                                                    @endif
                                                </div>
                                            </a>
                                            @if (isset($subMenu['sub_menu']))
                                                <ul class="{{ $second_level_active_index == $subMenuKey ? 'side-menu__sub-open' : '' }}">
                                                    @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                        <li>
                                                            <a href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}" class="{{ $third_level_active_index == $lastSubMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                                <div class="side-menu__icon">
                                                                    <i data-lucide="zap"></i>
                                                                </div>
                                                                <div class="side-menu__title">{{ $lastSubMenu['title'] }}</div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content w-full">
            @include('../layout/components/top-bar')
            @include('components.session-alert')
            @yield('subcontent')
            @hasSection('profile')
            <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
                <div class="intro-y box mt-5 lg:mt-0">
                    <div class="relative flex items-center p-5">
                        <div class="w-12 h-12 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium text-base">{{ Auth()->user()->name }}</div>
                            <div class="text-slate-500">{{ Auth()->user()->email }}</div>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-56">
                                <ul class="dropdown-content">
                                    <li>
                                        <h6 class="dropdown-header">Profile Menu</h6>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-lucide="eye" class="w-4 h-4 mr-2"></i>View Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('account.profile.edit', $account) }}" class="dropdown-item">
                                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i>Edit Profile
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center mt-5" href="{{ route('account.personal-information', $account) }}">
                            <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information
                        </a>
                        <a class="flex items-center mt-5" href="">
                            <i data-lucide="box" class="w-4 h-4 mr-2"></i> Account Settings
                        </a>
                        <a class="flex items-center mt-5" href="">
                            <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password
                        </a>
                        <a class="flex items-center mt-5" href="">
                            <i data-lucide="settings" class="w-4 h-4 mr-2"></i> User Settings
                        </a>
                    </div>
                    <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center" href="">
                            <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Email Settings
                        </a>
                        <a class="flex items-center mt-5" href="">
                            <i data-lucide="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                        </a>
                        <a class="flex items-center mt-5" href="">
                            <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Social Networks
                        </a>
                        <a class="flex items-center mt-5" href="">
                            <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Tax Information
                        </a>
                    </div>
                    <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                        <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                        <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                    </div>
                </div>
            </div>
            @else
            @endif

            @yield('profile')
        </div>
        <!-- END: Content -->
    </div>
@endsection
