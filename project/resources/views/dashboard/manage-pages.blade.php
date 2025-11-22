<x-BaseComponent tailwindcss="true" remixicon="true" title="Manage Pages">
    <div class="md:flex">
        <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <li class="text-white bg-blue-600">
                <a href="javascript:void(0)" class="inline-flex items-center px-4 py-3 rounded active w-full gap-2 items-center" id="home-tab-btn">
                    <i class="ri-home-9-line"></i>
                    Home
                </a>
            </li>
            <li class="text-white bg-blue-600">
                <a href="javascript:void(0)" class="inline-flex items-center px-4 py-3 rounded w-full flex gap-2" id="about-tab-btn">
                    <i class="ri-info-i"></i>
                    About
                </a>
            </li>
            <li class="text-white bg-blue-600">
                <a href="javascript:void(0)" class="inline-flex items-center px-4 py-3 rounded w-full flex gap-2" id="notification-tab-btn">
                    <i class="ri-notification-3-line"></i>
                    Notifications
                </a>
            </li>
        </ul>
        <div class="w-full h-full">
            <div class="p-6 bg-gray-100 text-medium text-black rounded w-full active" id="home-tab-content">
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
            <div id="about-tab-content" class="hidden p-6 bg-gray-100 text-medium text-black rounded w-full">
                <div class="bg-white p-6 rounded border border-gray-300">
                    <h4 class="text-xl font-semibold">About Section</h4>
                    <input type="file" name="about_image" class="border border-gray-400 outline-none w-full px-2 py-1.5 rounded mt-3">
                    <textarea name="about-content" id="about-content" rows="10" class="w-full border border-gray-400 outline-0 rounded my-3 px-2 py-2" placeholder="About content here..."></textarea>
                    <button type="submit" class="bg-blue-700 w-full py-2 rounded cursor-pointer text-white">Save</button>
                </div>
            </div>
            <div id="notifications-tab-content" class="hidden p-6 bg-gray-100 text-medium text-black rounded w-full">
                <div class="bg-white p-6 rounded border border-gray-300 flex gap-2">
                    <div class="border-r border-gray-300 pe-3">
                        <h4 class="text-xl font-semibold">Notifications Section</h4>
                        <input type="file" name="about_image" class="border border-gray-400 outline-none w-full px-2 py-1.5 rounded mt-3">
                        <textarea name="about-content" id="about-content" rows="10" class="w-full border border-gray-400 outline-0 rounded my-3 px-2 py-2" placeholder="Notification content here..."></textarea>
                        <button type="submit" class="bg-blue-700 w-full py-2 rounded cursor-pointer text-white">Save</button>
                    </div>
                    <div>
                        <h4 class="text-xl font-semibold mb-3">All Notifications</h4>
                        <div class="border border-gray-300 px-2.5 gap-2 rounded bg-gray-50 w-full flex flex-row items-center justify-between">
                            <p class="py-2 border-r border-gray-200 pe-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, distinctio...</p>
                            <a href="javascript:void(0)"><i class="ri-eye-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('page-scripts')
    <script src="{{ asset('assets/js/page-settings.js') }}"></script>
    @endsection

    @section('page-style')
    <style>
        .active {
            display: block;
        }
    </style>
    @endsection

</x-BaseComponent>