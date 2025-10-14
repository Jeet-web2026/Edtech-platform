<div>
    @section('title')
    Dashboard |
    @endsection
    <main class="w-full bg-white h-full">
        <div class="w-full h-full min-h-screen">
            <div class="flex flex-col lg:flex-row w-full  min-h-screen">
                <div class="w-full lg:w-1/6 bg-white shadow-md  min-h-screen">
                    @livewire('dashboard.sidebar')
                </div>
            </div>
        </div>
    </main>
</div>