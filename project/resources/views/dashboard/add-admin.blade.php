<div>
    <x-BaseComponent tailwindcss="true" remixicon="true" title="Add Admin">
        <form action="{{ route('save-admin') }}" method="post" class="max-w-4xl mx-auto bg-gray-50 p-8 rounded shadow" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-col-1 lg:grid-cols-2 gap-2.5">
                <x-Input type="text" labelname="Name" class="border-gray-300" name="name" />
                <x-Input type="email" labelname="Email address" class="border-gray-300" name="email" />
                <x-Input type="text" labelname="Mobile number" class="border-gray-300" name="mob" />
                <x-Input type="text" labelname="Aadhaar number" class="border-gray-300" name="aadhaar" />
                <x-Input type="file" labelname="Profile" class="border-gray-300" name="profile" />
                <x-Input type="password" labelname="Password" class="border-gray-300" name="password" />
                <x-Input type="date" labelname="Valid from" class="border-gray-300" name="valid-from" />
                <x-Input type="date" labelname="Valid to" class="border-gray-300" name="valid-to" />
            </div>
            <input type="number" value="{{ $userId }}" class="hidden" name="parent_id">
            <textarea name="address" id="address" class="h-20 w-full border mt-4 rounded outline-none px-2 py-1 border-gray-300"></textarea>
            @error('address')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
            <button type="submit" class="bg-blue-800 px-4 py-2 text-white rounded mt-4 cursor-pointer">Submit</button>
        </form>
    </x-BaseComponent>
</div>