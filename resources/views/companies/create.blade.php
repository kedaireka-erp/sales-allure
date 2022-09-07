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
            <form action="{{ route('companies.store') }}" method="post">
                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Company Name</label>
                        <input id="name" type="text" class="form-control w-full" placeholder="Input Nama Company" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Company Type</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="company_type_id">
                        <option selected value="">Select Company Type</option>
                        @foreach ($types as $tp)
                        <option value="{{ $tp->id }}">{{ $tp->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Company Area</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="company_area_id">
                        <option selected value="">Select Company Area</option>
                        @foreach ($areas as $ar)
                        <option value="{{ $ar->id }}">{{ $ar->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div>
                        <label for="phone_number" class="form-label">Company Phone Number</label>
                        <input id="phone_number" type="text" class="form-control w-full" placeholder="Input Phone Number Company" name="phone_number" required>
                    </div>
                    <div>
                        <label for="address" class="form-label">Company Address</label>
                        <input id="address" type="text" class="form-control w-full" placeholder="Input Address Company" name="address" required>
                    </div>
                    <div class="text-left mt-5">
                        <label for="description" class="form-label">Company Description</label>
                        <textarea class="editor" name="description" id="description"class="form-control w-full" placeholder="Input Deskripsi Company" rows="10"></textarea>
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
