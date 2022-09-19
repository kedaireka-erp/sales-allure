@extends('../layout/' . $layout)

@section('subhead')
<title>Deal Source - Data List</title>
@endsection

@section('subcontent')
<h2 class="intro-y text-lg font-medium mt-10">Deal Source - Data List</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="{{ route('deal_sources.create') }}" class="btn btn-primary shadow-md mr-2">
            <span class="text">Add Deal Source</span>
        </a>
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
                    <TH CLASS="whitespace-nowrap text-primary">NO.</TH>
                    <th class="whitespace-nowrap text-primary">JENIS DEAL SOURCE</th>
                    <th class="text-center whitespace-nowrap text-primary">DESKRIPSI</th>
                    <th class="text-center whitespace-nowrap text-primary">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dealSources as $no => $dealSource)
                <tr class="intro-x zoom-in transition">
                    <td class="w-10">
                        <div class="flex">
                            <div class="font-medium whitespace-nowrap">{{ $no + $dealSources->firstItem() }}</div>
                        </div>
                    </td>
                    <td>
                        <div class="font-medium whitespace-nowrap">{{ $dealSource->name }}</div>
                    </td>
                    <td class="text-center">{{ Str::limit($dealSource->deskripsi, 50) }}</td>
                    <td class="table-report__action w-56">
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
                                        <div class="flex gap-2 p-1 flex-wrap">
                                            <a href="{{ route('deal_sources.edit', $dealSource) }}"
                                                class="flex items-center mr-3">
                                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>Edit
                                            </a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <form action="{{ route('deal_sources.destroy', $dealSource) }}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="flex items-center text-danger"><i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i>Hapus</button>
                                    </form>
                            </div>
                            </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $dealSources->links('components.custom-pagination') }}
</div>
@endsection