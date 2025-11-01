<div>
    <div class="flex flex-row justify-center items-center bg-blue-800 py-3">
        <a wire:navigate href="{{ route('dashboard', Auth::user()->role) }}">
            <img src="{{ asset('assets/images/demoadmin-image.jpg') }}" alt="demo-dashboard-user-image" loading="lazy" class="my-2 h-25 shadow rounded-full bg-white">
        </a>
    </div>
    <nav role="navigation" class="pb-5">
        <ul>
            <li class="w-full">
                <a href="{{ route('dashboard', Auth::user()->role) }}" wire:navigate class="p-3 text-base font-medium {{ request()->routeIs('dashboard') ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-800' }} w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-apps-line text-lg"></i>
                    Dashboard
                </a>
            </li>
            @if(Auth::user()->role === 'superadmin')
            <li class="w-full">
                <a href="{{ route('manage', 'admins') }}" wire:navigate class="p-3 text-base font-medium {{ request()->route('role') === 'admins' ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-800' }} w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-map-pin-user-line text-lg"></i>
                    Manage admins
                </a>
            </li>
            @endif
            @if(Auth::user()->role !== 'user')
            <li class="w-full">
                <a href="{{ route('manage', 'students') }}" wire:navigate class="p-3 text-base font-medium {{ request()->route('role') === 'students' ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-800' }} w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-user-line text-lg"></i>
                    Manage students
                </a>
            </li>
            @endif
            @if(Auth::user()->role === 'superadmin')
            <li class="w-full">
                <a href="{{ route('manage', 'pages') }}" wire:navigate class="p-3 text-base font-medium {{ request()->route('role') === 'pages' ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-800' }} w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-settings-line text-lg"></i>
                    Page settings
                </a>
            </li>
            @endif
            <li class="w-full">
                <a href="{{ route('manage', 'courses') }}" wire:navigate class="p-3 text-base font-medium {{ request()->route('role') === 'courses' ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-800' }} w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-book-marked-line text-lg"></i>
                    Courses
                </a>
            </li>
            @if(Auth::user()->role !== 'user')
            <li class="w-full">
                <a href="{{ route('manage', 'enrollments') }}" wire:navigate class="p-3 text-base font-medium {{ request()->route('role') === 'enrollments' ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-800' }} w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-group-line text-lg"></i>
                    Enrollments
                </a>
            </li>
            @endif
            <li class="w-full">
                <a href="{{ route('manage', 'fees') }}" wire:navigate class="p-3 text-base font-medium {{ request()->route('role') === 'fees' ? 'bg-blue-500 text-white' : 'bg-blue-50 text-blue-800' }} w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-exchange-line text-lg"></i>
                    Fees status
                </a>
            </li>
        </ul>
    </nav>
</div>