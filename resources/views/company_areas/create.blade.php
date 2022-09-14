@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Company Areas</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('company_areas.store') }}" method="post">
                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Company Area Name</label>
                        <input id="name" type="text" class="@error('name') border-red-700 @enderror form-control w-full" 
                            placeholder="Input Nama Company Area" name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-700 text-sm mt-1"></p>
                        @enderror
                    </div>
                    <div class="text-left mt-5">
                        <label for="description" class="form-label">Company Area Description</label>
                        <textarea class="editor" name="description" id="description" class="@error('description') border-red-700 @enderror form-control w-full" 
                            placeholder="Input Deskripsi Company Area" rows="10">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-700 text-sm mt-1"></p>
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
