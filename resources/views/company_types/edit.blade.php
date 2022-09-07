@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Edit Company Types</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('company_types.update', $company_type->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Company Type Name </label>
                        <input id="name" type="text" class="form-control w-full" placeholder="Input Nama Company Type"
                            name="name" value="{{ $company_type->name }}" required>
                    </div>
                    <div class="text-left mt-5">
                        <label for="description" class="form-label">Company Type Description</label>
                        <textarea class="editor" name="description" id="description" class="form-control w-full" placeholder="Input Deskripsi Company Type" 
                        rows="10">{{ $company_type->description }}</textarea>
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
