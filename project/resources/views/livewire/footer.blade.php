<div>
    <footer class="w-full bg-[#2e1b7e]">
        <div class="container mx-auto py-8">
            <div class="flex lg:flex-row flex-col justify-between gap-6">
                <div class="flex flex-col gap-3 w-2/5 pe-14">
                    <a href="/" wire:navigate class="flex flex-row items-center -mt-2">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="website_logo" class="h-15">
                    </a>
                    <p class="text-base text-white font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos sint ea quae dolore itaque perferendis, at velit asperiores nobis.</p>
                    <div class="flex justify-start items-center gap-2 mt-3">
                        <input type="text" class="p-2 border border-white outline-none text-white placeholder:text-white w-80" placeholder="Email address">
                        <button class="bg-white text-[#2e1b7e] px-4 py-2 cursor-pointer font-medium border border-white">Subscribe!</button>
                    </div>
                </div>
                <div class="flex flex-col gap-1 w-1/5">
                    <h3 class="text-xl text-white font-medium mb-5">Courses</h3>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Software developement
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Web developement
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Digital marketing
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        AI/ML
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Data scientist
                    </a>
                </div>
                <div class="flex flex-col gap-1 w-1/5">
                    <h3 class="text-xl text-white font-medium mb-5">Quick links</h3>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Why us?
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Mission vission
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Reviews
                    </a>
                </div>
                <div class="flex flex-col gap-1 w-1/5">
                    <h3 class="text-xl text-white font-medium mb-5">Other links</h3>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Social actitivies
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Upcoming webniers
                    </a>
                    <a href="" class="text-base text-white hover:text-gray-200 transition-all duration-300">
                        Our alumni
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <div class="bg-[#603CF6] py-4">
        <div class="container mx-auto flex lg:flex-row flex-col justify-between items-center">
            <div class="flex lg:flex-row flex-col items-center gap-2">
                <a href="" class="text-white text-sm font-medium">Privacy policy</a>
                <span class="text-white text-sm font-medium">|</span>
                <a href="" class="text-white text-sm font-medium">Terms & conditions</a>
            </div>
            <p class="text-white text-sm font-medium">© 2025 - {{ date('Y') }} Pathshala. All rights reserved.</p>
        </div>
    </div>
</div>