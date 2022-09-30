<div class="intro-y box overflow-hidden mt-5">
    <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
        <div class="px-5 py-10 sm:px-20 sm:py-20 w-full flex justify-between">
            <span class="font-bold text-primary">LOGO</span>
            <div class="flex flex-col items-center h-full">
                <h1 class="text-primary font-semibold lg:text-xl text-md">QUOTATION</h1>
                <h2 class="text-primary font-semibold lg:text-lg text-base">Quotation No. {{ $quotation->DataQuotation->no_quotation }}</h2>
            </div>
            <div class="mt-1">Kode-kode</div>
        </div>
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
            <div class="mt-5 w-full flex flex-col text-sm lg:text-base gap-y-3">
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Kontak  : {{ $quotation->Contact->name }}
                        
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Company : {{ $quotation->Contact->Company->name }}
                    
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Proyek  : {{ $quotation->DataQuotation->nama_proyek ?? '' }}
                    
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Aplikator   : {{ $quotation->Aplikator->aplikator }}
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Status  : {{ $quotation->Status->name }}
                </div>
                
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Deal Source : {{ $quotation->DealSource->name }}
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Tanggal : {{ $quotation->created_at }}
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    Nominal Penawaran   : @currency($quotation->nominal())
                    
                </div>
            </div>
        </div>
        @if($quotation->status_id == 7)
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-slate-500"><b>Alasan</b></div>
                <div class="mt-1">{{ $quotation->alasan }}</div>
            </div>
        </div>
        @else
        @endif
    </div>
    <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
        <div class="text-center sm:text-left mt-10 sm:mt-0">
            <div class="text-base text-slate-500"><b>Keterangan</b></div>
            <div class="mt-1">{{ $quotation->keterangan }}</div>
        </div>
    </div>
</div>