@extends('../layout/' . $layout)

@section('subhead')
    <title>Invoice Layout - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Detail FPPP</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Download</button>
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
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-primary font-semibold text-3xl" align="center">FORM PAKET PERMINTAAN PRODUKSI</div>
                <div class="mt-2 text-xl" align="center">
                    No. <span class="font-md">{{ $fppp->fppp_no }}</span>
                </div>
                <div class="text-xl" align="center">
                    Mockup/Produksi Tahap <span class="font-md">{{ $fppp->production_phase }}</span>
                </div>
                <div class="mt-5 text-lg">
                    Tanggal                    : <span class="font-md">{{\Carbon\Carbon::parse($fppp->created_at)->format("d F Y")}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Divisi                     : <span class="font-md">ASTRAL</span>
                </div>
                <div class="mt-2 text-lg">
                    Nama Aplikator             : <span class="font-md">???</span>
                </div>
                <div class="mt-2 text-lg">
                    Sales/Site Manager         : <span class="font-md">???</span>
                </div>
                <div class="mt-2 text-lg">
                    Nama Proyek                : <span class="font-md">???</span>
                </div>
                <div class="mt-2 text-lg">
                    Status Order               : <span class="font-md">{{$fppp->order_status}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Waktu Produksi             : <span class="font-md">{{$fppp->production_time}} Hari</span>
                </div>
                <br>
                <div class="mt-2 text-lg">
                    <b>PAKET DATA PRODUKSI</b><span class="font-md"></span>
                </div>
                <div class="mt-2 text-lg">
                    Gambar                     : <span class="font-md">??? Lembar</span>
                </div>
                <div class="mt-2 text-lg">
                    Kode Item                  : <span class="font-md"><b>#TERLAMPIR</b></span>
                </div>
                <div class="mt-2 text-lg">
                    Warna                      : <span class="font-md">{{ucfirst($fppp->color)}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Kaca                       : <span class="font-md">{{ucfirst($fppp->glass)}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Jenis Kaca                 : <span class="font-md">{{ucfirst($fppp->glass_type)}}</span>
                </div>
                <br>
                <div class="mt-2 text-lg">
                    <b>PENGIRIMAN</b><span class="font-md"></span>
                </div>
                <div class="mt-2 text-lg">
                    Deadline Pengiriman        : <span class="font-md">{{\Carbon\Carbon::parse($fppp->retrieval_deadline)->format("d F Y")}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Penggunaan Peti            : <span class="font-md">{{ucfirst($fppp->box_usage)}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Penggunaan Sealant         : <span class="font-md">{{ucfirst($fppp->sealant_usage)}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Pengiriman ke Ekspedisi    : <span class="font-md">{{ucfirst($fppp->delivery_to_expedition)}}</span>
                </div>
                <div class="mt-2 text-lg">
                    Note : <span class="font-md">{{$fppp->note}}</span>
                </div>
            </div>  
            {{-- <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                <div>
                    <div class="text-base text-slate-500">Client Details</div>
                    <div class="text-lg font-medium text-primary mt-2">Arnold Schwarzenegger</div>
                    <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                    <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
                </div>
                <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                    <div class="text-base text-slate-500">Payment to</div>
                    <div class="text-lg font-medium text-primary mt-2">Left4code</div>
                    <div class="mt-1">left4code@gmail.com</div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- END: Invoice -->
@endsection
