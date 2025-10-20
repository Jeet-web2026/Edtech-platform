<div>
    @section('title')
    Dashboard |
    @endsection
    <main class="w-full bg-white h-full">
        @if(session()->has('error'))
        <div class="bg-red-200 text-red-800 px-4 py-2 h-40 w-100 text-center flex justify-center items-center rounded mb-4 font-medium text-xl fixed top-[40%] z-50 left-[35%] error-popup">
            <i class="ri-error-warning-line me-1 text-2xl"></i>{{ session('error') }}
        </div>
        @endif
        <div class="w-full h-full min-h-screen">
            <div class="flex flex-col lg:flex-row w-full min-h-screen">
                <div class="w-full lg:w-1/6 bg-white shadow-md min-h-screen border-r border-gray-100">
                    @livewire('dashboard.sidebar')
                    <div class="absolute bottom-5 left-10">
                        <a href="{{ route('logout') }}" wire:navigate>
                            <i class="ri-shut-down-line text-blue-700"></i>
                            <span class="text-base text-blue-700 font-medium">Logout</span>
                        </a>
                    </div>
                </div>
                <div class="w-full relative overflow-hidden min-h-screen">
                    <nav role="navigation" class="bg-blue-200 w-full absolute top-0 left-0 shadow">
                        <div class="py-3 flex justify-end items-center me-5 gap-2">
                            <input type="text" class="bg-white outline-none px-2.5 py-1.5 rounded placeholder:text-gray-500" placeholder="Search...">
                            <button class="px-2.5 py-1.5 bg-green-700 rounded cursor-pointer"><i class="ri-search-2-line text-white"></i></button>
                        </div>
                    </nav>
                    <div>
                        @livewire('dashboard.maincontent')
                    </div>
                    <div class="bg-gray-200 w-full absolute bottom-0 left-0 py-3">
                        <p class="text-center capitalize text-sm text-gray-800"><i class="ri-copyright-line"></i>PathShala | All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>