<div>
    <div class="flex flex-row justify-center items-center bg-gray-800 py-3">
        <a wire:navigate href="{{ route('dashboard', request()->segment(3)) }}">
            <img src="{{ asset('assets/images/demoadmin-image.jpg') }}" alt="demo-dashboard-user-image" loading="lazy" class="my-2 h-25 shadow rounded-full bg-white">
        </a>
    </div>
    <nav role="navigation" class="pb-5">
        <ul>
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" wire:navigate class="p-3 text-base font-medium bg-blue-500 text-white w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-apps-line text-lg"></i>
                    Dashboard
                </a>
            </li>
            @if(Auth::user()->type !== 'user')
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" wire:navigate class="p-3 text-base font-medium bg-blue-50 text-blue-800 w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-settings-line text-lg"></i>
                    Page settings
                </a>
            </li>
            @endif
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" wire:navigate class="p-3 text-base font-medium bg-blue-50 text-blue-800 w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-book-marked-line text-lg"></i>
                    Courses
                </a>
            </li>
            @if(Auth::user()->type !== 'user')
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" wire:navigate class="p-3 text-base font-medium bg-blue-50 text-blue-800 w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-group-line text-lg"></i>
                    Enrollments
                </a>
            </li>
            @endif
            <li class="w-full">
                <a href="{{ route('dashboard', request()->segment(3)) }}" wire:navigate class="p-3 text-base font-medium bg-blue-50 text-blue-800 w-full flex flex-row items-center gap-2 border-b border-white">
                    <i class="ri-exchange-line text-lg"></i>
                    Fees update
                </a>
            </li>
        </ul>
    </nav>
</div>