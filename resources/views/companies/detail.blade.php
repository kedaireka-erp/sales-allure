@extends('../layout/' . $layout)

@section('subhead')
<title>Company Detail</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Company Details</h2>
</div>
<!-- BEGIN: Profile Info -->
<div class="intro-y box px-5 pt-5 mt-5">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                <img alt="Midone - HTML Admin Template" class="rounded-full"
                    src="https://ui-avatars.com/api/?name={{ $company->name }}">
            </div>
            <div class="ml-5">
                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                    {{ $company->name }}</div>
                <div class="text-slate-500">{{ $company->company_type->name }}</div>
            </div>
        </div>
        <div
            class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
            <div class="font-medium text-center lg:text-left lg:mt-3">Company Socials</div>
            <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                <div class="truncate sm:whitespace-normal flex items-center">
                    <i data-lucide="mail" class="w-4 h-4 mr-2"></i>
                    company@company.co.id
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
                <div class="font-medium text-primary text-xl">{{ $company->contacts->count() }}</div>
                <div class="text-slate-500">Contacts</div>
            </div>
            {{-- <div class="text-center rounded-md w-20 py-3">
                <div class="font-medium text-primary text-xl">2</div>
                <div class="text-slate-500">Deals</div>
            </div> --}}
        </div>
    </div>
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
        <li id="profile-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4 flex items-center active" data-tw-target="#profile-more"
                role="tab" aria-selected="true">
                <i class="w-4 h-4 mr-2" data-lucide="user"></i>
                Company Details
            </a>
        </li>
        <li id="account-tab" class="nav-item" role="presentation">
            <a href="javascript:;" class="nav-link py-4 flex items-center" data-tw-target="#contacts"
                aria-selected="false" role="tab">
                <i class="w-4 h-4 mr-2" data-lucide="coffee"></i>
                Contacts
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
    <div id="profile-more" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Profile -->
            <!-- BEGIN: Company -->
            <div class="intro-y box col-span-12 lg:col-span-12">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Company Details</h2>
                </div>
                <div class="p-5">
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="user" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Name</div>
                            <a href="" class="font-medium">{{ $company->name }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="phone" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Phone Number</div>
                            <a href="" class="font-medium">{{ $company->phone_number }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="map-pin" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Address</div>
                            <a href="" class="font-medium">{{ $company->address }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="map" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">City</div>
                            <a href="" class="font-medium">{{ $company->city }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="target" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Company Area</div>
                            <a href="" class="font-medium">{{ $company->company_area->name }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="tag" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Postal Code</div>
                            <a href="" class="font-medium">{{ $company->postal_code }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="users" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Number of Employee</div>
                            <a href="" class="font-medium">{{ $company->number_of_employees }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="dollar-sign" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Annual Revenue</div>
                            <a href="" class="font-medium">{{ $company->annual_revenue }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="clock" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">Time Zone</div>
                            <a href="" class="font-medium">{{ $company->time_zone }}</a>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-12 h-12 flex items-center image-fit">
                            <i data-lucide="linkedin" class="w-full"></i>
                        </div>
                        <div class="ml-4 mr-auto">
                            <div class="text-slate-400 mr-5 text-sm sm:mr-5">LinkedIn Company</div>
                            <a href="" class="font-medium">{{ $company->linkedin_company }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Company -->
        </div>
        <div class="intro-y box overflow-hidden mt-5">
            <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                <div class="text-center sm:text-left mt-10 sm:mt-5">
                    <div class="font-medium text-base mr-auto"><b>Deskripsi Company</b></div>
                    <div class="mt-5">{{ $company->description }}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Profile More -->
    <!-- BEGIN: Contacts -->
    <div id="contacts" class="tab-pane " role="tabpanel" aria-labelledby="account-tab">
        <div class="grid grid-cols-12 gap-6">
            @foreach ($company->contacts as $contact)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div class="flex flex-col lg:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                src="https://ui-avatars.com/api/?name={{ $contact->name }}">
                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="{{ route('contacts.show', $contact) }}" class="font-medium">{{ $contact->name }}</a>
                            <div class="text-slate-500 text-xs mt-0.5">{{ $contact->ContactType ? $contact->ContactType->name :
                                '' }}</div>
                        </div>
                        <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Facebook">
                                <i class="w-3 h-3 fill-current" data-lucide="facebook"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Twitter">
                                <i class="w-3 h-3 fill-current" data-lucide="twitter"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Linked In">
                                <i class="w-3 h-3 fill-current" data-lucide="linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="w-full flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                            <p class="text-md text-slate-400">
                                PT Graha Persada
                            </p>
                        </div>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary py-1 px-2 mr-2">Delete</button>
                        </form>
                        <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-outline-secondary py-1 px-2">Update</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--END: Contacts -->
    <!-- BEGIN: Profile More -->
    <div id="edit-contact" class="tab-pane " role="tabpanel" aria-labelledby="edit-tab">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Profile -->
            <div class="intro-y box col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <form action="{{ route('companies.update', $company->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="intro-y box p-5">
                        <div>
                            <label for="name" class="form-label">Company Name </label>
                            <input id="name" type="text" class="@error('name') border-red-700  @enderror form-control w-full"
                                placeholder="Input Nama Company" name="name" value="{{ old('name', $company->name) }}">
                            @error('name')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="phone_number" class="form-label">Company Phone Number </label>
                            <input id="phone_number" type="text"
                                class="@error('phone_number') border-red-700  @enderror form-control w-full"
                                placeholder="Input Phone Number Company" name="phone_number"
                                value="{{ old('phone_number', $company->phone_number) }}" required>
                            @error('phone_number')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group text-left mt-5">
                            <label for="company_type" class="form-label">Company Type </label>
                            <select class="form-control tom-select @error('company_type_id') border-red-700  @enderror"
                                id="exampleFormControlSelect1" name="company_type_id">
                                <option selected value="">Select Company Type</option>
                                @foreach ($company_types as $tp)
                                <option {{ $tp->id == $company->company_type_id ? 'selected' : ''}} value="{{ $tp->id }}">{{
                                    $tp->name }}</option>
                                @endforeach
                            </select>
                            @error('company_type_id')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="address" class="form-label">Company Address </label>
                            <input id="address" type="text" class="form-control w-full" placeholder="Input Address Company"
                                name="address" value="{{ old('address', $company->address) }}" required>
                            @error('address')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="city" class="form-label">Company city </label>
                            <input id="city" type="text" class="form-control w-full" placeholder="Input city Company" name="city"
                                value="{{ old('city', $company->city) }}">
                            @error('city')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group text-left mt-5">
                            <label for="company_area" class="form-label">Company Area </label>
                            <select class="form-control tom-select" id="exampleFormControlSelect1" name="company_area_id">
                                <option selected value="">Select Company Area</option>
                                @foreach ($company_areas as $ar)
                                <option {{ $ar->id == $company->company_area_id ? 'selected' : ''}} value="{{ $ar->id }}">{{
                                    $ar->name }}</option>
                                @endforeach
                            </select>
                            @error('company_area_id')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="postal_code" class="form-label">Company Postal Code </label>
                            <input id="postal_code" type="number" class="form-control w-full" placeholder="Input Postal Code Company"
                                name="postal_code" value="{{ old('postal_code', $company->postal_code) }}">
                            @error('postal_code')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="number_of_employees" class="form-label">Company Number of Employees </label>
                            <input id="number_of_employees" type="number" class="form-control w-full"
                                placeholder="Input Number of Employees Company" name="number_of_employees"
                                value="{{ old('number_of_employees', $company->number_of_employees) }}">
                            @error('number_of_employees')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="annual_revenue" class="form-label">Company Annual Revenue</label>
                            <input id="annual_revenue" type="number" class="form-control w-full"
                                placeholder="Input Annual Revenue Company" name="annual_revenue"
                                value="{{ old('annual_revenue', $company->annual_revenue) }}">
                            @error('annual_revenue')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="time_zone" class="form-label">Company Time Zone </label>
                            <input id="time_zone" type="text" class="form-control w-full" placeholder="Input Time Zone Company"
                                name="time_zone" value="{{ old('time_zone', $company->time_zone) }}">
                            @error('time_zone')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="description" class="form-label">Company Description</label>
                            <textarea class="editor" name="description" id="description" class="form-control w-full"
                                placeholder="Input Deskripsi Company"
                                rows="10">{{ old('description', $company->description) }}</textarea>
                            @error('description')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-left mt-5">
                            <label for="linkedin_company" class="form-label">Company LinkedIn Company </label>
                            <input id="linkedin_company" type="text" class="form-control w-full"
                                placeholder="Input LinkedIn Company Company" name="linkedin_company"
                                value="{{ old('linkedin_company', $company->linkedin_company) }}">
                            @error('linkedin_company')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="text-right mt-5">
                            <button type="submit" class="btn btn-primary w-24">Save</button>
                        </div>
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

@section('script')
<script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection