@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FPPP</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{ route('fppps.create') }}" class="btn btn-primary shadow-md mr-2">
                <span class="text">Tambah FPPP</span>
            </a>
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
            </div>
        </div>
    </div>

    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">

                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                    <input id="tabulator-html-filter-value" type="text"
                        class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search...">
                </div>
                <div class="mt-2 xl:mt-0">
                    <button id="tabulator-html-filter-go" type="button"
                        class="btn btn-primary w-full sm:w-16">Search</button>
                    <button id="tabulator-html-filter-reset" type="button"
                        class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
                </div>
            </form>
            <div class="flex mt-5 sm:mt-0">
                <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
                    <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                </button>
                <div class="dropdown w-1/2 sm:w-auto">
                    <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false"
                        data-tw-toggle="dropdown">
                        <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export <i data-lucide="chevron-down"
                            class="w-4 h-4 ml-auto sm:ml-2"></i>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export CSV
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-json" href="javascript:;" class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export JSON
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                </a>
                            </li>
                            <li>
                                <a id="tabulator-export-html" href="javascript:;" class="dropdown-item">
                                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export HTML
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th CLASS="whitespace-nowrap text-primary">NO.</th>
                        <th class="whitespace-nowrap text-primary">NO. FPPP</th>
                        <th class="text-center whitespace-nowrap text-primary">TIPE FPPP</th>
                        <th class="text-center whitespace-nowrap text-primary">TAHAP PRODUKSI</th>
                        <th class="text-center whitespace-nowrap text-primary">NO. QUOTATION</th>
                        <th class="text-center whitespace-nowrap text-primary">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fppps as $no => $fppp)
                        <tr class="intro-x zoom-in transition">
                            <td class="w-10">
                                <div class="flex">
                                    <div class="font-medium whitespace-nowrap">{{ $no + $fppps->firstItem() }}</div>
                                </div>
                            </td>
                            <td class="text-base">{{ $fppp->fppp_no }}</td>
                            <td class="text-base text-center">{{ ucfirst($fppp->fppp_type) }}</td>
                            <td class="text-base text-center">{{ $fppp->production_phase }}</td>

                            <td class="text-base text-center">{{ $fppp->Quotation->no_quotation ?? '' }}</td>
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
                                                <a href="" class="dropdown-item">
                                                    <i data-lucide="activity" class="w-4 h-4 mr-2"></i> PDF
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-lucide="layout" class="w-4 h-4 mr-2"></i> EXCEL
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> PRINT
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <div class="flex gap-2 p-1 flex-wrap">
                                                    <a class="flex items-center mr-3 text-success"
                                                        href="{{ route('fppps.edit', $fppp->id) }}">
                                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                    </a>
                                                    <form action="{{ route('fppps.destroy', $fppp->id) }}" method="post">
                                                        @csrf
                                                        @method('Delete')
                                                        <button type="submit" class="flex items-center text-danger"><i
                                                                data-lucide="trash-2"
                                                                class="w-4 h-4 mr-1"></i>Hapus</button>
                                                    </form>

                                                    <a class="flex items-center text-primary mr-3"
                                                        href="{{ route('fppps.show', $fppp->id) }}">
                                                        <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Detail
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        {{ $fppps->links('components.custom-pagination') }}
    </div>
    <!-- BEGIN: Modal Content -->
    <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process
                            cannot
                            be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->
@endsection
