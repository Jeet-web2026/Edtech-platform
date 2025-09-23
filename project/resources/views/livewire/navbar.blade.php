<div>
    <header class="fixed w-full top-0 left-0 shadow-md">
        <div role="social-activities" class="bg-[#603CF6] py-2">
            <div class="flex lg:flex-row flex-col items-center justify-between container mx-auto">
                <div class="flex flex-row gap-3 items-center justify-start">
                    <a href="" class="items-center">
                        <i class="ri-map-pin-line text-white text-base"></i>
                        <span class="text-white text-sm">C-452, Rajarhat, Kolkata: 700120</span>
                    </a>
                    <a href="" class="items-center">
                        <i class="ri-mail-open-line text-white text-base"></i>
                        <span class="text-white text-sm">info@gmail.com</span>
                    </a>
                </div>
                <div class="flex flex-row gap-2">
                    <a href="">
                        <i class="ri-facebook-circle-line text-white text-base"></i>
                    </a>
                    <a href="">
                        <i class="ri-instagram-line text-white text-base"></i>
                    </a>
                    <a href="">
                        <i class="ri-twitter-line text-white text-base"></i>
                    </a>
                    <a href="">
                        <i class="ri-threads-line text-white text-base"></i>
                    </a>
                    <a href="">
                        <i class="ri-whatsapp-line text-white text-base"></i>
                    </a>
                    <div class="ms-3 cursor-pointer">
                        <span class="text-white text-base">Language</span>
                        <i class="ri-arrow-down-s-line text-white text-base"></i>
                    </div>
                </div>
            </div>
        </div>
        <nav role="navigation" class="py-4">
            <div class="flex flex-col lg:flex-row items-center justify-between container mx-auto">
                <a href="/" wire:navigate class="flex flex-row items-center gap-1">
                    <span class="bg-[#603CF6] text-2xl shadow-sm px-3 rounded text-white">P</span>
                    <h2 class="capitalize text-2xl font-medium">pathshala</h2>
                </a>
                <div role="navigation" class="flex lg:flex-row flex-col items-center gap-2.5">
                    <div class="flex items-center gap-1 flex-row cursor-pointer">
                        <span class="text-base text-black font-medium">Courses</span>
                        <i class="ri-arrow-down-s-line text-lg font-medium"></i>
                    </div>
                    <div class="flex items-center gap-1 flex-row cursor-pointer">
                        <span class="text-base text-black font-medium">About us</span>
                        <i class="ri-arrow-down-s-line text-lg font-medium"></i>
                    </div>
                    <div class="flex items-center gap-1 flex-row cursor-pointer">
                        <span class="text-base text-black font-medium">Forum</span>
                        <i class="ri-arrow-down-s-line text-lg font-medium"></i>
                    </div>
                    <a href="{{ route('blogs') }}" wire:navigate>
                        <span class="text-base text-black font-medium">Blogs</span>
                    </a>
                    <a href="{{ route('contact') }}" wire:navigate>
                        <span class="text-base text-black font-medium">Contact</span>
                    </a>
                    <button type="button" class="ms-2">
                        <i class="ri-search-2-line text-black font-medium"></i>
                    </button>
                    <a href="" class="mx-2">
                        <i class="ri-shopping-cart-2-line text-black font-medium"></i>
                    </a>
                    <a href="" class="ms-2 border px-3 py-1 rounded border-gray-300">
                        <i class="ri-user-3-line"></i>
                        <span class="text-base text-black font-medium">Login</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
</div>