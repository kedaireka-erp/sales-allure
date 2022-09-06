@extends('../layout/' . $layout)

@section('subhead')
    <title>Status - Create Data</title>
@endsection

@section('subcontent')
    <form action="{{ route('status.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Form Status</h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <div class="intro-y box p-5">
                    <div>
                        <label for="name" class="form-label">Nama Status</label>
                        <input id="name" type="text" name="name" class="form-control w-full"
                            placeholder="Masukkan nama status">
                    </div>
                    <div class="mt-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                            <div class="input-group mb-3">
                                <textarea name="deskripsi" type="text" class="form-control" id="deskripsi"></textarea>
                            </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
