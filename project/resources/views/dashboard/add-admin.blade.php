<div>
    <x-BaseComponent tailwindcss="true" remixicon="true" title="Add Admin">
        <form action="" method="post" class="max-w-4xl mx-auto bg-gray-50 p-8 rounded shadow">
            @csrf
            <div class="grid grid-col-1 lg:grid-cols-2 gap-2.5">
                <x-Input type="text" labelname="Name" class="border-gray-300" />
                <x-Input type="email" labelname="Email address" class="border-gray-300" />
                <x-Input type="text" labelname="Mobile number" class="border-gray-300" />
                <x-Input type="text" labelname="Aadhaar number" class="border-gray-300" />
                <x-Input type="file" labelname="Profile" class="border-gray-300" />
                <x-Input type="password" labelname="Password" class="border-gray-300" />
                <x-Input type="date" labelname="Valid from" class="border-gray-300" />
                <x-Input type="date" labelname="Valid to" class="border-gray-300" />
            </div>
            <input type="number" value="{{ $userId }}" class="hidden" name="parent_id">
            <textarea name="address" id="address" class="h-20 w-full border mt-4 rounded outline-none px-2 py-1 border-gray-300"></textarea>
            <button type="submit" class="bg-blue-800 px-4 py-2 text-white rounded mt-4 cursor-pointer">Submit</button>
        </form>
    </x-BaseComponent>
</div>