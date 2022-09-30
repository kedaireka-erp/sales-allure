@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Tambah Contact</h2>
    </div>
    <div class="grid grid-cols-12 gap-10 mt-3">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <form action="{{ route('contacts.store') }}" method="post">
                @csrf
                <div class="intro-y box p-5">
                    <div class="mt-5">
                        <label for="company" class="form-label">Company</label>
                        <select class="custom-select d-block w-full form-control mb-3 tom-select @error('company_id') border-red-700                            
                        @enderror" id="company" placeholder="Select Company" name="company_id">
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                        </select>
                        @error('company_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="contact_type" class="form-label">Contact Type</label>
                        <select class="custom-select d-block w-full form-control mb-3 tom-select @error('contact_type_id') border-red-700                            
                        @enderror" id="contact_type" placeholder="Contact Type" name="contact_type_id">
                                @foreach ($contactTypes as $contactType)
                                    <option value="{{ $contactType->id }}">{{ $contactType->name }}</option>
                                @endforeach
                        </select>
                        @error('contact_type_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="lead_source" class="form-label">Lead Source</label>
                        <select class="custom-select d-block w-full form-control mb-3 tom-select @error('lead_source_id') border-red-700                            
                        @enderror" id="lead_source" placeholder="Lead Source" name="lead_source_id">                                   
                                @foreach ($leadSources as $leadSource)
                                    <option value="{{ $leadSource->id }}">{{ $leadSource->name }}</option>
                                @endforeach
                        </select>
                        @error('lead_source_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="lead_status" class="form-label">Lead Status</label>
                        <select class="custom-select d-block w-full form-control mb-3 tom-select @error('lead_status_id') border-red-700                            
                        @enderror" id="lead_status" placeholder="Lead Status" name="lead_status_id">                                   
                                @foreach ($leadStatuses as $leadStatus)
                                    <option value="{{ $leadStatus->id }}">{{ $leadStatus->name }}</option>
                                @endforeach
                        </select>
                        @error('lead_status_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="lead_priority" class="form-label">Lead Priority</label>
                        <select class="custom-select d-block w-full form-control mb-3 tom-select @error('lead_priority_id') border-red-700                            
                        @enderror" id="lead_priority" placeholder="Lead Priority" name="lead_priority_id">
                                @foreach ($leadPriorities as $leadPriority)
                                    <option value="{{ $leadPriority->id }}">{{ $leadPriority->name }}</option>
                                @endforeach
                        </select>
                        @error('lead_priority_id')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="note" class="mb-2">Lead Interest</label>
                        <div class="mt-2">
                            <select data-placeholder="Pilih Lead Interest" class="tom-select w-full" id="leadInterest" name="leadInterest[]" multiple>
                                @foreach ($leadInterests as $key => $leadInterest)
                                    <option value="{{ $leadInterest->id }}">{{ $leadInterest->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-5">
                        <label for="name" class="form-label">Contact Name </label>
                        <input id="name" type="text" class="@error('name') border-red-700                            
                        @enderror form-control w-full" placeholder="Masukkan Nama Kontak"
                            name="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="email" class="form-label">E-mail </label>
                        <input id="email" type="text" class="@error('email') border-red-700                            
                        @enderror form-control w-full" placeholder="Masukkan Email"
                            name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="address" class="form-label">Address </label>
                        <input id="address" type="text" class="@error('address') border-red-700                            
                        @enderror form-control w-full" placeholder="Masukkan Alamat"
                            name="address" value="{{ old('address') }}">
                        @error('address')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="phone" class="form-label">Phone Number </label>
                        <input id="phone" type="text" class="@error('phone') border-red-700                            
                        @enderror form-control w-full" placeholder="Masukkan No Telepon"
                            name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="facebook" class="form-label">Facebook URL </label>
                        <input id="facebook" type="text" class="@error('facebook') border-red-700                            
                        @enderror form-control w-full" placeholder="Masukkan Facebook URL"
                            name="facebook" value="{{ old('facebook') }}">
                        @error('facebook')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="twitter" class="form-label">Twitter URL </label>
                        <input id="twitter" type="text" class="@error('twitter') border-red-700                            
                        @enderror form-control w-full" placeholder="Masukkan twitter URL"
                            name="twitter" value="{{ old('twitter') }}">
                        @error('twitter')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="linkedin" class="form-label">LinkedIn URL </label>
                        <input id="linkedin" type="text" class="@error('linkedin') border-red-700                            
                        @enderror form-control w-full" placeholder="Masukkan linkedin URL"
                            name="linkedin" value="{{ old('linkedin') }}">
                        @error('linkedin')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>                            
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="note" class="mb-2">Deskripsi</label>
                        <div class="mt-2">
                            <textarea name="note" id="note" cols="30" rows="10" class="editor">{{ old('note') }}</textarea>
                        </div>
                         @error('note')
                            <p class="text-red-700 text-5m mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-right mt-5">
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
            </form>
            <!-- END: Form Layout -->
        </div>
        @isset($record)
            
        @endisset
    </div>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
