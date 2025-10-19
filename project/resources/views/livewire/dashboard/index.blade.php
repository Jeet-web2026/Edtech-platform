<div>
    @section('title')
    Dashboard |
    @endsection
    <main class="w-full bg-white h-full">
        <div class="w-full h-full min-h-screen">
            <div class="flex flex-col lg:flex-row w-full  min-h-screen">
                <div class="w-full lg:w-1/7 bg-white shadow-md  min-h-screen">
                    @livewire('dashboard.sidebar')
                </div>
                <div class="w-full relative overflow-hidden">
                    <nav role="navigation" class="bg-gray-800 w-full absolute top-0 left-0 shadow">
                        <div class="py-3 flex justify-end items-center me-5 gap-2">
                            <input type="text" class="bg-white outline-none px-2.5 py-1.5 rounded placeholder:text-gray-500" placeholder="Search...">
                            <button class="px-2.5 py-1.5 bg-green-700 rounded cursor-pointer"><i class="ri-search-2-line text-white"></i></button>
                        </div>
                        @livewire('dashboard.maincontent')
                    </nav>
                </div>
            </div>
        </div>
    </main>
</div>