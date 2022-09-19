@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Approachments</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{ route('approachments.create') }}" class="btn btn-primary shadow-md mr-2">
                <span class="text">Tambah Approachment</span>
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
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap text-primary">NO</th>
                        <th class="whitespace-nowrap text-primary">NAMA KONTAK</th>
                        <th class="text-center whitespace-nowrap text-primary">AKTIVITAS</th>
                        <th class="text-center whitespace-nowrap text-primary">TANGGAL</th>
                        <th class="text-center whitespace-nowrap text-primary">STATUS</th>
                        <th class="text-center whitespace-nowrap text-primary">NOTE</th>
                        <th class="text-center whitespace-nowrap text-primary">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($approachments as $no => $approachment)
                        <tr class="intro-x zoom-in transition">
                            <td class="text-base text-center">{{ $no + $approachments->firstItem() }}</td>
                            <td class="text-base text-center">{{ $approachment->contact->name ?? '' }}</td>
                            <td class="text-base text-center">AAAAAAAAA</td>
                            <td class="text-base text-center">{{ $approachment->date }}</td>
                            <td class="text-base text-center">

                                <div class="flex items-center justify-center {{ 'true_false' ? 'text-success' : 'text-danger' }}">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ 'true_false' ? 'Active' : 'Inactive' }}
                                </div>

                            </td>
                            <td class="text-base text-center">{{ $approachment->note }}</td>
                            <td class="table-report__action w-fit">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3"
                                        href="{{ route('approachments.edit', $approachment->id) }}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    <form action="{{ route('approachments.destroy', $approachment->id) }}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="flex items-center text-danger"><i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i>Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        {{ $approachments->links('components.custom-pagination') }}
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
