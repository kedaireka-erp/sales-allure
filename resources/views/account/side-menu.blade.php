@extends('../layout/' . $layout)

@section('subhead')
    <title>Profil</title>
@endsection

@section('subcontent')
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
                <div class="intro-y box mt-5 lg:mt-0">
                    <div class="relative flex items-center p-5">
                        <div class="w-12 h-12 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('storage/profile/' . Auth()->user()->photo) }}">
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="font-medium text-base">{{ Auth()->user()->name }}</div>
                            <div class="text-slate-500">{{ Auth()->user()->email }}</div>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                                data-tw-toggle="dropdown">
                                <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    
                                    <li>
                                        <form action="{{ route('account.photoProfile', $account) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
                                        <div class="mx-auto cursor-pointer relative">
                                            <input type="file" name="photo" class="w-full h-full">
                                            <button type="submit" class="dropdown-item mt-1">Change Photo</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <a class="flex items-center mt-5" href="{{ route('account.profile', $account) }}">
                            <i data-lucide="user" class="w-4 h-4 mr-2"></i> Personal Information
                        </a>
                        <a class="flex items-center mt-5" href="{{ route('account.profile.edit', $account) }}">
                            <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Edit Personal Information
                        </a>

                    </div>
                    <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                        <a href="{{ route('logout') }}" class="btn btn-primary py-1 px-2 ml-auto"><i
                                data-lucide="log-out" class="w-4 h-4 mr-2"></i>Log Out</a>
                    </div>
                </div>
            </div>

            @yield('profile')
            
        </div>
        
@endsection
