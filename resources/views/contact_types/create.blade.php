@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Contact Type</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('contact_types.store') }}" method="post">
                @csrf
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Contact Type Name </label>
                        <input id="name" type="text" class="form-control w-full" placeholder="Nama Jenis Kontak"
                            name="name" required>
                    </div>
                    <div class="mt-5">
                        <label for="status" class="form-label">Contact Type Status</label>
                        <select data-placeholder="Pilih Status Kontak" class="tom-select w-full" id="status"
                            name="status" single>
                            <option value="active" selected>Active</option>
                            <option value="nonactive">Nonactive</option>
                        </select>
                    </div>



                    {{-- <div class="mt-5">
                        <label for="note">Catatan</label>
                        <div class="mt-2">
                            <div class="editor">
                            </div>
                        </div>
                    </div> --}}
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
