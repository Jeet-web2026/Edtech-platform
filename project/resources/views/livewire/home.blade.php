<div>
    {{--main part--}}
    <main class="w-full bg-[url('{{ asset('assets/images/bg-img.jpg') }}')] bg-cover relative flex justify-center items-center">
        <div class="absolute h-full w-full top-0 left-0 bg-[#000000b3] z-10"></div>
        <div class="container flex flex-col justify-center items-center h-screen w-full">
            <h1 class="text-5xl font-semibold text-white leading-13.5 capitalize w-2xl text-center z-20 mt-20">learn your way with pathshala to <span class="text-[#603CF6]">something</span></h1>
            <p class="text-white capitalize z-20 mt-3 text-base">with 100% placement assurance</p>
            <div class="flex flex-row items-center justify-between bg-white z-20 mt-6 pe-2.5 shadow ps-4 py-2 rounded-4xl">
                <input type="text" placeholder="Search your courses" class="w-110 outline-none ps-4">
                <button type="submit" class="cursor-pointer bg-[#603CF6] px-4 py-2 text-white text-base rounded-3xl"><i class="ri-search-2-line text-white font-medium me-1"></i>Search</button>
            </div>
        </div>
    </main>
    {{--main part--}}

    {{--courses part--}}
    <section class="w-full bg-grey-400 py-8">
        <div class="container mx-auto">
            <div class="flex flex-row justify-between items-center">
                <div class="flex flex-col gap-2">
                    <h2 class="text-3xl capitalize font-semibold">our most popular courses</h2>
                    <p class="text-base opacity-75">Our best courses</p>
                </div>
                <div class="flex flex-row items-center">
                    
                </div>
            </div>
        </div>
    </section>
    {{--courses part--}}
</div>