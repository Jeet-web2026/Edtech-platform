<div>
    @section('extrascss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body .events-slide .slick-prev,
        .events-slide .slick-next {
            height: 30px;
            background-color: #2e1b7e;
            width: 30px;
            position: absolute;
            border-radius: 5px;
        }

        body .events-slide .slick-prev {
            top: -22%;
            left: 94%;
        }

        body .events-slide .slick-next {
            top: -22%;
            right: 1%;
        }

        body .slick-next:hover,
        .slick-next:focus {
            background-color: #2e1b7e;
        }
    </style>
    @endsection

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
                    <h2 class="text-3xl capitalize font-semibold text-[#2e1b7e]">our most popular courses</h2>
                    <p class="text-base text-[#2e1b7e] opacity-75">Advance your tech career with our top software development courses.</p>
                </div>
                <div class="flex flex-row items-center gap-4">
                    <p class="text-base me-4 text-[#2e1b7e]">Sort By</p>
                    <button class="bg-blue-100 px-4 py-1.5 rounded cursor-pointer text-[#2e1b7e]">Language<i class="ri-arrow-down-s-line ms-3"></i></button>
                    <button class="bg-blue-100 px-4 py-1.5 rounded cursor-pointer text-[#2e1b7e]">Topics<i class="ri-arrow-down-s-line ms-3"></i></button>
                    <button class="bg-blue-100 px-4 py-1.5 rounded cursor-pointer text-[#2e1b7e]">Date posted<i class="ri-arrow-down-s-line ms-3"></i></button>
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

    {{--upcoming events--}}
    <section class="w-full">
        <div class="container mx-auto py-8">
            <div class="flex flex-col lg:flex-row">
                <div class="flex flex-col gap-3">
                    <h2 class="text-4xl font-semibold text-[#2e1b7e]">Upcoming events</h2>
                    <p class="text-[#2e1b7e] opacity-75">Stay updated for our upcoming events</p>
                </div>
            </div>
            <div class="events-slide mt-5">
                @for( $i = 7; $i >= 0; $i-- )
                <div class="px-3 pb-18">
                    <livewire:eventscard />
                </div>
                @endfor
            </div>
            <div class="flex justify-center items-center">
                <a href="" class="border text-[#2e1b7e] p-5 py-2 rounded-sm hover:bg-[#2e1b7e] hover:text-white duration-300 transition ease-in-out">Show all events<i class="ri-arrow-right-up-line ms-2"></i></a>
            </div>
        </div>
    </section>
    {{--upcoming events--}}

    {{--top categories--}}
    <section class="w-full bg-[#2e1b7e08]">
        <div class="container mx-auto py-8 relative">
            <h2 class="text-4xl text-[#2e1b7e] font-semibold">Top categories</h2>
            <p class="text-[#2e1b7e] opacity-75 mt-3">Explore our top category courses for your career</p>
            <div class="top-categories my-5">
                @for( $i = 8; $i >= 0; $i-- )
                <a href="#" class="p-3">
                    <livewire:topcategories />
                </a>
                @endfor
            </div>
            <a href="" class="border text-[#2e1b7e] absolute right-0 top-10 p-5 py-2 rounded-sm hover:bg-[#2e1b7e] hover:text-white duration-300 transition ease-in-out">Show all categories<i class="ri-arrow-right-up-line ms-2"></i></a>
        </div>
    </section>
    {{--top categories--}}

    {{--testimonials--}}
    <section class="w-full">

    </section>
    {{--testimonials--}}

    @section('extrajs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.events-slide').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.top-categories').slick({
                dots: false,
                infinite: true,
                autoplay: true,
                autoplayspeed: 1000,
                speed: 300,
                arrows: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
    @endsection
</div>