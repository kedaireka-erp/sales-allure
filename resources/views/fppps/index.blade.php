@extends('../layout/' . $layout)

@section('subhead')
<title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<h1 class="intro-y text-xl font-md mt-10 ">FPPP</h1>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="{{ route('fppps.create') }}" class="btn btn-primary shadow-md mr-2">Tambah FPPP</a>
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
                    <th class="text-center whitespace-nowrap">NO. FPPP</th>
                    <th class="text-center whitespace-nowrap">TIPE FPPP</th>
                    <th class="text-center whitespace-nowrap">TAHAP PRODUKSI</th>
                    <th class="text-center whitespace-nowrap">NO. QUOTATION</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fppps as $no => $fppp)
                <tr class="intro-x">
                    <td>{{ $fppp->fppp_no }}</td>
                    <td>{{ $fppp->fppp_type }}</td>
                    <td class="text-center">{{ $fppp->production_phase }}</td>
                    <td>259/ASTRAL/AP084/08/2022/R4</td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-primary mr-3" href="javascript:;">
                                <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Detail
                            </a>
                            <a class="flex items-center text-success mr-3" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="file-text" data-lucide="file-text"
                                    class="lucide lucide-file-text block mx-auto">
                                    <path d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z">
                                    </path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <line x1="10" y1="9" x2="8" y2="9"></line>
                                </svg>
                                PDF
                            </a>
                            <a class="flex items-center mr-3" href="{{ route('fppps.edit', $fppp->id) }}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <button class="flex items-center text-danger" data-tw-toggle="modal"
                                data-tw-target="#delete-confirmation-modal">
                                <i data-lucide="trash-2" class="w-4 h-4 mr-1" type="submit"></i> Delete
                            </button>
                            <form action="{{ route('fppps.destroy', $fppp->id) }}" method="post" id="delete_form_fppp">
                                @csrf
                                @method('DELETE')
                            </form>
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
<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0 flex flex-col items-center">
                <div class="p-5 text-center">
                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-slate-500 mt-2">Do you really want to delete
                        these records? <br>This process
                        cannot be undone.</div>
                </div>
                <div class="px-5 pb-8 text-center flex">
                    <button type="button" data-tw-dismiss="modal"
                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>

                    <button onclick="event.preventDefault(); document.querySelector('#delete_form_fppp').submit()"
                        class="btn btn-outline-danger w-24 mr-1">
                        <i data-lucide="trash-2" class="w-4 h-4 mr-1" type="submit"></i> Delete
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->
@endsection