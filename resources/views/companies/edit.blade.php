@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Edit Company</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('companies.update', $company->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Company Name </label>
                        <input id="name" type="text" class="form-control w-full" placeholder="Input Nama Company"
                            name="name" value="{{ $company->name }}" required>
                    </div>
                    <div class="text-left mt-5">
                        <label for="phone_number" class="form-label">Company Phone Number </label>
                        <input id="phone_number" type="text" class="form-control w-full" placeholder="Input Phone Number Company"
                            name="phone_number" value="{{ $company->phone_number }}" required>
                    </div>
                    <div class="form-group text-left mt-5">
                        <label for="company_type" class="form-label">Company Type </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="company_type_id">
                        <option selected value="">Select Company Type</option>
                        @foreach ($company_types as $tp)
                        <option {{ $tp->id == $company->company_type_id ? 'selected' : ''}} value="{{ $tp->id }}">{{ $tp->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="text-left mt-5">
                        <label for="address" class="form-label">Company Address </label>
                        <input id="address" type="text" class="form-control w-full" placeholder="Input Address Company"
                            name="address" value="{{ $company->address }}" required>
                    </div>
                    <div class="text-left mt-5">
                        <label for="city" class="form-label">Company city </label>
                        <input id="city" type="text" class="form-control w-full" placeholder="Input city Company"
                            name="city" value="{{ $company->city }}">
                    </div>
                    <div class="form-group text-left mt-5">
                        <label for="company_area" class="form-label">Company Area </label>
                        <select class="form-control" id="exampleFormControlSelect1" name="company_area_id">
                        <option selected value="">Select Company Area</option>
                        @foreach ($company_areas as $ar)
                        <option {{ $ar->id == $company->company_area_id ? 'selected' : ''}} value="{{ $ar->id }}">{{ $ar->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="text-left mt-5">
                        <label for="postal_code" class="form-label">Company Postal Code </label>
                        <input id="postal_code" type="number" class="form-control w-full" placeholder="Input Postal Code Company"
                            name="postal_code" value="{{ $company->postal_code }}">
                    </div>
                    <div class="text-left mt-5">
                        <label for="number_of_employees" class="form-label">Company Number of Employees </label>
                        <input id="number_of_employees" type="number" class="form-control w-full" placeholder="Input Number of Employees Company"
                            name="number_of_employees" value="{{ $company->number_of_employees }}">
                    </div>
                    <div class="text-left mt-5">
                        <label for="annual_revenue" class="form-label">Company Annual Revenue</label>
                        <input id="annual_revenue" type="number" class="form-control w-full" placeholder="Input Annual Revenue Company"
                            name="annual_revenue" value="{{ $company->annual_revenue }}">
                    </div>
                    <div class="text-left mt-5">
                        <label for="time_zone" class="form-label">Company Time Zone </label>
                        <input id="time_zone" type="text" class="form-control w-full" placeholder="Input Time Zone Company"
                            name="time_zone" value="{{ $company->time_zone }}">
                    </div>
                    <div class="text-left mt-5">
                        <label for="description" class="form-label">Company Description</label>
                        <textarea class="editor" name="description" id="description" class="form-control w-full" placeholder="Input Deskripsi Company" 
                        rows="10">{{ $company->description }}</textarea>
                    </div>
                    <div class="text-left mt-5">
                        <label for="linkedin_company" class="form-label">Company LinkedIn Company </label>
                        <input id="linkedin_company" type="text" class="form-control w-full" placeholder="Input LinkedIn Company Company"
                            name="linkedin_company" value="{{ $company->linkedin_company }}">
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
