@extends('../layout/' . $layout)

@section('subhead')
    <title>Kontak - Lead Source</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Dropdown Lead Source</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2" style="justify-content:space-between">
            <a class="btn btn-primary shadow-md mr-2" href="{{ route('leadsources.create') }}">Tambah</a>
            <div class="float-right w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500" style="">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace text-primary" style="width: 5%">No.</th>
                        <th class="whitespace-nowrap text-primary">Nama Lead Source</th>
                        <th class="whitespace-nowrap text-primary">Deskripsi</th>
                        <th class="text-center whitespace-nowrap text-primary">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leadSources as $no => $ls)
                        <tr class="intro-x zoom-in transition">
                            <td class="text-left">{{ ++$no }}</td>
                            <td class="text-left">{{ $ls->name }}</td>
                            <td class="text-left">{!! $ls->description !!}</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('leadsources.edit', $ls->id) }}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Ubah
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
    </div>
@endsection
