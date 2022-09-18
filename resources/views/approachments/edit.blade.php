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
                    <div class="mt-5">
                        <label for="date" class="form-label">Tanggal </label>
                        <input id="date" type="date" class="form-control w-full"
                            placeholder="Input Tanggal " name="date"
                            value="{{ $approachment->date }}">
                    </div>
                    <div class="mt-5">
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
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
