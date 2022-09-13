@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Contact</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('contacts.store') }}" method="post">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-5">
                        <label for="contact_type" class="form-label">Contact Type</label>
                        <select class="custom-select d-block w-full form-control mb-3 tom-select" id="contact_type"
                                name="contact_type_id">
                                <option selected>Contact Type</option>
                                @foreach ($contactTypes as $contactType)
                                    <option value="{{ $contactType->id }}">{{ $contactType->name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="lead_source" class="form-label">Lead Source</label>
                            <select class="custom-select d-block w-full form-control mb-3 tom-select" id="lead_source"
                                    name="lead_source_id">
                                    
                                    @foreach ($leadSources as $leadSource)
                                        <option value="{{ $leadSource->id }}">{{ $leadSource->name }}</option>
                                    @endforeach
                            </select>
                    </div>
                    <div class="mt-5">
                        <label for="name" class="form-label">Contact Name </label>
                        <input id="name" type="text" class="form-control w-full" placeholder="Masukkan Nama Kontak"
                            name="name" required>
                    </div>
                    <div class="mt-5">
                        <label for="email" class="form-label">E-mail </label>
                        <input id="email" type="text" class="form-control w-full" placeholder="Masukkan Email"
                            name="email" required>
                    </div>
                    <div class="mt-5">
                        <label for="address" class="form-label">Address </label>
                        <input id="address" type="text" class="form-control w-full" placeholder="Masukkan Alamat"
                            name="address" required>
                    </div>
                    <div class="mt-5">
                        <label for="phone" class="form-label">Phone Number </label>
                        <input id="phone" type="text" class="form-control w-full" placeholder="Masukkan No Telepon"
                            name="phone" required>
                    </div>
                    <div class="mt-5">
                        <label for="note" class="mb-2">Deskripsi</label>
                        <div class="mt-2">
                            <textarea name="note" id="note" cols="30" rows="10" class="editor"></textarea>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
            </form>
            <!-- END: Form Layout -->
        </div>
        @isset($record)
            
        @endisset
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
