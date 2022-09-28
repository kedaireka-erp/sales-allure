@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Company</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('companies.store') }}" method="post" class="">
                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Company Name</label>
                        <input id="name" value="{{ old('name') }}" type="text" class="@error('name') border-red-700 @enderror form-control w-full" placeholder="Input Nama Company" name="name" >
                        @error('name')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="phone_number" class="form-label">Company Phone Number</label>
                        <input id="phone_number" value="{{ old('phone_number') }}" type="text" class="@error('phone_number') border-red-700 @enderror form-control w-full" placeholder="Input Phone Number Company" name="phone_number" >
                        @error('phone_number')
                            <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group text-left mt-5">
                        <label for="company_type" class="form-label">Company Type</label>
                        <select class="form-control tom-select" id="exampleFormControlSelect1" name="company_type_id">
                        <option selected value="">Select Company Type</option>
                        @foreach ($types as $key => $tp)
                        <option {{ old("company_type_id") == $key ? "selected":"" }} value="{{ $tp->id }}">{{ $tp->name }}</option>
                        @endforeach
                        @error('company_type_id')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </select>
                    </div>
                    <div class="text-left mt-5">
                        <label for="address" class="form-label">Company Address</label>
                        <input id="address" value="{{ old('address') }}" type="text" class="@error('address') border-red-700 @enderror form-control w-full" placeholder="Input Address Company" name="address" >
                        @error('address')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="city" class="form-label">City</label>
                        <input value="{{ old('city') }}" id="city" type="text" class="form-control w-full" placeholder="Input City" name="city">
                        @error('city')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group text-left mt-5">
                        <label for="company_area" class="form-label">Company Area</label>
                        <select class="form-control tom-select" id="exampleFormControlSelect1" name="company_area_id">
                        <option selected value="">Select Company Area</option>
                        @foreach ($areas as $key=> $ar)
                        <option {{ old("company_area_id") == $key ? "selected":"" }} value="{{ $ar->id }}">{{ $ar->name }}</option>
                        @endforeach
                        @error('company_area_id')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </select>
                    </div>
                    <div class="text-left mt-5">
                        <label for="postal_code" class="form-label">Postal Code</label>
                        <input value="{{ old('postal_code') }}" id="postal_code" type="number" class="form-control w-full" placeholder="Input Postal Code" name="postal_code">
                        @error('postal_code')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="number_of_employees" class="form-label">Number of Employees</label>
                        <input value="{{ old('number_of_employees') }}" id="number_of_employees" type="number" class="form-control w-full" placeholder="Input Number of Employees" name="number_of_employees">
                        @error('number_of_employees')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="annual_revenue" class="form-label">Annual Revenue</label>
                        <input value="{{ old('annual_revenue') }}" id="annual_revenue" type="number" class="form-control w-full" placeholder="Input Annual Revemue" name="annual_revenue">
                        @error('annual_revenue')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="time_zone" class="form-label">Time Zone</label>
                        <input value="{{ old('time_zone') }}" id="time_zone" type="text" class="form-control w-full" placeholder="Input Time Zone" name="time_zone">
                        @error('time_zone')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="description" class="form-label">Company Description</label>
                        <textarea class="editor" name="description" id="description"class="form-control w-full" placeholder="Input Deskripsi Company" rows="10">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="linkedin_company" class="form-label">LinkedIn Company Page</label>
                        <input value="{{ old('linkedin_company') }}" id="linkedin_company" type="text" class="form-control w-full" placeholder="Input Linkedin Company Page" name="linkedin_company">
                        @error('linkedin_company')
                        <p class="text-red-700 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-right mt-5">
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
            </form>
            <!-- END: Form Layout -->
            
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
