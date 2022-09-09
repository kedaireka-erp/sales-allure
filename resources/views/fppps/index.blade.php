@extends('../layout/' . $layout)

@section('subhead')
<title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<h1 class="intro-y text-xl font-md mt-10 ">FPPP</h1>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="{{ route('fppps.create') }}" class="btn btn-primary shadow-md mr-2 zoom-in transition">Tambah FPPP</a>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-lucide="plus"></i>
                </span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="hidden md:block mx-auto text-slate-500"></div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-slate-500">
                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">NO. FPPP</th>
                    <th class="whitespace-nowrap">TIPE FPPP</th>
                    <th class="whitespace-nowrap">TAHAP PRODUKSI</th>
                    <th class="whitespace-nowrap">NO. QUOTATION</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fppps as $no => $fppp)
                <tr class="intro-x zoom-in transition">
                    <td>{{ $fppp->fppp_no }}</td>
                    <td>{{ ucfirst($fppp->fppp_type) }}</td>
                    <td class="text-center">{{ $fppp->production_phase }}</td>
                    <td>{{$fppp->Quotation->no_quotation}}</td>
                    <td class="table-report__action w-fit">
                        {{-- <div class="flex justify-center items-center">
                            <a class="flex items-center text-primary mr-3" href="{{ route('fppps.show', $fppp->id) }}">
                                <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Detail
                            </a>
                            <a class="flex items-center mr-3" href="{{ route('fppps.edit', $fppp->id) }}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <form action="{{ route('fppps.destroy', $fppp->id) }}" method="post">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="flex items-center text-danger"><i data-lucide="trash-2"
                                        class="w-4 h-4 mr-1"></i>Hapus</button>
                            </form>
                        </div> --}}
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
                                                        data-lucide="trash-2" class="w-4 h-4 mr-1"></i>Hapus</button>
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
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <nav class="w-full sm:w-auto sm:mr-auto">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="w-4 h-4" data-lucide="chevron-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">...</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="w-4 h-4" data-lucide="chevron-right"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <select class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    <!-- END: Pagination -->
</div>
<!-- BEGIN: Modal Content -->
<div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot
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