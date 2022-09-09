@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Edit Contact</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Contact Type Name </label>
                        <input id="name" type="text" class="form-control w-full" placeholder="Input Nama Contact Type"
                            name="name" value="{{ $contact->name }}" required>
                    </div>
                    <div>
                        <label for="email" class="form-label">E-mail </label>
                        <input id="email" type="text" class="form-control w-full" placeholder="Masukkan Email"
                            name="email"   value="{{ $contact->email }}" required>
                    </div>
                    <div>
                        <label for="address" class="form-label">Address </label>
                        <input id="address" type="text" class="form-control w-full" placeholder="Masukkan Alamat"
                            name="address"  value="{{ $contact->address }}" required>
                    </div>
                    <div>
                        <label for="phone" class="form-label">Phone Number </label>
                        <input id="phone" type="text" class="form-control w-full" placeholder="Masukkan No Telepon"
                            name="phone"  value="{{ $contact->phone }}" required>
                    </div>
                    <div>
                        <label for="ownerphone" class="form-label">Owner Phone Number </label>
                        <input id="ownerphone" type="text" class="form-control w-full" placeholder="Masukkan No Telepon Owner"
                            name="ownerphone"  value="{{ $contact->ownerphone }}" required>
                    </div>
                    <div class="mt-5">
                        <label for="note" class="mb-2">Deskripsi</label>
                        <div class="mt-2">
                            <textarea name="note" id="note" cols="30" rows="10" class="editor">{{ $contact->note }}</textarea>
                        </div>
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
