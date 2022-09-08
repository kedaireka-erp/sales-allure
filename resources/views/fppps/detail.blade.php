@extends('../layout/' . $layout)

@section('subhead')
<title>Invoice Layout - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Detail FPPP</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
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
                        <a href="" class="dropdown-item">
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
                <h1 class="text-primary font-semibold text-xl">FORM PAKET PERMINTAAN PRODUKSI</h1>
                <h2 class="text-primary font-semibold text-lg">No: {{ $fppp->fppp_no }}</h2>
                <p class="text-primary  text-lg">Mockup/Produksi Tahap {{ $fppp->production_phase }}</p>
            </div>
            <div class="mt-1">Kode-Kode</div>
        </div>
        <div class="mt-5 w-full flex flex-col gap-y-3">
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Tanggal </div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">{{\Carbon\Carbon::parse($fppp->created_at)->format("d F Y")}}</div>
                </div>
            </div>
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Divisi </div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">ASTRAL</div>
                </div>
            </div>
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Nama Aplikator </div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">PT KENCANA MIRAE INDUSTRI</div>
                </div>
            </div>
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Nama Proyek </div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">BINA BAKTI OFFICE TAHAP 2</div>
                </div>
            </div>
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full mb-3">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Alamat Proyek </div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">JAKARTA</div>
                </div>
            </div>
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Sales/Site Manager </div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">IBU AGUSTIN</div>
                </div>
            </div>
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Status Order</div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">{{$fppp->order_status}}</div>
                </div>
            </div>
            <div class="flex flex-col gap-x-2 lg:flex-row px-5 sm:px-20 w-full">
                <div class="w-1/3 max-w-1/2 flex flex-row justify-between">
                    <div class="text-base text-slate-500">Waktu Produksi </div>
                    <div class="text-base text-slate-500">:</div>
                </div>
                <div class=" w-full">
                    <div class="text-base font-semibold text-slate-500">{{$fppp->production_time}} Hari</div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="px-5 sm:px-16 py-10 sm:py-20">
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
    </div>
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
    </div>
</div>
<!-- END: Invoice -->
@endsection