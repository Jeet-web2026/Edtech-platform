<div>
    <img src="{{ asset('assets/images/demoadmin-image.jpg') }}" alt="demo-dashboard-user-image" loading="lazy" class="mx-auto my-2 h-25 shadow rounded-full bg-white">
    <nav role="navigation" class="py-5">
        <ul>
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" class="p-3 text-base font-medium bg-blue-500 text-white w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-apps-line text-lg"></i>
                    Dashboard
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" class="p-3 text-base font-medium bg-blue-50 text-blue-800 w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-settings-line text-lg"></i>
                    Page settings
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" class="p-3 text-base font-medium bg-blue-50 text-blue-800 w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-book-marked-line text-lg"></i>
                    Courses
                </a>
            </li>
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" class="p-3 text-base font-medium bg-blue-50 text-blue-800 w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-group-line text-lg"></i>
                    Enrollments
                </a>
            </li>
        </ul>
    </nav>
</div>