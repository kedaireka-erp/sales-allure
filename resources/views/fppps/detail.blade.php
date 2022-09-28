@extends('../layout/' . $layout)

@section('subhead')
<title>Invoice Layout - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Detail FPPP</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="{{ route('fppps.edit', $fppp) }}" class="btn btn-primary shadow-md mr-2">Edit</a>
        <button class="btn btn-primary shadow-md mr-2">Print</button>
        <div class="dropdown ml-auto sm:ml-0">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-lucide="plus"></i>
                </span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export Word
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fppps.topdf', $fppp) }}" class="dropdown-item">
                            <i data-lucide="file" class="w-4 h-4 mr-2"></i> Export PDF
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN: Invoice -->
<div class=" box overflow-hidden mt-5 w-full">
    <div class=" w-full border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
        <div class="px-5 py-10 sm:px-20 sm:py-20 w-full flex justify-between">
            <span class="font-bold text-primary">LOGO</span>
            <div class="flex flex-col items-center h-full">
                <h1 class="text-primary font-semibold text-lg lg:text-xl">FORM PAKET PERMINTAAN PRODUKSI</h1>
                <h2 class="text-primary font-semibold text-md lg:text-lg">No: {{ $fppp->fppp_no }}</h2>
                <p class="text-primary  text-md lg:text-lg">Mockup/Produksi Tahap {{ $fppp->production_phase }}</p>
            </div>
            <div class="mt-1">Kode-Kode</div>
        </div>
        <div class="mt-1 w-full flex flex-col gap-y-3">
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">No. Quotation </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">{{$fppp->quotation->no_quotation}}</div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Tanggal </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">
                        {{ \Carbon\Carbon::parse($fppp->created_at)->translatedFormat('d F Y') }}</div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Divisi </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">ASTRAL</div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Nama Aplikator </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">{{$fppp->quotation->Aplikator->aplikator}}</div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Nama Proyek </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">(CONTOH) BINA BAKTI OFFICE TAHAP 2</div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full ">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Alamat Proyek </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">(CONTOH) JAKARTA</div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Sales/Site Manager </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">{{$fppp->user->name ?? ""}}</div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Status Order</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    @if ($fppp->order_status == 'baru')
                    <div class=" font-semibold text-slate-500" {{ $fppp->order_status == 'baru' ? 'selected' : '' }}
                        value="baru">Baru</div>
                    @endif
                    @if ($fppp->order_status == 'tambahan')
                    <div class=" font-semibold text-slate-500" {{ $fppp->order_status == 'tambahan' ? 'selected' : '' }}
                        value="tambahan">Tambahan</div>
                    @endif
                    @if ($fppp->order_status == 'revisino')
                    <div class=" font-semibold text-slate-500" {{ $fppp->order_status == 'revisino' ? 'selected' : '' }}
                        value="revisino">Revisi dari FPPP No. {{ $fppp->fppp_revisino }}</div>
                    @endif
                    @if ($fppp->order_status == 'lainlain')
                    <div class=" font-semibold text-slate-500" {{ $fppp->order_status == 'lainlain' ? 'selected' : '' }}
                        value="lainlain">Lain-lain : {!! $fppp->fppp_keterangan !!}</div>

                    @endif
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Waktu Produksi </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">{{ $fppp->production_time }} Hari</div>
                </div>
            </div>
            <hr>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <b>PAKET DATA PRODUKSI</b>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Warna</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">{{ $fppp->color }} </div>
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Kaca </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    @if ($fppp->glass == 'included')
                    <div class=" font-semibold text-slate-500" {{ $fppp->glass == 'included' ? 'selected' : '' }}
                        value="included">Included</div>
                    @endif
                    @if ($fppp->glass == 'excluded')
                    <div class=" font-semibold text-slate-500" {{ $fppp->glass == 'excluded' ? 'selected' : '' }}
                        value="excluded">Excluded</div>
                    @endif
                    @if ($fppp->glass == 'included_excluded')
                    <div class=" font-semibold text-slate-500" {{ $fppp->glass == 'included_excluded' ? 'selected' : ''
                        }}
                        value="included_excluded">Included & Excluded</div>
                    @endif
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Jenis Kaca</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">{{ $fppp->glass_type }}</div>
                </div>
            </div>
            <hr>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <b>PENGIRIMAN</b>
            </div>

            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Deadline Pengambilan </div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">
                        {{ \Carbon\Carbon::parse($fppp->retrival_deadline)->translatedFormat('d F Y') }}</div>

                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Penggunaan Peti</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    @if ($fppp->box_usage == '0')
                    <div class=" font-semibold text-slate-500" {{ $fppp->box_usage == '0' ? 'selected' : '' }}
                        value="0">Tidak</div>
                    @else
                    <div class=" font-semibold text-slate-500" {{ $fppp->box_usage == '1' ? 'selected' : '' }}
                        value="1">Ya</div>
                    @endif
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Penggunaan Sealant</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    @if ($fppp->sealant_usage == '0')
                    <div class=" font-semibold text-slate-500" {{ $fppp->sealant_usage == '0' ? 'selected' : '' }}
                        value="0">Tidak</div>
                    @else
                    <div class=" font-semibold text-slate-500" {{ $fppp->sealant_usage == '1' ? 'selected' : '' }}
                        value="1">Ya</div>
                    @endif
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Pengiriman ke Ekspedisi</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    @if ($fppp->delivery_to_expedition == '0')
                    <div class=" font-semibold text-slate-500" {{ $fppp->delivery_to_expedition == '0' ? 'selected' : ''
                        }}
                        value="0">Tidak</div>
                    @else
                    <div class=" font-semibold text-slate-500" {{ $fppp->delivery_to_expedition == '1' ? 'selected' : ''
                        }}
                        value="1">Ya</div>
                    @endif
                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Note</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">

                    <div class=" font-semibold text-slate-500">{!! $fppp->note !!}</div>

                </div>
            </div>
            <div class="flex gap-x-2 text-sm lg:text-base flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class=" text-slate-500">Attachment</div>
                    <div class=" text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class=" font-semibold text-slate-500">(GAMBAR GAMBAR)</div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    {{-- <div class="px-5 sm:px-16 py-10 sm:py-20">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                        <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">QTY</th>
                        <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">PRICE</th>
                        <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-b dark:border-darkmode-400">
                            <div class="font-medium whitespace-nowrap">Midone HTML Admin Template</div>
                            <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32">2</td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$50</td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-darkmode-400">
                            <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                            <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                    </tr>
                    <tr>
                        <td class="border-b dark:border-darkmode-400">
                            <div class="font-medium whitespace-nowrap">React Admin Template</div>
                            <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                        <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                            <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                        </td>
                        <td class="text-right w-32">3</td>
                        <td class="text-right w-32">$25</td>
                        <td class="text-right w-32 font-medium">$75</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>--}}
    {{--
    <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
        <div class="text-center sm:text-left mt-10 sm:mt-0">
            <div class="text-base text-slate-500">Bank Transfer</div>
            <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
            <div class="mt-1">Bank Account : 098347234832</div>
            <div class="mt-1">Code : LFT133243</div>
        </div>
        <div class="text-center sm:text-right sm:ml-auto">
            <div class="text-base text-slate-500">Total Amount</div>
            <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
            <div class="mt-1">Taxes included</div>
        </div>
    </div> --}}
