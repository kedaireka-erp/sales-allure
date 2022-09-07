@extends('../layout/' . $layout)

@section('subhead')
    <title>Quotation - Create Data</title>
@endsection

@section('subcontent')
    <form action="{{ route('quotation.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Form Quotation</h2>
        </div>
        <div class="grid grid-cols-10 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label for="no_quotation" class="form-label">No. Quotation</label>
                        <input id="no_quotation" type="text" name="no_quotation" class=" w-full form-control"
                            placeholder="Masukkan nomor Quotation">
                    </div>
                        <label for="deal_source" class="form-label">Deal Source</label>
                        <select class="tom-select w-full mb-3" id="deal_source"
                            name="deal_source_id">
                            <option selected>Deal Source</option>
                            @foreach ($deal_source as $deal_s)
                                <option value="{{ $deal_s->id }}">{{ $deal_s->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="tom-select w-full mb-3" id="status" name="status_id">
                            <option selected>Status</option>
                            @foreach ($status as $stat)
                                <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="deskripsi" class="form-label">Keterangan</label>
                        <div class="mb-3">
                            <textarea name="keterangan" type="text" class="editor" id="deskripsi" cols="30" rows="10"></textarea>
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
