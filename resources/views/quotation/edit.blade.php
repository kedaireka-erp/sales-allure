@extends('../layout/' . $layout)

@section('subhead')
    <title>Quotation - Edit Data</title>
@endsection

@section('subcontent')
    <form action="{{ route('quotation.update', $quotation) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">Form Edit Quotation</h2>
        </div>
        <div class="grid grid-cols-10 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <div class="intro-y box p-5">
                    <div class="mt-3">
                        <label for="no_quotation" class="form-label">No. Quotation</label>
                        <input id="no_quotation" type="text" name="no_quotation" class="form-control w-full"
                            value="{{ $quotation->no_quotation }}">
                    </div>
                        <label for="contact" class="form-label">Contact</label>
                        <select class="tom-select w-full mb-3" id="contact"
                                name="contact_id">
                                @foreach ($contacts as $contact)
                                    <option value="{{ $contact->id }}"   {{ $contact->id === $quotation->contact_id ? 'selected' : '' }}>{{ $contact->name }}</option>
                                @endforeach
                        </select>
                        <label for="deal_source" class="form-label">Deal Source</label>
                        <select class="tom-select w-full mb-3" id="deal_source"
                                name="deal_source_id">
                                @foreach ($deal_source as $deal_s)
                                    <option value="{{ $deal_s->id }}"   {{ $deal_s->id === $quotation->deal_source_id ? 'selected' : '' }}>{{ $deal_s->name }}</option>
                                @endforeach
                            </select>
                        <label for="status_id" class="form-label">Status</label>
                        <select class="tom-select w-full mb-3" id="status_id"
                                name="status_id">
                                @foreach ($status as $stat)
                                    <option value="{{ $stat->id }}"  {{ $stat->id === $quotation->status_id ? 'selected' : '' }}>{{ $stat->name }}</option>
                                @endforeach
                            </select>
                            <div class="mt-3" id="alasan_lost">
                                <label for="alasan" class="form-label">Alasan Lost</label>
                                <div class="mb-3">
                                    <textarea name="alasan" type="text" class="editor" cols="30" rows="10">{!! old('alasan', $quotation->alasan) !!}</textarea>
                                </div>
                            </div>
                            
                    <div class="mt-3">
                        <label for="deskripsi" class="form-label">Keterangan</label>
                            <div class="mb-3">
                                <textarea name="keterangan" type="text" class="form-control editor" id="deskripsi">{{ $quotation->keterangan }}</textarea>
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
