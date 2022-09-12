@extends('../layout/' . $layout)

@section('subhead')
    <title>Profile Information</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ Auth()->user()->name }}</div>
                    <div class="text-slate-500">Sales</div>
                </div>
            </div>
            <div class="align-top">
                {{-- <u>
            <a href="{{ route('account.profile.edit', Auth()->user()) }}" class="flex items-center mr-3">
                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>Edit Profile
            </a></u> --}}
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Informasi Sales</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                        <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{ Auth()->user()->email }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-lucide="user" class="w-4 h-4 mr-2"></i> {{ Auth()->user()->gender }}
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">201</div>
                    <div class="text-slate-500">Deals</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">1k</div>
                    <div class="text-slate-500">Pending</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">492</div>
                    <div class="text-slate-500">Lost</div>
                </div>
            </div>
        </div>
        <ul
            class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
            role="tablist"
        >
            <li id="profile-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center active"
                    data-tw-target="#profile"
                    aria-controls="profile"
                    aria-selected="true"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-lucide="user"></i> Profile
                </a>
            </li>
            <li id="account-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#account"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-lucide="shield"></i> Account
                </a>
            </li>
            <li id="change-password-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#change-password"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-lucide="lock"></i> Change Password
                </a>
            </li>
            <li id="settings-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#settings"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-lucide="settings"></i> Settings
                </a>
            </li>
            <li id="edit-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#edit"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-lucide="edit"></i> Edit Profile
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Profile Info -->
    <div class="tab-content mt-5">
        <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Latest Uploads -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Uploads</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">All Files</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">All Files</button>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Documentation</a>
                                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-lucide="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--file">
                                    <div class="file__icon__file-name text-xs">MP3</div>
                                </a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Celine Dion - Ashes</a>
                                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-lucide="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--empty-directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Resources</a>
                                <div class="text-slate-500 text-xs mt-0.5">0 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-lucide="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Uploads -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: New Products -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">New Products</h2>
                        <button data-carousel="new-products" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-products" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div id="new-products" class="tiny-slider py-5">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['news'][0]['short_content'] }}</div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                                            <div class="text-slate-500">Orders</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][1] }}k</div>
                                            <div class="text-slate-500">Purchases</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                                            <div class="text-slate-500">Reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-slate-500">Date of Release</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                        <button class="btn btn-secondary w-20 ml-2">Details</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: New Products -->
                <!-- BEGIN: New Authors -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">New Authors</h2>
                        <button data-carousel="new-authors" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-authors" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div id="new-authors" class="tiny-slider py-5">
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ Auth()->user()->name }}</a>
                                            <div class="text-slate-500 mt-1 sm:mt-0"></div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                        <div class="flex items-center">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                                                <i class="w-3 h-3 fill-current" data-lucide="facebook"></i>
                                            </a>
                                            {{ $faker['users'][0]['email'] }}
                                        </div>
                                        <div class="flex items-center mt-2">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                                                <i class="w-3 h-3 fill-current" data-lucide="twitter"></i>
                                            </a>
                                            {{ $faker['users'][0]['name'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-slate-500">Joined Date</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                        <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- END: New Authors -->
            </div>
        </div>
        <div id="edit" class="tab-pane" role="tabpanel" aria-labelledby="edit-tab">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">Edit Profile</h2>
            </div>
            <div class="grid grid-cols-12 gap-6">
                        <!-- BEGIN: Profile Menu -->
                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
                            <div class="intro-y box mt-5">
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
                                                    <h6 class="dropdown-header">Export Options</h6>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a href="" class="dropdown-item">
                                                        <i data-lucide="activity" class="w-4 h-4 mr-2"></i> English
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="dropdown-item">
                                                        <i data-lucide="box" class="w-4 h-4 mr-2"></i>
                                                        Indonesia
                                                        <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="dropdown-item">
                                                        <i data-lucide="layout" class="w-4 h-4 mr-2"></i> English
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="dropdown-item">
                                                        <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                                    </a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <div class="flex p-1">
                                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                    <a class="flex items-center text-primary font-medium" href="">
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
                        <!-- END: Profile Menu -->
                <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                    <!-- BEGIN: Display Information -->
                    <form action="{{ route('account.profile.update', $account) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                    <div class="intro-y box lg:mt-5">
                        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">Sales Information</h2>
                        </div>
                        
                        <div class="p-5">
                            <div class="flex flex-col-reverse xl:flex-row flex-col">
                                <div class="flex-1 mt-6 xl:mt-0">
                                    <div class="grid grid-cols-12 gap-x-5">
                                        <div class="col-span-12 2xl:col-span-6">
                                            <div>
                                                <label for="name" class="form-label">Name</label>
                                                <input id="name" name="name" type="text" class="form-control" placeholder="Masukkan nama" value="{{ $account->name }}">
                                            </div>
                                            <div class="mt-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input id="email" name="email" type="text" class="form-control" placeholder="Masukkan email anda" value="{{ $account->email }}">
                                            </div>
                                            <div class="mt-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select id="gender" name="gender" data-search="true" class="tom-select w-full">
                                                    <option value="male"   {{ $account->gender === 'male' ? 'selected' : '' }}>Male</option>
                                                    <option value="female"   {{ $account->gender === 'female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                                </div>
                                <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                                    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                        <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                            <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                            <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                <i data-lucide="x" class="w-4 h-4"></i>
                                            </div>
                                        </div>
                                        <div class="mx-auto cursor-pointer relative mt-5">
                                            <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Display Information -->
                    
                    <!-- BEGIN: Personal Information -->
                    <div class="intro-y box mt-5">
                        <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">Personal Information</h2>
                        </div>
                        <div class="p-5">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-6" class="form-label">Email</label>
                                        <input id="update-profile-form-6" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['email'] }}" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-7" class="form-label">Name</label>
                                        <input id="update-profile-form-7" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['name'] }}" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-8" class="form-label">ID Type</label>
                                        <select id="update-profile-form-8" class="form-select">
                                            <option>IC</option>
                                            <option>FIN</option>
                                            <option>Passport</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-9" class="form-label">ID Number</label>
                                        <input id="update-profile-form-9" type="text" class="form-control" placeholder="Input text" value="357821204950001">
                                    </div>
                                </div>
                                <div class="col-span-12 xl:col-span-6">
                                    <div class="mt-3 xl:mt-0">
                                        <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                        <input id="update-profile-form-10" type="text" class="form-control" placeholder="Input text" value="65570828">
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-11" class="form-label">Address</label>
                                        <input id="update-profile-form-11" type="text" class="form-control" placeholder="Input text" value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-12" class="form-label">Bank Name</label>
                                        <select id="update-profile-form-12" data-search="true" class="tom-select w-full">
                                            <option value="1">SBI - STATE BANK OF INDIA</option>
                                            <option value="1">CITI BANK - CITI BANK</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-13" class="form-label">Bank Account</label>
                                        <input id="update-profile-form-13" type="text" class="form-control" placeholder="Input text" value="DBS Current 011-903573-0">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <button type="button" class="btn btn-primary w-20 mr-auto">Save</button>
                                <a href="" class="text-danger flex items-center">
                                    <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete Account
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Personal Information -->
                </div>
            </div>
        </div>
    </div>
@endsection
