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
                        <div class="text-slate-500">Kontak</div>
                        <div class="text-slate-500">:</div>
                    </div>
                    <div class=" w-full">
                        <div class="font-semibold text-slate-500">{{ $quotation->Contact->name }}</div>
                    </div>
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    <div class="w-full max-w-1/2 flex flex-row justify-between">
                        <div class="text-base text-slate-500">Company </div>
                        <div class="text-base text-slate-500">:</div>
                    </div>
                    <div class=" w-full">
                        <div class="text-base font-semibold text-slate-500">{{ $quotation->Contact->Company->name }}</div>
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
                        <div class="text-base font-semibold text-slate-500">{{ $quotation->created_at }}</div>
                    </div>
                </div>
                <div class="flex gap-x-2 flex-row px-5 sm:px-20 w-full">
                    <div class="w-full max-w-1/2 flex flex-row justify-between">
                        <div class="text-base text-slate-500">Nominal Penawaran </div>
                        <div class="text-base text-slate-500">:</div>
                    </div>
                    <div class=" w-full">
                        <div class="text-base font-semibold text-slate-500">@currency($quotation->nominal())</div>
                    </div>
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