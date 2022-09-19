@extends('../layout/' . $layout)

@section('subhead')
    <title>Kontak - Lead Source</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Ubah Lead Source</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('leadsources.update', $leadSource) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Nama Lead Source</label>
                        <input id="name" name="name" type="text" class="form-control w-full"
                            value="{{ $leadSource->name }}">
                    </div>
                    <div class="mt-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" type="text" class="editor" id="description">{{ $leadSource->description }}</textarea>
                    </div>
                    <div class="text-right mt-5">
                        <a type="button" href="{{ route('leadsources.index') }}"
                            class="btn btn-outline-secondary w-24 mr-1">Batal</a>
                        <button type="submit" class="btn btn-primary w-24">Ubah</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