</div>
<!-- END: Invoice -->
<!-- BEGIN: Uplaod Product -->
<div class="intro-y box p-5 mt-3">
    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
            Attachments
        </div>
        <div class="mt-5">
            <div class="flex items-center text-slate-500">
                <span><i data-lucide="lightbulb" class="w-5 h-5 text-warning"></i></span>
                <div class="ml-2">
                    <span class="mr-1">Avoid selling counterfeit products / violating Intellectual Property Rights, so
                        that your products are not deleted.</span>
                </div>
            </div>
            @if ($fppp->files->first())
            <div class="form-inline items-start flex-col xl:flex-row mt-10">
                <div class="w-full mt-3 xl:mt-0 flex-1 border-2 border-dashed dark:border-darkmode-400 rounded-md py-4">
                    <div class="grid grid-cols-10 gap-5 pl-4 pr-5">
                        @foreach ($fppp->files as $file)
                        <div class="col-span-5 md:col-span-2 h-28 relative image-fit cursor-pointer zoom-in">
                           <img class="rounded-md" src="{{ asset('storage/' . $file->path) }}" alt="{{ $file->name }}" srcset="">
                            <a href="{{ route('fppps.attachment.download', $file) }}" title="Download this file?"
                                class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-success right-0 top-0 -mr-2 -mt-2">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @else

            @endif
        </div>
    </div>
</div>
<!-- END: Uplaod Product -->
@endsection