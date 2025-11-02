<div>
    <main class="pt-20 bg-gray-50 h-screen w-full px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 mb-4">
            <div class="shadow p-5 border border-gray-200 grid grid-cols-1 lg:grid-cols-2 rounded-lg gap-3 bg-yellow-50">
                @if(Auth::user()->role == 'superadmin')
                <div class="flex flex-col gap-2 border-r">
                    <h3 class="font-medium text-lg">
                        <span class="bg-red-200 me-1 px-1.5 py-1 text-red-500 rounded-full"><i class="ri-map-pin-user-line"></i></span>
                        Total Admins
                    </h3>
                    <h2 class="font-medium text-2xl ms-2.5">{{ $adminCount }}</h2>
                </div>
                @elseif(Auth::user()->role == 'admin')
                <div class="flex flex-col gap-2 border-r">
                    <h3 class="font-medium text-lg">
                        <span class="bg-red-200 me-1 px-1.5 py-1 text-red-500 rounded-full"><i class="ri-map-pin-user-line"></i></span>
                        Status
                    </h3>
                    <h2 class="font-medium text-2xl ms-2.5 {{ Auth::user()->is_active == 0 ? 'text-red-600' : 'text-green-600' }}">{{ Auth::user()->is_active == 0 ? 'Inactive' : 'Active' }}</h2>
                </div>
                @endif
                <div class="flex flex-col gap-2">
                    <h3 class="font-medium text-lg">
                        <span class="bg-green-200 me-1.5 ps-1.5 pe-1 py-1.5 text-green-500 rounded-full">
                            <i class="ri-graduation-cap-line"></i>
                        </span>
                        Total Students
                    </h3>
                    <h2 class="font-medium text-2xl ms-2">{{ $studentsCount }}</h2>
                </div>
            </div>
            <div class="shadow p-5 border border-gray-200 grid grid-cols-1 lg:grid-cols-2 rounded-lg gap-3 bg-red-50">
                <div class="flex flex-col gap-2 border-r">
                    <h3 class="font-medium text-lg">
                        <span class="bg-blue-200 me-1.5 px-1 ps-2 py-1.5 text-blue-500 rounded-full">
                            <i class="ri-book-open-line"></i>
                        </span>
                        Total Courses
                    </h3>
                    <h2 class="font-medium text-2xl ms-2.5">X</h2>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-medium text-lg">
                        <span class="bg-purple-200 me-1.5 px-1 ps-2 py-1.5 text-purple-500 rounded-full">
                            <i class="ri-user-received-line"></i>
                        </span>
                        Total Enrollments
                    </h3>
                    <h2 class="font-medium text-2xl ms-2.5">{{ $enrollmentsCount }}</h2>
                </div>
            </div>
        </div>
        <div class="shadow p-5 border border-gray-200 rounded-lg grid grid-cols-1 lg:grid-cols-2 gap-3">
            <div id="coursesales" style="height: 300px; width: 100%;"></div>
            <div id="Studens_enrolled" style="height: 300px; width: 100%;"></div>
        </div>
    </main>
    @section('extrajs')
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    @endsection
</div>