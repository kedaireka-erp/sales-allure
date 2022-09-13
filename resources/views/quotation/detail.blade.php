@extends('../layout/' . $layout)

@section('subhead')
    <title>Quotation - Detail</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Detail Quotation</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{ route('quotation.fppp', ['quo' => $quotation]) }}" class="btn btn-primary shadow-md mr-2">
                <span class="text">Buat FPPP</span>
            </a>
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
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
            <div class="px-5 py-10 sm:px-20 sm:py-20 w-full flex justify-between">
                <span class="font-bold text-primary">LOGO</span>
                <div class="flex flex-col items-center h-full">
                    <h1 class="text-primary font-semibold lg:text-xl text-md">QUOTATION</h1>
                    <h2 class="text-primary font-semibold lg:text-lg text-base">Quotation No. {{ $quotation->no_quotation }}</h2>
                </div>
                <div class="mt-1">Kode-kode</div>
            </div>
            <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                <div class="mt-5 w-full flex flex-col text-sm lg:text-base gap-y-3">
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-slate-500">ID Penginput </div>
                            <div class="text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="font-semibold text-slate-500">12345678</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 lg:w-full">
                        <div class="w-full  max-w-1/2 flex flex-row justify-between">
                            <div class="text-slate-500">Kode Aplikator</div>
                            <div class="text-slate-500">:</div>
                        </div>
                        <div class="w-full">
                            <div class="font-semibold text-slate-500">APP1234</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-slate-500">ID Currency</div>
                            <div class="text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="font-semibold text-slate-500">192/893/APPPP/1293</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-slate-500">Nama Proyek</div>
                            <div class="text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="font-semibold text-slate-500">Proyek Gajah Satwa</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-slate-500">Nama Owner</div>
                            <div class="text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="font-semibold text-slate-500">{{ $fakers[0]['users'][0]['name'] }}</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-slate-500">Kontak</div>
                            <div class="text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="font-semibold text-slate-500">{{ $fakers[0]['users'][1]['name'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 w-full flex flex-col gap-y-3 text-sm lg:text-base">
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-base text-slate-500">No. Quotation Customer</div>
                            <div class="text-base text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="text-base font-semibold text-slate-500">123/123/ASTRAL/321</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-base text-slate-500">Alamat Proyek</div>
                            <div class="text-base text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="text-base font-semibold text-slate-500">Jl. Baru</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-base text-slate-500">Status </div>
                            <div class="text-base text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="text-base font-semibold text-slate-500">{{ $quotation->Status->name }}</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-base text-slate-500">Deal Source </div>
                            <div class="text-base text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="text-base font-semibold text-slate-500">{{ $quotation->DealSource->name }}</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-base text-slate-500">Tanggal </div>
                            <div class="text-base text-slate-500">:</div>
                        </div>
                        <div class=" w-full">
                            <div class="text-base font-semibold text-slate-500">12 Desember 2020</div>
                        </div>
                    </div>
                    <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                        <div class="w-full max-w-1/2 flex flex-row justify-between">
                            <div class="text-base text-slate-500">Revisi ke- 7</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                <div class="text-center sm:text-left mt-10 sm:mt-0">
                    <div class="text-base text-slate-500"><b>Alasan</b></div>
                    <div class="mt-1">Lorem Ipsum is simply dummy text of the printing</div>
                </div>
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
                <div class="text-base text-slate-500"><b>Keterangan</b></div>
                <div class="mt-1">{{ $quotation->keterangan }}</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->
@endsection
