@extends('../layout/' . $layout)

@section('subhead')
<title>Profile - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Contact Details</h2>
</div>
<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="Midone - HTML Admin Template" class="rounded-full"
                    src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                    {{ $contact->name }}</div>
                <div class="text-slate-500">{{ $contact->ContactType->name }}</div>
            </div>
        </div>
        <div
            class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{ $contact->email }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-lucide="instagram" class="w-4 h-4 mr-2"></i> Instagram {{ $fakers[0]['users'][0]['name'] }}
                </div>
                <div class="truncate sm:whitespace-normal flex items-center mt-3">
                    <i data-lucide="twitter" class="w-4 h-4 mr-2"></i> Twitter {{ $fakers[0]['users'][0]['name'] }}
                </div>
            </div>
        </div>
        <div
            class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
            <div class="text-center rounded-md w-20 py-3">
                <div class="font-medium text-primary text-xl">0</div>
                <div class="text-slate-500">Activities</div>
            </div>
            <div class="text-center rounded-md w-20 py-3">
                <div class="font-medium text-primary text-xl">2</div>
                <div class="text-slate-500">Interests</div>
            </div>
            <div class="text-center rounded-md w-20 py-3">
                <div class="font-medium text-primary text-xl">0</div>
                <div class="text-slate-500">Deals</div>
            </div>
        </div>
    </div>
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
        <li id="profile-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4 flex items-center active" data-tw-target="#profile-more"
                role="tab" aria-selected="true">
                <i class="w-4 h-4 mr-2" data-lucide="user"></i>
                Contact Details
            </a>
        </li>
        <li id="account-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#activities"
                aria-selected="false" role="tab">
                <i class="w-4 h-4 mr-2" data-lucide="coffee"></i>
                Activities
            </a>
        </li>
        <li id="change-password-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#change-password"
                aria-selected="false" role="tab">
                <i class="w-4 h-4 mr-2" data-lucide="lock"></i>
                Interests
            </a>
        </li>
        <li id="edit-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#edit-contact"
                aria-selected="false" role="tab">
                <i class="w-4 h-4 mr-2" data-lucide="settings"></i> Edit
            </a>
        </li>
    </ul>
