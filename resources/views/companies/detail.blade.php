@extends('../layout/' . $layout)

@section('subhead')
    <title>Invoice Layout - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Detail Company</h2>
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
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-primary font-semibold text-3xl">Company</div>
                <div class="mt-2">
                    {{ $company->name }}
                </div>
            </div>
            {{-- <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20"> --}}
              
                {{-- <div>
                    
                    <div class="text-base text-slate-500">Company Details</div>
                    <div class="text-lg font-medium text-primary mt-2">{{ $company->name }}</div>
                    <div class="mt-1">{{ $company->postal_code }}</div>
                    <div class="mt-1">{{ $company->number_of_employees }}</div>
                    <div class="mt-1">{{ $company->annual_revenue }}</div>
                    <div class="mt-1">{{ $company->time_zone }}</div>
                    <div class="mt-1">{{ $company->linkedin_company }}</div>
                    
                </div>
                 --}}
                {{-- <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                    <div class="text-base text-slate-500">company Owner</div>
                    <div class="text-lg font-medium text-primary mt-2">612 564 738 928</div>
                </div> --}}
            {{-- </div> --}}
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">PHONE NUMBER</th>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">POSTAL CODE</th>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">NUMBER OF EMPLOYEES</th>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">ANNUAL REVENUE</th>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">TIME ZONE</th>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">LINKEDIN COMPANY PAGE</th>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="mt-1">{{ $company->phone_number }}</div>
                            </td>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="mt-1">{{ $company->postal_code }}</div>
                            </td>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="mt-1">{{ $company->number_of_employees }}</div>
                            </td>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="mt-1">@currency($company->annual_revenue)</div>
                            </td>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="mt-1">{{ $company->time_zone }}</div>
                            </td>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="mt-1">{{ $company->linkedin_company }}</div>
                            </td>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="mt-1">{!! $company->description !!}</div>
                            </td>    
                                                   
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            {{-- <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-slate-500">Lead Source</div>
                <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div> --}}
            {{-- <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Lead Status</div>
                <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                <div class="mt-1">Taxes included</div>
            </div> --}}
            {{-- <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Lead Interest 1</div>
                <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                <div class="mt-1">Taxes included</div>
            </div> --}}
            {{-- <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Lead Priority</div>
                <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                <div class="mt-1">Taxes included</div>
            </div> --}}
        </div>
    </div>
    <!-- END: Invoice -->
@endsection