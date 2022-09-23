@extends('../layout/' . $layout)

@section('subhead')
    <title>Kontak - Lead Priority</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Ubah Lead Priority</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('leadpriorities.update', $leadpriority->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Nama Lead Priority</label>
                        <input id="name" name="name" type="text" class="form-control w-full"
                            value="{{ $leadpriority->name }}">
                    </div>
                    <div class="mt-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" type="text" class="editor" id="description">{{ $leadpriority->description }}</textarea>
                    </div>
                    <div class="text-right mt-5">
                        <a type="button" href="{{ route('leadpriorities.index') }}"
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
    @vite('resources/dist/js/ckeditor-classic.js')
@endsection
