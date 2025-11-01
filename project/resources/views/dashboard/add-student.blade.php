<div>
    <x-BaseComponent tailwindcss="true" remixicon="true" title="Add Student">
        <form action="{{ route('enrollment-start') }}" method="post" class="max-w-full mx-auto bg-gray-50 p-8 rounded shadow">
            @csrf
            <div class="flex flex-col lg:flex-row gap-2.5">
                <div class="w-1/2 gap-2 flex flex-col border-r border-gray-300 pe-5">
                    <h4 class="text-xl font-medium mb-2">Personal details</h4>
                    <div class="flex flex-col">
                        <input type="text" name="first_name" id="first_name" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('first_name') }}" placeholder="First name">
                        @error('first_name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="last_name" id="last_name" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('last_name') }}" placeholder="Last name">
                        @error('last_name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="email" name="email" id="email" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('email') }}" placeholder="Email address">
                        @error('email')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="tel" name="mob" id="mob" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('mob') }}" placeholder="Contact number">
                        @error('mob')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <textarea name="address" id="address" class="h-23 w-full border rounded outline-none px-2 py-1 border-gray-300"></textarea>
                    @error('address')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-1/2 flex flex-col gap-2">
                    <h4 class="text-xl font-medium mb-2">Academic details</h4>
                    <div class="flex flex-col">
                        <input type="text" name="last_qualification" id="last_qualification" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('last_qualification') }}" placeholder="Last qualification">
                        @error('last_qualification')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="last_qualification_organisation" id="last_qualification_organisation" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('last_qualification_organisation') }}" placeholder="Last qualification organisation name">
                        @error('last_qualification_organisation')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="class_tenth_percentage" id="class_tenth_percentage" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('class_tenth_percentage') }}" placeholder="Class Xth percentage">
                        @error('class_tenth_percentage')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="class_tenth_organisation_name" id="class_tenth_organisation_name" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('class_tenth_organisation_name') }}" placeholder="Class Xth organisation name">
                        @error('class_tenth_organisation_name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="class_twelveth_percentage" id="class_twelveth_percentage" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('class_twelveth_percentage') }}" placeholder="Class XIIth percentage">
                        @error('class_twelveth_percentage')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <input type="text" name="class_twelveth_organisation_name" id="class_twelveth_organisation_name" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ old('class_twelveth_organisation_name') }}" placeholder="Class XIIth organisation name">
                        @error('class_twelveth_organisation_name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <input type="number" value="{{ $userId }}" class="hidden" name="parent_id">
            <button type="submit" class="bg-blue-800 px-4 py-2 text-white rounded mt-4 cursor-pointer">Submit</button>
        </form>
    </x-BaseComponent>
</div>