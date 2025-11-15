<x-BaseComponent tailwindcss="true" remixicon="true" title="Manage Pages">
    <div class="md:flex">
        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <li>
                <a href="#" class="inline-flex items-center px-4 flex py-3 text-white bg-blue-700 rounded active w-full gap-2 items-center" aria-current="page">
                    <i class="ri-home-9-line"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex items-center px-4 py-3 rounded text-gray-700 hover:text-gray-900 bg-gray-300 hover:bg-gray-400 w-full flex gap-2 transition-all duration-300">
                    <i class="ri-info-i"></i>
                    About
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex items-center px-4 py-3 rounded text-gray-700 hover:text-gray-900 bg-gray-300 hover:bg-gray-400 w-full flex gap-2 transition-all duration-300">
                    <i class="ri-notification-3-line"></i>
                    Notifications
                </a>
            </li>
        </ul>
        <div class="p-6 bg-gray-100 text-medium text-black rounded w-full active">
            <h4 class="text-xl font-semibold">Main Section</h4>
            <form action="{{ route('save-page-details', 'home') }}" method="post" class="border border-gray-300 rounded p-4 mt-4 flex flex-col gap-4 bg-white" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="main-text" class="text-lg">Heading</label>
                    <textarea name="main-text" id="main-text" class="border border-gray-300 outline-none rounded px-2 py-2.5 h-25">{{ $HomeContent->heading }}</textarea>
                    @error('main-text')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="main-image" class="text-lg">Image</label>
                    <div class="flex w-full gap-3">
                        <img src="{{ asset( 'storage/' . $HomeContent->image ) }}" alt="{{ $HomeContent->heading }}" class="h-20 w-35 rounded object-cover">
                        <input type="file" name="main-image" id="main-image" class="border border-gray-300 outline-none rounded ps-2 w-full py-2.5" accept=".jpg,.jpeg,.png">
                    </div>
                    @error('main-image')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="main-color" class="text-lg">Theme color</label>
                    <input type="text" name="main-color" id="main-color" class="border border-gray-300 outline-none rounded px-2 py-2.5" value="{{ $HomeContent->color }}">
                    @error('main-color')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-700 px-3 py-2 text-white rounded cursor-pointer">Save</button>
            </form>
        </div>
    </div>
</x-BaseComponent>