@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Approachment</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('approachments.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label for="contact" class="form-label">Nama Kontak</label>
                        <select class="tom-select w-full mb-3" id="contact"
                            name="contact_id">
                            @foreach ($contacts as $contact)
                                <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="activity" class="form-label">Aktivitas</label>
                        <select class="tom-select w-full mb-3" id="activity"
                            name="activity_id">
                            @foreach ($activities as $activity)
                                <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="mt-3">
                        <label for="activity" class="form-label">Aktivitas</label>
                        <select class="tom-select w-full mb-3" id="activity"
                            name="activity_id">
                            @foreach ($activities as $activity)
                                <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="mt-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input id="date" type="date" class="form-control w-full" placeholder="Input Tanggal"
                            name="date">
                    </div>
                    <div class="mt-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="tom-select w-full mb-3" id="status"
                            name="status_id">
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3" id="note">
                        <label for="note" class="mb-2">Note</label>
                        <div class="mt-2">
                            <textarea name="note" cols="30" rows="10" class="editor "></textarea>
                        </div>
                    </div>

                    <div class="text-right mt-5">
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
    {{-- <div class="grid grid-cols-12 gap-10 mt-3">
    <div class="intro-y col-span-12 lg:col-span-6">
        <form action="{{ route('fppps.store.attachments') }}" class="dropzone" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
            <div class="dz-message" data-dz-message>
                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                <div class="text-slate-500">
                    This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually
                    uploaded.
                </div>
            </div>

        </form>
    </div>
</div> --}}
@endsection

@section('script')
    <script type="text/javascript"></script>
    @vite('resources/dist/js/ckeditor-classic.js')
@endsection
