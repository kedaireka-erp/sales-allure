@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Information</title>
@endsection

@section('profile')
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
                                        <input id="name" name="name" type="text" class="form-control"
                                            placeholder="Masukkan nama" value="{{ $account->name }}">
                                    </div>
                                    <div class="mt-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input id="email" name="email" type="text" class="form-control"
                                            placeholder="Masukkan email anda" value="{{ $account->email }}">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div
                                class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                    <div title="Remove this profile photo?"
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
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
        <form action="{{ route('account.profile.update', $account) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Personal Information</h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" name="gender" data-search="true" class="tom-select w-full">
                                    <option value="male" {{ $account->gender === 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $account->gender === 'female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                            </div>
                            <div class="mt-3 xl:mt-0">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input id="phone_number" name="phone_number" type="text" class="form-control"
                                    placeholder="Input phone number" value="{{ $account->phone_number }}">
                            </div>
                            <div class="mt-3">
                                <label for="address" class="form-label">Address</label>
                                <input id="address" name="address" type="text" class="form-control"
                                    placeholder="input address" value="{{ $account->address }}">
                            </div>

                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="submit" class="btn btn-primary w-20 mr-auto">Save</button>
                    </div>
                </div>
            </div>
        <!-- END: Personal Information -->
    </div>
    </div>
@endsection
