@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Edit Approachment</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('approachments.update', $approachment->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label for="contact" class = "form-label">Nama Kontak</label>
                        <select class="tom-select w-full mb-3" id="contact" name="contact_id">
                            @foreach ($contacts as $contact)
                                <option value="{{ $contact->id }}"
                                    {{ $contact->id == $approachment->contact_id ? 'selected' : '' }}>{{ $contact->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="activity" class = "form-label">Aktivitas</label>
                        <select class="tom-select w-full mb-3" id="activity" name="activity_id">
                            @foreach ($activities as $activity)
                                <option value="{{ $activity->id }}"
                                    {{ $activity->id == $approachment->activity_id ? 'selected' : '' }}>{{ $activity->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="date" class="form-label">Tanggal </label>
                        <input id="date" type="date" class="form-control w-full" placeholder="Input Tanggal "
                            name="date" value="{{ $approachment->date }}">
                    </div>

                    <div class="mt-3">
                        <label for="itemType" class = "form-label">Status</label>
                        <select class="tom-select w-full mb-3" id="status" name="status_id">
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}"
                                    {{ $status->id == $approachment->status_id ? 'selected' : '' }}>{{ $status->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-3">
                        <label for="note">Catatan</label>
                        <div class="mt-2">
                            <textarea name="note" id="note" cols="30" rows="10" class="editor">{!! old('note', $approachment->note) !!}</textarea>
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
    @vite('resources/dist/js/ckeditor-classic.js')
@endsection
