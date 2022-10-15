@extends('../layout/' . $layout)

@section('subhead')
<title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<h1 class="intro-y text-xl font-md mt-10 ">COMPANY</h1>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="{{ route('companies.create') }}" class="btn btn-primary shadow-md mr-2">Tambah Company</a>
        {{-- <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-lucide="plus"></i>
                </span>
            </button>
            {{-- <div class="dropdown-menu w-40">
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
        </div> --}}
        <div class="hidden md:block mx-auto text-slate-500"></div>
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form class="xl:flex sm:mr-auto" action="{{ route('companies.index') }}" method="get">
            @csrf
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                <input type="text" value="{{ old('search') }}" 
                    class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" name="search" placeholder="Search...">
            </div>
            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="submit"
                    class="btn btn-primary w-full sm:w-16">Search</button>
                <a id="tabulator-html-filter-reset" href="{{ route('companies.index') }}"
                    class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</a>
            </div>
        </form>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap text-primary">NO</th>
                    <th class="whitespace-nowrap text-primary">@sortablelink('name', "COMPANY NAME")</th>
                    <th class="whitespace-nowrap text-primary">@sortablelink('phone_number', "PHONE NUMBER")</th>
                    <th class="whitespace-nowrap text-primary">@sortablelink('company_type.name', "COMPANY TYPE")</th>
                    {{-- <th class="whitespace-nowrap">ADDRESS</th> --}}
                    {{-- <th class="whitespace-nowrap">CITY</th> --}}
                    <th class="whitespace-nowrap text-primary">@sortablelink('company_area.name', "COMPANY AREA")</th>
                    {{-- <th class="whitespace-nowrap">POSTAL CODE</th> --}}
                    {{-- <th class="whitespace-nowrap">NUMBER OF EMPLOYEES</th> --}}
                    {{-- <th class="whitespace-nowrap">ANNUAL REVENUE</th> --}}
                    {{-- <th class="whitespace-nowrap">TIME ZONE</th> --}}
                    {{-- <th class="whitespace-nowrap">DESCRIPTION</th> --}}
                    {{-- <th class="whitespace-nowrap">LINKEDIN COMPANY PAGE</th> --}}
                    <th class="text-center whitespace-nowrap text-primary">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $no => $company)
                <tr class="intro-x zoom-in transition">
                    <td>{{ $no + $companies->firstItem() }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->phone_number }}</td>
                    <td>{{ $company->company_type->name }}</td>
                    {{-- <td>{{ $company->address }}</td> --}}
                    {{-- <td>{{ $company->city }}</td> --}}
                    <td>{{ $company->company_area->name }}</td>
                    {{-- <td>{{ $company->postal_code }}</td> --}}
                    {{-- <td>{{ $company->number_of_employees }}</td> --}}
                    {{-- <td>{{ $company->annual_revenue }}</td> --}}
                    {{-- <td>{{ $company->time_zone}}</td> --}}
                    {{-- <td>{!!$company->description !!}</td>  --}}
                    {{-- <td>{{ $company->linkedin_company }}</td>                   --}}
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center text-primary mr-3" href="{{ route('companies.show', $company) }}">
                                <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Detail
                            </a>                          
                            <a class="flex items-center mr-3" href="{{ route('companies.edit', $company) }}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>           
                            <form action="{{ route('companies.destroy', $company) }}" method="post">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="flex items-center text-danger"><i data-lucide="trash-2" class="w-4 h-4 mr-1"></i>Hapus</button>
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
    {{ $companies->links('components.custom-pagination') }}
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