@extends('../layout/' . $layout)

@section('subhead')
<title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Approachments</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0 gap-2 mr-5">
        <div class="dropdown ml-auto">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center mr-2">
                    <i class="w-4 h-4" data-lucide="sliders"></i>
                </span>
                Filter
            </button>
            <div class="dropdown-menu w-60">
                <ul class="dropdown-content">
                    <form class="p-2" action="{{ route('approachments.index') }}">
                        <div>
                            <div class="text-xs">Status</div>
                            <select class="tom-select mt-2" id="status_id" name="status">
                                <option selected value="">Pilih Status</option>
                                @foreach ($statuses as $status)
                                <option {{ $status->id == old('status') ? 'selected' : '' }} value="{{ $status->id
                                    }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <div class="text-xs">Kontak</div>
                            <select class="tom-select mt-2" id="contact_id" name="contact">
                                <option selected value="">Pilih Nama Kontak</option>
                                @foreach ($contacts as $contact)
                                <option {{ $status->id == old('status') ? 'selected' : '' }} value="{{ $contact->id
                                    }}">{{ $contact->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center mt-3">
                            <a href="{{ route('approachments.index') }}" data-dismiss="dropdown"
                                class="btn btn-secondary w-32 ml-auto" id="close-filter">Reset</a>
                            <button class="btn btn-primary w-32 ml-2" type="submit">Apply</button>
                        </div>
                    </form>
                </ul>
            </div>
        </div>

        <a href="{{ route('approachments.create') }}" class="btn btn-primary shadow-md ">
            <span class="text">Tambah Approachment</span>
        </a>
    </div>
</div>

<div class="intro-y  p-5 mt-5">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
        <form class="xl:flex sm:mr-auto" action="{{ route('approachments.index') }}" method="get">
            @csrf
            <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                <input type="text" value="{{ old('search') }}" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0"
                    name="search" placeholder="Search...">
            </div>
            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="submit"
                    class="btn btn-primary w-full sm:w-16">Search</button>
                <a id="tabulator-html-filter-reset" href="{{ route('approachments.index') }}"
                    class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</a>
            </div>
        </form>
    </div>
    <br>

    <!-- BEGIN: Data List -->

    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="text-center whitespace-nowrap text-primary ">NO</th>
                    <th class="whitespace-nowrap text-primary">@sortablelink('contact.first_name', "NAMA KONTAK")</th>
                    <th class="text-center whitespace-nowrap text-primary">@sortablelink('activity.name', "AKTIVITAS")</th>
                    <th class="text-center whitespace-nowrap text-primary">@sortablelink('date', "TANGGAL")</th>
                    <th class="text-center whitespace-nowrap text-primary">@sortablelink('status.name', "STATUS")</th>
                    <th class="text-center whitespace-nowrap text-primary">NOTE</th>
                    <th class="text-center whitespace-nowrap text-primary">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($approachments as $no => $approachment)
                <tr class="intro-x zoom-in transition">
                    <td class="text-base text-center">{{ $no + $approachments->firstItem() }}</td>
                    <td class="text-base ">{{ $approachment->contact->name ?? '' }}</td>
                    <td class="text-base text-center">{{ $approachment->activity->name ?? '' }}</td>
                    <td class="text-base text-center">
                        {{ \Carbon\Carbon::parse($approachment->date)->translatedFormat('d F Y') }}</td>
                    <td>
                        @if ($approachment->status->name == 'Lost')
                        <a class="w-40">
                            <div class="flex items-center justify-center text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                    class="lucide lucide-check-square w-4 h-4 mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Lost
                            </div>
                        </a>
                        @elseif ($approachment->status->name == 'Pending')
                        <a class="w-40">
                            <div class="flex items-center justify-center text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                    class="lucide lucide-check-square w-4 h-4 mr-2 ">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Pending
                            </div>
                        </a>
                        @elseif ($approachment->status->name == 'Deal')
                        <a>
                            <div class="flex items-center justify-center text-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                                    class="lucide lucide-check-square w-4 h-4 mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg> Deal
                            </div>
                        </a>
                        @endif

                        {{-- <div
                            class="flex items-center justify-center {{ 'true_false' ? 'text-success' : 'text-danger' }}">
                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ 'true_false' ? 'Active' :
                            'Inactive' }}
                        </div> --}}

                    </td>
                    <td class="text-base text-center">

                        @if ($approachment->note == null or $approachment->note == '')
                        
                        @else
                        <a href="javascript:;" data-note="{{ $approachment->note }}" data-tw-toggle="modal" data-tw-target="#note-modal"
                            class="btn btn-sm btn-primary" id="btn-note-modal">
                            Show
                        </a>
                        @endif
                    </td>
                    <td class="table-report__action w-fit">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3"
                                href="{{ route('approachments.edit', $approachment->id) }}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <form action="{{ route('approachments.destroy', $approachment->id) }}" method="post">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="flex items-center text-danger"><i data-lucide="trash-2"
                                        class="w-4 h-4 mr-1"></i>Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END: Data List -->
{{ $approachments->appends(\Request::except('page'))->links('components.custom-pagination') }}
</div>
<!-- BEGIN: Modal Content -->
<div id="note-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-10 text-center" id="modal-body">
                
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
@endsection

@section('script')
<script>
    $(document).on('click', '#btn-note-modal', function(){
        var note = $(this).data('note');
        $('#modal-body').empty();
        $('#modal-body').append(note);
    })

   

    
        
</script>
@endsection