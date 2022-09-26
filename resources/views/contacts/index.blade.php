@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Contacts</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('contacts.create') }}" class="btn btn-primary shadow-md mr-2">Add New Contact</a>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                <form class="xl:flex sm:mr-auto" action="{{ route('contacts.index') }}" method="get">
                    @csrf
                    <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                        <input type="text" value="{{ old('search') }}"
                            class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" name="search" placeholder="Search...">
                    </div>
                    <div class="mt-2 xl:mt-0">
                        <button id="tabulator-html-filter-go" type="submit"
                            class="btn btn-primary w-full sm:w-16">Search</button>
                        <button id="tabulator-html-filter-reset" type="reset"
                            class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach ($contacts as $contact)
            <div class="intro-y col-span-12 md:col-span-6">
                <div class="box">
                    <div
                        class="flex flex-col lg:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                src="https://ui-avatars.com/api/?name={{ $contact->name }}">
                        </div>
                        <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                            <a href="{{ route('contacts.show', $contact) }}" class="font-medium">{{ $contact->name }}</a>
                            <div class="text-slate-500 text-xs mt-0.5">
                                {{ $contact->ContactType ? $contact->ContactType->name : '' }}</div>
                        </div>
                        <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Facebook">
                                <i class="w-3 h-3 fill-current" data-lucide="facebook"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Twitter">
                                <i class="w-3 h-3 fill-current" data-lucide="twitter"></i>
                            </a>
                            <a href=""
                                class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip"
                                title="Linked In">
                                <i class="w-3 h-3 fill-current" data-lucide="linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="w-full flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                        <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                            <p class="text-md text-slate-400">
                                PT Graha Persada
                            </p>
                        </div>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary py-1 px-2 mr-2">Delete</button>
                        </form>
                        <a href="{{ route('contacts.edit', $contact) }}"
                            class="btn btn-outline-secondary py-1 px-2">Update</a>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        {{ $contacts->links('components.custom-pagination') }}
        <!-- END: Pagination -->
    </div>
@endsection
