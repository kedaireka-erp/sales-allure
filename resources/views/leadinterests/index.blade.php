@extends('../layout/' . $layout)

@section('subhead')
    <title>Kontak - Lead Interest</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Lead Interest</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2" style="justify-content:space-between">
            <a class="btn btn-primary shadow-md mr-2" href="{{ route('leadinterests.create') }}">Tambah</a>
            <div class="float-right w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500" style="">
                    {{-- <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> --}}
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace" style="width: 5%">No.</th>
                        <th class="whitespace-nowrap">Nama Lead Interest</th>
                        <th class="whitespace-nowrap">Deskripsi</th>
                        <th class="text-center whitespace-nowrap">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leadInterests as $no => $leadI)
                        <tr class="intro-x">
                            <td class="text-left">{{ $no + $leadInterests->firstItem() }}</td>
                            <td class="text-left">{{ $leadI->name }}</td>
                            <td class="text-left">{!! $leadI->description !!}</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('leadinterests.edit', $leadI) }}" >
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Ubah
                                    </a>
                                    <form action="{{ route('leadinterests.destroy', $leadI) }}" method="post">
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
        {{ $leadInterests->links('components.custom-pagination') }}
    </div>
@endsection
