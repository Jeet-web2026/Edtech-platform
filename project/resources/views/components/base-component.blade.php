@props(['title' => '', 'tailwindcss' => '', 'bootstrap' => '', 'remixicon' => '', 'bootstrapicon' => ''])
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if($title) {{ $title }} | @endif Pathshala | Educational platform</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    @if($tailwindcss)
    {{--tailwind css cdn--}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
    @if($bootstrap)
    {{--bootstrap css cdn--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @endif
    @if($remixicon)
    {{--remix icon css cdn--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endif
    @if($bootstrapicon)
    {{--bootstrap icon--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    @endif
    {{--base font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Figtree", sans-serif;
            font-optical-sizing: auto;
        }
    </style>
    @yield('page-style')
</head>

<body>
    <main class="w-full bg-white h-full">
        @if(session()->has('error'))
        <div class="bg-red-200 text-red-800 px-4 py-2 h-40 w-100 text-center flex justify-center items-center rounded mb-4 font-medium text-xl fixed top-[40%] z-50 left-[35%] error-popup">
            <i class="ri-error-warning-line me-1 text-2xl"></i>{{ session('error') }}
        </div>
        @endif
        @if(session()->has('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 h-40 w-100 text-center flex justify-center items-center rounded mb-4 font-medium text-xl fixed top-[40%] z-50 left-[35%] success-popup">
            <i class="ri-checkbox-circle-line me-1 text-2xl"></i>{{ session('success') }}
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
                    <div class="pt-20 px-4">
                        {{ $slot }}
                    </div>
                    <div class="bg-gray-200 w-full absolute bottom-0 left-0 py-3">
                        <p class="text-center capitalize text-sm text-gray-800"><i class="ri-copyright-line"></i>PathShala | All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @if($bootstrap)
    {{--bootstrap js cdn--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    @yield('page-scripts')
</body>

</html>