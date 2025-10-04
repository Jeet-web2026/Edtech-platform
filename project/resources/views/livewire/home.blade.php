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
                    <p class="text-base opacity-75">Advance your tech career with our top software development courses.</p>
                </div>
                <div class="flex flex-row items-center gap-4">
                    <p class="text-base me-4">Sort By</p>
                    <button class="bg-gray-200 px-4 py-1.5 rounded cursor-pointer">Language<i class="ri-arrow-down-s-line ms-3"></i></button>
                    <button class="bg-gray-200 px-4 py-1.5 rounded cursor-pointer">Topics<i class="ri-arrow-down-s-line ms-3"></i></button>
                    <button class="bg-gray-200 px-4 py-1.5 rounded cursor-pointer">Date posted<i class="ri-arrow-down-s-line ms-3"></i></button>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-4 items-center gap-5 mt-5">
                @for ($i = 7; $i >= 0; $i--)
                <livewire:coursecard />
                @endfor
            </div>
            <div class="flex justify-center items-center w-full mt-9">
                <a href="" class="border px-6 py-2 rounded text-[#2e1b7e] hover:bg-[#2e1b7e] hover:text-white duration-400 ease-in-out transition">See all courses</a>
            </div>
        </div>
    </section>
    {{--courses part--}}

    {{---path finder--}}
    <section class="w-full bg-[url('{{ asset('assets/images/bg-img.jpg') }}')] h-84 relative flex justify-center items-center">
        <div class="absolute h-full w-full top-0 left-0 bg-[#00000085] z-10"></div>
        <div class="container mx-auto relative flex flex-col justify-center items-center z-20 gap-3 pt-12">
            <h2 class="text-4xl text-white font-medium">Find the right learning path for you!</h2>
            <p class="text-white text-center w-2/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facere quibusdam provident fuga amet, enim earum sed corporis, veritatis ducimus dolorum consectetur, ipsum ipsa praesentium.</p>
            <a href="" class="border text-white px-5 py-2 rounded mt-4 hover:bg-white hover:text-[#2e1b7e] hover:border-white transition ease-in-out duration-300">Browse all</a>
        </div>
    </section>
    {{---path finder--}}
</div>