</div>
<!-- END: Profile Info -->
<div class="tab-content mt-5">
    <!-- BEGIN: Profile More -->
    <div id="profile-more" class="tab-pane " role="tabpanel" aria-labelledby="profile-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Profile -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Profile</h2>
                </div>
                <div class="p-5">
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="user" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Name</div>
                            <a href="" class="font-medium">Budi</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="mail" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">E-mail</div>
                            <a href="" class="font-medium">Budi@budi.com</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="phone" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Phone</div>
                            <a href="" class="font-medium">08888888888</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Profile -->
            <!-- BEGIN: Company -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Company</h2>
                    <a href="" class="btn btn-primary">More</a>
                </div>
                <div class="p-5">
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="user" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Name</div>
                            <a href="" class="font-medium">Budi</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="mail" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">E-mail</div>
                            <a href="" class="font-medium">Budi@budi.com</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="dollar-sign" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Annual revenue</div>
                            <a href="" class="font-medium">$293874</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Company -->
        </div>
    </div>
    <!-- END: Profile More -->
    <!-- BEGIN: Avctivities -->
    <div id="activities" class="tab-pane active" role="tabpanel" aria-labelledby="account-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Pendekatan -->
            <div class="intro-y box col-span-12">
                <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Your Approachment</h2>
                    <button data-carousel="new-products" data-target="prev"
                        class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                        <i data-lucide="chevron-left" class="w-4 h-4"></i>
                    </button>
                    <button data-carousel="new-products" data-target="next"
                        class="tiny-slider-navigator btn btn-outline-secondary px-2">
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </button>
                </div>
                <div id="new-products" class="tiny-slider py-5">
                    @foreach (array_slice($fakers, 0, 5) as $faker)
                    <div class="px-5">
                        <div class="flex flex-col lg:flex-row items-center pb-5">
                            <div
                                class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                <div class="sm:mr-5">
                                    <div class="w-20 h-20 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full"
                                            src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                                    </div>
                                </div>
                                <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                    <a href="" class="font-medium text-lg">{{ $faker['products'][0]['name'] }}</a>
                                    <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['news'][0]['short_content'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                            <div
                                class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                <div
                                    class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">
                                    {{ $faker['dates'][0] }}</div>
                                <div
                                    class="px-3 py-2 text-success bg-success/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">
                                    Deal</div>
                            </div>
                            <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                <button class="btn btn-secondary w-20 ml-auto">Edit</button>
                                <button class="btn btn-secondary w-20 ml-2">Details</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- END: Pendekatan -->
            <!-- BEGIN: New Authors -->
            <div class="intro-y box col-span-12">
                <h1 class="m-5 font-medium text-base mr-auto">Contact Activity Summary</h1>
                <div class="overflow-x-auto">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">#</th>
                                <th class="whitespace-nowrap">Activity Name</th>
                                <th class="whitespace-nowrap">Times</th>
                                <th class="whitespace-nowrap"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Zoom Call</td>
                                <td>5</td>
                                <td class="text-center">
                                    <button class="btn btn-primary">Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Email</td>
                                <td>20</td>
                                <td class="text-center">
                                    <button class="btn btn-primary">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END: New Authors -->
        </div>
    </div>
    <!--END: Avctivities -->
    <!-- BEGIN: Profile More -->
    <div id="edit-contact" class="tab-pane " role="tabpanel" aria-labelledby="edit-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Profile -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <form>
                    {{-- Form edit contact disini --}}
                        <div class="mt-5">
                            <label for="company" class="form-label">Company</label>
                            <select class="custom-select d-block w-full form-control mb-3 tom-select @error('company_id') border-red-700                            
                                    @enderror" id="company" name="company_id" placeholder="Select Company">
                                @isset($record->company_id)
                                @foreach ($companies as $company)
                                <option value="{{ $company->id }}" {{ $company->id === $contacts->company_id ?
                                    'selected' : '' }}>{{
                                    $company->name }}</option>
                                @endforeach
                                @endisset

                                @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                            @error('company_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="contact_type" class="form-label">Contact Type</label>
                            <select class="custom-select d-block w-full form-control mb-3 tom-select @error('contact_type_id') border-red-700                            
                                    @enderror" id="contact_type" name="contact_type_id" placeholder="Contact Type">
                                @foreach ($contactTypes as $contactType)
                                <option {{ $contactType->id == $contact->contact_type_id ? 'selected' : ''}} value="{{
                                    $contactType->id
                                    }}">{{ $contactType->name }}</option>
                                @endforeach
                            </select>
                            @error('contact_type_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="lead_source" class="form-label">Lead Source</label>
                            <select class="custom-select d-block w-full form-control mb-3 tom-select @error('lead_source_id') border-red-700                            
                                        @enderror" id="lead_source" name="lead_source_id" placeholder="Lead Source">
                                @isset($record->lead_source_id)
                                @foreach ($leadSources as $leadSource)
                                <option value="{{ $leadSource->id }}" {{ $leadSource->id === $contacts->leadSource_id ?
                                    'selected' : ''
                                    }}>{{ $leadSource->name }}</option>
                                @endforeach
                                @endisset

                                @foreach ($leadSources as $leadSource)
                                <option value="{{ $leadSource->id }}">{{ $leadSource->name }}</option>
                                @endforeach
                            </select>
                            @error('lead_source_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="lead_status" class="form-label">Lead Status</label>
                            <select class="custom-select d-block w-full form-control mb-3 tom-select @error('lead_status_id') border-red-700                            
                                    @enderror" id="lead_status" name="lead_status_id" placeholder="Lead Status">
                                @foreach ($leadStatuses as $leadStatus)
                                <option {{ $leadStatus->id == $contact->lead_status_id ? 'selected' : ''}} value="{{
                                    $leadStatus->id
                                    }}">{{ $leadStatus->name }}</option>
                                @endforeach
                            </select>
                            @error('lead_status_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="name" class="form-label">Contact Name </label>
                            <input id="name" type="text" class="@error('name') border-red-700                            
                                    @enderror form-control w-full" placeholder="Input Nama Contact" name="name"
                                value="{{ old('name', $contact->name) }}">
                            @error('name')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="email" class="form-label">E-mail </label>
                            <input id="email" type="text" class="@error('email') border-red-700                            
                                    @enderror form-control w-full" placeholder="Masukkan Email" name="email"
                                value="{{ old('email', $contact->email) }}">
                            @error('email')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="address" class="form-label">Address </label>
                            <input id="address" type="text" class="@error('address') border-red-700                            
                                    @enderror form-control w-full" placeholder="Masukkan Alamat" name="address"
                                value="{{ old('address', $contact->address) }}">
                            @error('address')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="phone" class="form-label">Phone Number </label>
                            <input id="phone" type="text" class="@error('phone') border-red-700                            
                                    @enderror form-control w-full" placeholder="Masukkan No Telepon" name="phone"
                                value="{{ old('phone', $contact->phone) }}">
                            @error('phone')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <label for="note" class="mb-2">Deskripsi</label>
                            <div class="mt-2">
                                <textarea name="note" id="note" cols="30" rows="10"
                                    class="editor">{{ old('note', $contact->note) }}</textarea>
                            </div>
                            @error('note')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-right mt-5">
                            <button type="submit" class="btn btn-primary w-24">Save</button>
                        </div>
                </form>
                <!-- END: Form Layout -->
            </div>
            <!-- END: Profile -->
        </div>
    </div>
    <!-- END: Profile More -->
</div>
@endsection