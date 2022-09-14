@extends('../layout/' . $layout)

@section('subhead')
    <title>Personal Information</title>
@endsection

@section('profile')
    <div class="col-span-12 lg:col-span-8 ">
        <div class="intro-y box mt-5">
            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">Personal Information</h2>
            </div>
            <hr>
            <div class="p-5">
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 xl:col-span-6">
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="text" class="form-control" placeholder="Input text"
                                value="{{ Auth()->user()->email }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-7" class="form-label">Gender</label>
                            <input id="update-profile-form-7" type="text" class="form-control" placeholder="Input text"
                                value="{{ Auth()->user()->gender }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-10" class="form-label">Phone Number</label>
                            <input id="update-profile-form-10" type="text" class="form-control" placeholder="Input text"
                                value="{{ Auth()->user()->phone_number }}" disabled>
                        </div>
                        <div class="mt-3">
                            <label for="update-profile-form-11" class="form-label">Address</label>
                            <input id="update-profile-form-11" type="text" class="form-control" placeholder="Input text"
                                value="{{ Auth()->user()->address }}" disabled>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-6">
                        <u><a href="{{ route('account.profile.edit', $account) }}">
                                <i data-lucide="edit" class="w-4 h-4 mr-2"></i>Edit Information
                            </a></u>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
