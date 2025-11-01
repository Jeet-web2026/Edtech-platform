<div>
    <x-BaseComponent tailwindcss="true" remixicon="true" title="Add Admin">
        <form action="{{ route('save-admin') }}" method="post" class="max-w-4xl mx-auto bg-gray-50 p-8 rounded shadow" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-col-1 lg:grid-cols-2 gap-2.5">
                <div class="flex flex-col gap-1.5">
                    <label for="name">Name</label>
                    <input
                        name="name" id="name"
                        type="text"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="email">Email</label>
                    <input
                        name="email" id="email"
                        type="email"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="mob">Contact no.</label>
                    <input
                        name="mob" id="mob"
                        type="tel"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('mob') }}">
                    @error('mob')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="aadhaar">Aadhaar</label>
                    <input
                        name="aadhaar" id="aadhaar"
                        type="number"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('aadhaar') }}">
                    @error('aadhaar')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="profile">Profile</label>
                    <input
                        name="profile" id="profile"
                        type="file" accept=".jpg,.jpeg,.png"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('profile') }}">
                    @error('profile')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="password">Password</label>
                    <input
                        name="password" id="password"
                        type="password"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('password') }}">
                    @error('password')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="valid_from">Valid from</label>
                    <input
                        name="valid_from" id="valid_from"
                        type="date"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('valid_from') }}">
                    @error('valid_from')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="valid_to">Valid to</label>
                    <input
                        name="valid_to" id="valid_to"
                        type="date"
                        class="border outline-none px-2 py-1 rounded border-gray-300" value="{{ old('valid_to') }}">
                    @error('valid_to')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input type="number" value="{{ $userId }}" class="hidden" name="parent_id">
            <textarea name="address" id="address" class="h-20 w-full border mt-4 rounded outline-none px-2 py-1 border-gray-300">{{ old('address') }}</textarea>
            @error('address')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
            <button type="submit" class="bg-blue-800 px-4 py-2 text-white rounded mt-4 cursor-pointer">Submit</button>
        </form>
    </x-BaseComponent>
</div>