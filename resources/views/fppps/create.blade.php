@extends('../layout/' . $layout)

@section('subhead')
<title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Form Tambah FPPP</h2>
</div>
<div class="grid grid-cols-12 gap-10 mt-3">
    <div class="intro-y col-span-12">
        <!-- BEGIN: Form Layout -->
        <form action="{{ route('fppps.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="intro-y box p-5">
                {{-- <div>
                    <label for="fppp_no" class="form-label">No. FPPP </label>
                    <input id="fppp_no" type="number" class="form-control w-full" placeholder="Input No FPPP"
                        name="fppp_no">
                </div> --}}
                <div class="mt-5">
                    <label for="fppp_type" class="form-label">Tipe FPPP</label>
                    <select data-placeholder="Pilih Tipe FPPP" class="tom-select w-full" id="fppp_type" name="fppp_type"
                        single>
                        <option value="produksi" selected>Produksi</option>
                        <option value="memo">Memo</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="production_phase" class="form-label">Tahap Produksi </label>
                    <input id="production_phase" type="number" class="form-control w-full"
                        placeholder="Input Tahap Produksi" name="production_phase">
                </div>
                {{-- <div class="mt-5">
                    <label for="fppp_type" class="form-label">Tipe FPPP</label>
                    <select data-placeholder="Pilih Tipe FPPP" class="tom-select w-full" id="fppp_type" name="fppp_type"
                        single>
                        <option {{ $fppp->fppp_type == 'produksi' ? 'selected' : '' }} value="produksi">Produksi
                        </option>
                        <option {{ $fppp->fppp_type == 'memo' ? 'selected' : '' }} value="memo">Memo</option>
                    </select>
                </div> --}}
                <div class="mt-5">
                    <label for="Quotation" class="form-label">No. Quotation</label>
                    <select data-placeholder="Pilih No. Quotation" class="tom-select w-full" id="quotation"
                        name="quotation_id">
                        @foreach ($quotations as $quotation)
                        @isset($quo)
                        <option {{ $quo->id == $quotation->id ? 'selected' : '' }} value="{{ $quotation->id }}">
                            {{ $quotation->no_quotation ?? '' }}</option>
                        @endisset
                        <option value="{{ $quotation->id }}">
                            {{ $quotation->no_quotation ?? '' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-5">
                    <label for="order_status" class="form-label">Status Order</label>
                    <select data-placeholder="Pilih Status Order" class="tom-select w-full" id="order_status"
                        name="order_status" single>
                        <option value="baru" selected>Baru</option>
                        <option value="tambahan">Tambahan</option>
                        <option value="revisino">Revisi dari FPPP No.</option>
                        <option value="lainlain">Lain-lain</option>
                    </select>
                </div>
                <div class="mt-5 hidden" id="fppp_lain">
                    <label for="fppp_revisino" class="form-label">No FPPP Yang Direvisi</label>
                    <select data-placeholder="Pilih No FPPP" class="tom-select w-full" name="fppp_revisino" single>
                        @foreach ($fppps as $fppp)
                        <option value="">PILIH NO FPPP</option>
                        <option value="{{ $fppp->fppp_no }}">{{ $fppp->fppp_no }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-5 hidden" id="catatan_status_order">
                    <label for="note" class="mb-2">Keterangan Lain-lain</label>
                    <div class="mt-2">
                        <textarea name="fppp_keterangan" cols="30" rows="10" class="editor "></textarea>
                    </div>
                </div>
                <div class="mt-5">
                    <label for="production_time" class="form-label">Waktu Produksi (Hari)</label>
                    <input id="production_time" type="number" class="form-control w-full"
                        placeholder="Input Waktu Produksi" name="production_time">
                </div>
                <div class="mt-5">
                    <label for="color" class="form-label">Warna </label>
                    <input id="color" type="text" class="form-control w-full" placeholder="Input Warna" name="color">
                </div>
                <div class="mt-5">
                    <label for="glass" class="form-label">Kaca</label>
                    <select data-placeholder="Pilih Kaca" class="tom-select w-full" id="glass" name="glass" single>
                        <option value="included" selected>Included</option>
                        <option value="excluded">Excluded</option>
                        <option value="included_excluded">Included & Excluded</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="glass_type" class="form-label">Jenis Kaca </label>
                    <input id="glass_type" type="text" class="form-control w-full" placeholder="Input Jenis Kaca"
                        name="glass_type">
                </div>
                <div class="mt-5">
                    <label for="retrieval_deadline" class="form-label">Deadline Pengambilan </label>
                    <input id="retrieval_deadline" type="date" class="form-control w-full"
                        placeholder="Input Deadline Pengambilan" name="retrieval_deadline">
                </div>
                <div class="mt-5">
                    <label for="box_usage" class="form-label">Penggunaan Peti</label>
                    <select data-placeholder="Pilih Penggunaan Peti" class="tom-select w-full" id="box_usage"
                        name="box_usage" single>
                        <option value="0" selected>Tidak</option>
                        <option value="1">Ya</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="sealant_usage" class="form-label">Penggunaan Sealant</label>
                    <select data-placeholder="Pilih Penggunaan Sealant" class="tom-select w-full" id="sealant_usage"
                        name="sealant_usage" single>
                        <option value="0" selected>Tidak</option>
                        <option value="1">Ya</option>
                    </select>
                </div>
                <div class="mt-5">
                    <label for="delivery_to_expedition" class="form-label">Pengiriman ke Ekspedisi</label>
                    <select data-placeholder="Pilih Pengiriman ke Ekspedisi" class="tom-select w-full"
                        id="delivery_to_expedition" name="delivery_to_expedition" single>
                        <option value="0" selected>Tidak</option>
                        <option value="1">Ya</option>
                    </select>
                </div>
                <div class="mt-5" id="note">
                    <label for="note" class="mb-2">Note</label>
                    <div class="mt-2">
                        <textarea name="note" cols="30" rows="10" class="editor "></textarea>
                    </div>
                </div>


                <div class="mt-5">
                    <label for="filepond" class="form-label">Attachments </label>
                    <input data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3" id="filepond"
                        type="file" class="form-control w-full " name="file" multiple>
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