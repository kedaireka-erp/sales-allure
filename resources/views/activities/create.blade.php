@extends('../layout/' . $layout)

@section('subhead')
<title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Form Tambah FPPP</h2>
</div>
<div class="grid grid-cols-12 gap-10 mt-3">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Form Layout -->
        <form action="{{ route('activities.store') }}" method="post">
            @csrf
            <div class="intro-y box p-5">
                <div class="mt-5">
                    <label for="name" class="form-label">Jenis </label>
                    <input id="name" type="text" class="form-control w-full"
                        placeholder="Input Jenis Aktivitas" name="name">
                </div>
                <div class="mt-5">
                    <label for="desc" class="form-label">Deskripsi </label>
                    <input id="desc" type="text" class="form-control w-full"
                        placeholder="Input Deskripsi" name="desc">
                </div>

                <div class="text-right mt-5">
                    <button type="submit" class="btn btn-primary w-24">Save</button>
                </div>
            </div>


        </form>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    
</script>
<script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection