<x-BaseComponent tailwindcss="true" remixicon="true" title="Edit Admin">
    <form action="{{ route('update-admin', ['userid' => $admin->id, 'adminid' => $admin->adminDetails->id ]) }}" method="post" class="max-w-full mx-auto bg-gray-50 p-8 rounded shadow" enctype="multipart/form-data">
        @csrf
        <span>Status: {{ $admin->is_active == 0 ? 'Inactive' : 'Active' }}</span>
        <div class="flex flex-col lg:flex-row gap-1 mt-2">
            <div class="w-1/7">
                <img src="{{ asset( 'storage/' . $admin->adminDetails->profile ?? '' ) }}" alt="{{ $admin->first_name . '-' . $admin->last_name }}" class="h-25 w-35 rounded">
            </div>
            <div class="w-6/7 flex flex-col gap-4">
                <div class="flex flex-row gap-3 items-center">
                    <div class="flex flex-col w-[50%]">
                        <input type="text" name="first_name" id="first_name" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ $admin->first_name }}">
                        @error('first_name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col w-[50%]">
                        <input type="text" name="last_name" id="last_name" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ $admin->last_name }}">
                        @error('last_name')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-3 items-center">
                    <div class="flex flex-col w-[100%]">
                        <input type="email" name="email" id="email" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ $admin->email }}">
                        @error('email')
                        <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row gap-3 items-center mt-3">
            <div class="flex flex-col w-[50%]">
                <input type="number" name="aadhaar" id="aadhaar" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ $admin->adminDetails->aadhaar }}">
                @error('aadhaar')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col w-[50%]">
                <input type="tel" name="mob" id="mob" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ $admin->adminDetails->mob }}">
                @error('mob')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row gap-3 items-center mt-3">
            <div class="flex flex-col w-[50%]">
                <input type="date" name="valid_from" id="valid_from" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ date('Y-m-d', strtotime($admin->adminDetails->valid_from)) }}">
                @error('valid_from')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col w-[50%]">
                <input type="date" name="valid_to" id="valid_to" class="border border-gray-300 outline-none rounded px-3 py-2 w-full" value="{{ date('Y-m-d', strtotime($admin->adminDetails->valid_to)) }}">
                @error('valid_to')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mt-3">
            <div class="flex flex-col">
                <textarea type="text" name="address" id="address" class="border border-gray-300 outline-none rounded px-3 py-2 w-full">{{ $admin->adminDetails->address }}</textarea>
                @error('valid_from')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="bg-blue-800 px-4 py-2 text-white rounded mt-4 cursor-pointer">Save</button>
    </form>
</x-BaseComponent>