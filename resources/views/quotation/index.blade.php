@extends('../layout/' . $layout)

@section('subhead')
<title>Sales - Quotation</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Quotation</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0 gap-2">
        <div class="dropdown ml-auto">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center mr-2">
                    <i class="w-4 h-4" data-lucide="sliders"></i>
                </span>
                Filter
            </button>
            <div class="dropdown-menu w-60">
                <ul class="dropdown-content">
                    <form class="p-2" action="{{ route('quotation.index') }}">
                        <div>
                            <div class="text-xs">Status</div>
                            <select class="tom-select mt-2" id="status_id" name="status">
                                <option selected>Status</option>
                                @foreach ($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="mt-3">
                            <div class="text-xs">Filter lain</div>
                            <input type="text" class="form-control mt-2 flex-1" placeholder="example@gmail.com" />
                        </div> --}}
                        <div class="flex items-center mt-3">
                            <button data-dismiss="dropdown" class="btn btn-secondary w-32 ml-auto"
                                id="close-filter">Close</button>
                            <button class="btn btn-primary w-32 ml-2" type="submit">Apply</button>
                        </div>
                    </form>
                </ul>
            </div>
        </div>

        {{-- <a href="{{ route('quotation.create') }}" class="btn btn-primary shadow-md">
            <span class="text">Add Quotation</span>
        </a>

        <div class="dropdown ml-auto">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-lucide="plus"></i>
                </span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="file-plus" class="w-4 h-4 mr-2"></i> New Category
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="users" class="w-4 h-4 mr-2"></i> New Group
                        </a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="intro-y p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form method="get" action="{{ route('quotation.index') }}" class="xl:flex sm:mr-auto">
            @csrf
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0"
                    placeholder="Search..." name="search" value="{{ request('search') }}">
            </div>
            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="submit"
                    class="btn btn-primary w-full sm:w-16">Search</button>
                <a href="{{ route('quotation.index') }}" type="submit"
                    class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</a>
            </div>
        </form>
        <div class="flex mt-5 gap-0 sm:mt-0">
            {{-- <button id="tabulator-print" class="btn btn-primary w-1/2 sm:w-auto mr-2">
                <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
            </button> --}}
            <div class="dropdown w-1/2 sm:w-auto">
                <button class="dropdown-toggle btn btn-primary w-full sm:w-auto" aria-expanded="false"
                    data-tw-toggle="dropdown">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down"
                        class="w-4 h-4 ml-auto sm:ml-2"></i>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        {{-- <li>
                            <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV
                            </a>
                        </li>
                        <li>
                            <a id="tabulator-export-json" href="javascript:;" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON
                            </a>
                        </li> --}}
                        <li>
                            <a id="tabulator-export-xlsx" href="{{ route('quotation.export') }}" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                            </a>
                        </li>
                        {{-- <li>
                            <a id="tabulator-export-html" href="javascript:;" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>


    <div class="overflow-x-auto scrollbar-hidden">
        <div class="mt-5 table-report table-report--tabulator">
            <div class="intro-y col-span-12 overflow-auto">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th CLASS="whitespace-nowrap text-primary">NO.</th>
                            <th class="whitespace-nowrap text-primary">@sortablelink('DataQuotation.no_quotation', "NO.
                                QUOTATION")</th>
                            <th class="text-center whitespace-nowrap text-primary">@sortablelink('Status.name',
                                "STATUS")</th>
                            <th class="text-center whitespace-nowrap text-primary">@sortablelink('DataQuotation.no_quotation',"PENAWARAN")
                            </th>
                            <th class="whitespace-nowrap text-primary">@sortablelink('DataQuotation.nama_proyek', "PROYEK")</th>
                            <th class="whitespace-nowrap text-primary">@sortablelink('Aplikator.aplikator', "APLIKATOR")</th>
                            <th class="text-center whitespace-nowrap text-primary">ACTIONS</th>
                        </tr>
                    </thead>@foreach ($quotations as $key => $quotation)
                    {{-- @if($quotation->count()) --}}
                    <tbody>

                        <tr class="intro-x zoom-in transition">
                            <td class="w-10">
                                <div class="flex">
                                    <div class="font-medium whitespace-nowrap">
                                        {{ $key + $quotations->firstItem() }}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">{{ $quotation->DataQuotation->no_quotation ??
                                    ''}}</div>
                            </td>
                            <td class="text-center">
                                <div class="dropdown ml-auto">
                                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false"
                                        data-tw-toggle="dropdown" id="dropdown-status">
                                        <span class="w-5 h-5 flex items-center justify-center mr-2">
                                            <i class="w-4 h-4" data-lucide="edit"></i>
                                        </span>
                                        {{ $quotation->status->name }}
                                    </button>
                                    <div class="dropdown-menu w-45">
                                        <ul class="dropdown-content w-fit">
                                            <form class="p-2" action="{{ route('quotation.edit.status', $quotation) }}"
                                                method="POST" enctype="multipart/form-data" class="w-fit form-status">
                                                @csrf
                                                @method('patch')
                                                <div class="text-xs">Status</div>
                                                <select class="tom-select mt-2" id="status_id" name="status_id">
                                                    @foreach ($statuses as $status)
                                                    <option value="{{ $status->id }}" {{ $status->id == $quotation->status_id ? 'selected' : '' }}>{{ $status->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="mt-2" id="lost-reason">
                                                    <span class="text-xs">Lost Reason</span>
                                                    <textarea name="alasan" id="alasan_lost" cols="30" rows="7"
                                                        placeholder="Alasan Lost">{{ $quotation->alasan }}</textarea>
                                                </div>
                                                <div class="flex items-center mt-3">
                                                    <button class="btn btn-primary w-32 ml-2" type="submit">Ubah
                                                        Status</button>
                                                </div>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                @currency($quotation->nominal)
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">{{ $quotation->DataQuotation->nama_proyek ?
                                    Str::limit($quotation->DataQuotation->nama_proyek, 15) : '' }}
                                </div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">{{ $quotation->Aplikator->aplikator }}
                                </div>
                            </td>
                            <td class="table-report__action w-fit">

                                <div class="dropdown flex justify-center">
                                    <button class="dropdown-toggle btn px-2 box rounded-full" aria-expanded="false"
                                        data-tw-toggle="dropdown">
                                        <span class="w-5 h-5 flex items-center justify-center text-primary">
                                            <i data-lucide="settings" class="block mx-auto"></i>
                                        </span>
                                    </button>
                                    <div class="dropdown-menu w-40">
                                        <ul class="dropdown-content">
                                            <li>
                                                <h6 class="dropdown-header">Export Options</h6>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a href="{{ route('quotations.pdf', $quotation) }}"
                                                    class="dropdown-item">
                                                    <i data-lucide="activity" class="w-4 h-4 mr-2"></i> PDF
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-lucide="layout" class="w-4 h-4 mr-2"></i> EXCEL
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> PRINT
                                                </a>
                                            </li> --}}
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <div class="flex gap-2 p-1 flex-wrap">
                                                    {{-- <a href="{{ route('quotation.edit', $quotation) }}"
                                                        class="flex items-center text-success mr-3">
                                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>Edit
                                                    </a> --}}
                                                    {{-- <form action="{{ route('quotation.destroy', $quotation) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('Delete')
                                                        <button type="submit" class="flex items-center text-danger"><i
                                                                data-lucide="trash-2"
                                                                class="w-4 h-4 mr-1"></i>Hapus</button>
                                                    </form> --}}
                                                    <a class="flex items-center text-primary mr-3"
                                                        href="{{ route('quotation.show', $quotation) }}">
                                                        <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Detail
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    {{-- @elseif ($quotation->status_id !== request(status))
                    Data dengan No. Quotation berikut tidak ditemukan --}}
                    {{-- @else
                    <p class="text-center fs-4">Data Tidak Ditemukan.</p>
                    @endif --}}
                    @endforeach
                </table>
            </div>
            {{ $quotations->appends(\Request::except('page'))->links('components.custom-pagination') }}
        </div>
    </div>

</div>
<!-- END: HTML Table Data -->
@endsection

@section('script')
<script>
    // const button = document.querySelector("#close-filter");
    // const dropdown = tailwind.Dropdown.getOrCreateInstance(button);
    // dropdown.hide();

    //hide all lost reason in each row with jquery
    $(document).ready(function () {
        $('tr td').each(function () {
            $(this).find('#lost-reason').hide();
        });

        
        $('tr td').click(function () {
            //get a status id in each row
            var status = $(this).find('#status_id').find('option:selected').text();
            //if status id is 3 (lost) then show lost reason
            if (status == 'Lost') {
                $(this).find('#lost-reason').show();
            }           
        });

        //if lost is selected then show lost reason
        $(document).on('change', '#status_id', function () {
            var status = $(this).find('option:selected').text();
            if (status == 'Lost') {
                
                $(this).parent().find('#lost-reason').show();
            } else {
               
                $(this).parent().find('#lost-reason').hide();
            }
        });
    
    });

    //document ready
    // $(document).on('change', '#status_id', function () {
        
    //     //change status
    //         const selected = $( this ).find('option:selected').text();

    //         //show lost reason
    //         if (selected == "Lost") {
    //             //only show the element on the selected row
    //             $(this).closest(".form-status").find("#lost-reason").show();
    //         } else {
    //             $('#lost-reason').hide();
    //         }
     
    // });
    
    
    
    
</script>
@endsection