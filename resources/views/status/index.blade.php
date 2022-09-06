@extends('../layout/' . $layout)

@section('subhead')
    <title>Status - Data List</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Status - Data List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('status.create') }}" class="btn btn-primary shadow-md mr-2">
                <span class="text">Add Status</span>
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
                        <TH CLASS="whitespace-nowrap">NO.</TH>
                        <th class="whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">DESKRIPSI</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statuses as $status)
                        <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="font-medium whitespace-nowrap">{{ $loop->iteration }}</div>
                                </div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">{{ $status->name }}</div>
                            </td>
                            <td class="text-center">{{ $status->deskripsi }}</td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a href="{{ route('status.edit', $status) }}" class="flex items-center mr-3">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>Edit
                                    </a>
                                    <form action="{{ route('status.destroy', $status) }}" method="post">
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
@endsection