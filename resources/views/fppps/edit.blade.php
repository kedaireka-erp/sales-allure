@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Edit FPPP</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('fppps.update', $fppp->id) }}" method="post" class="dropzone">
                @csrf
                @method('PATCH')
                <div class="intro-y box p-5">
                    {{-- <div>
                        <label for="fppp_no" class="form-label">No. FPPP </label>
                        <input id="fppp_no" type="number" class="form-control w-full" placeholder="Input No FPPP"
                            name="fppp_no" value="{{ $fppp->fppp_no }}">
                    </div> --}}
                    <div class="mt-5">
                        <label for="fppp_type" class="form-label">Tipe FPPP</label>
                        <select data-placeholder="Pilih Tipe FPPP" class="tom-select w-full" id="fppp_type" name="fppp_type"
                            single>
                            <option {{ $fppp->fppp_type == 'produksi' ? 'selected' : '' }} value="produksi">Produksi
                            </option>
                            <option {{ $fppp->fppp_type == 'memo' ? 'selected' : '' }} value="memo">Memo</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="production_phase" class="form-label">Tahap Produksi </label>
                        <input id="production_phase" type="number" class="form-control w-full"
                            placeholder="Input Tahap Produksi" name="production_phase"
                            value="{{ $fppp->production_phase }}">
                    </div>

                    <div class="mt-5">
                        <label for="quotation" class="form-label">No. Quotation</label>
                        <select data-placeholder="Pilih No. Quotation" class="tom-select w-full" id="quotation"
                            name="quotation_id">
                            @foreach ($quotations as $quotation)
                                <option value="{{ $quotation->id }}"
                                    {{ $quotation->id == $fppp->quotation_id ? 'selected' : '' }}>
                                    {{ $quotation->no_quotation }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="order_status" class="form-label">Status Order</label>
                        <select data-placeholder="Pilih Status Order" class="tom-select w-full" id="order_status"
                            name="order_status" single>
                            <option {{ $fppp->order_status == 'baru' ? 'selected' : '' }} value="baru">Baru</option>
                            <option {{ $fppp->order_status == 'tambahan' ? 'selected' : '' }} value="tambahan">Tambahan
                            </option>
                            <option {{ $fppp->order_status == 'revisino' ? 'selected' : '' }} value="revisino">Revisi
                            </option>
                            <option {{ $fppp->order_status == 'lainlain' ? 'selected' : '' }} value="lainlain">Lain-Lain
                            </option>
                        </select>
                    </div>
                    <div class="mt-5" id="fppp_lain">
                        <label for="fppp_lain" class="form-label">No FPPP Yang Direvisi</label>
                        <select data-placeholder="Pilih No FPPP" class="tom-select w-full" name="fppp_revisino" single>
                            @foreach ($fppps as $f)
                                <option {{ $f->fppp_no == $fppp->fppp_revisino ? 'selected' : '' }}
                                    value="{{ $f->fppp_no }}">{{ $f->fppp_no }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-5" id="catatan_status_order">
                        <label for="note" class="mb-2">Keterangan Lain-lain</label>
                        <div class="mt-2">
                            <textarea name="fppp_keterangan" cols="30" rows="10" class="editor ">{!! old('fppp_keterangan', $fppp->fppp_keterangan) !!}</textarea>
                        </div>
                    </div>

                    <div class="mt-5">
                        <label for="production_time" class="form-label">Waktu Produksi (Hari)</label>
                        <input id="production_time" type="number" class="form-control w-full"
                            placeholder="Input Waktu Produksi" name="production_time" value="{{ $fppp->production_time }}">
                    </div>
                    <div class="mt-5">
                        <label for="color" class="form-label">Warna </label>
                        <input id="color" type="text" class="form-control w-full" placeholder="Input Tahap Produksi"
                            name="color" value="{{ $fppp->color }}">
                    </div>
                    <div class="mt-5">
                        <label for="glass" class="form-label">Kaca</label>
                        <select data-placeholder="Pilih Kaca" class="tom-select w-full" id="glass" name="glass"
                            single>
                            <option {{ $fppp->glass == 'included' ? 'selected' : '' }} value="included">Included</option>
                            <option {{ $fppp->glass == 'excluded' ? 'selected' : '' }} value="excluded">Excluded</option>
                            <option {{ $fppp->glass == 'included_excluded' ? 'selected' : '' }} value="included_excluded">
                                Included & Excluded</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="glass_type" class="form-label">Jenis Kaca </label>
                        <input id="glass_type" type="text" class="form-control w-full" placeholder="Input Kaca"
                            name="glass_type" value="{{ $fppp->glass_type }}">
                    </div>
                    <div class="mt-5">
                        <label for="retrieval_deadline" class="form-label">Deadline Pengambilan </label>
                        <input id="retrieval_deadline" type="date" class="form-control w-full"
                            placeholder="Input Tanggal " name="retrieval_deadline"
                            value="{{ $fppp->retrieval_deadline }}">
                    </div>
                    <div class="mt-5">
                        <label for="box_usage" class="form-label">Penggunaan Peti</label>
                        <select data-placeholder="Pilih Penggunaan Peti" class="tom-select w-full" id="box_usage"
                            name="box_usage" single>
                            <option {{ $fppp->box_usage == 'tidak' ? 'selected' : '' }} value="tidak">Tidak</option>
                            <option {{ $fppp->box_usage == 'ya' ? 'selected' : '' }} value="ya">Ya</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="sealant_usage" class="form-label">Penggunaan Sealant</label>
                        <select data-placeholder="Pilih Penggunaan Sealant" class="tom-select w-full" id="sealant_usage"
                            name="sealant_usage" single>
                            <option {{ $fppp->sealant_usage == 'tidak' ? 'selected' : '' }} value="tidak">Tidak</option>
                            <option {{ $fppp->sealant_usage == 'ya' ? 'selected' : '' }} value="ya">Ya</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="delivery_to_expedition" class="form-label">Pengiriman ke Ekspedisi</label>
                        <select data-placeholder="Pilih Pengiriman ke Ekspedisi" class="tom-select w-full"
                            id="delivery_to_expedition" name="delivery_to_expedition" single>
                            <option {{ $fppp->delivery_to_expedition == 'tidak' ? 'selected' : '' }} value="tidak">Tidak
                            </option>
                            <option {{ $fppp->delivery_to_expedition == 'ya' ? 'selected' : '' }} value="ya">Ya
                            </option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="note">Catatan</label>
                        <div class="mt-2">
                            <textarea name="note" id="note" cols="30" rows="10" class="editor">{!! old('note', $fppp->note) !!}</textarea>
                        </div>
                    </div>

                    <div class="mt-5 mb-5">
                        <div class="fallback">
                            <input name="attachment" type="file" multiple />
                        </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                            <div class="text-slate-500">
                                This is just a demo dropzone. Selected files are <span class="font-medium">not</span>
                                actually uploaded.
                            </div>
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
