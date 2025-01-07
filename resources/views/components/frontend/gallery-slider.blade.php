 <!-- Custom Style -->
 <style>
    .gallery-top .swiper-slide {
        height: fit-content;
        margin-right: 0px;
    }


    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after,
    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: ' ';
    }

    .swiper-button-next svg,
    .swiper-button-prev svg {
        width: 20px;
        height: 20px;
    }

    .swiper-button-next,
    .swiper-button-prev {

        margin-top: 1px;
    }

    .swiper-button-prev,
    .swiper-rtl .swiper-button-next {
        left: auto;
    }

    .swiper-button-next,
    .swiper-rtl .swiper-button-prev {
        right: 10;
    }

    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        bottom: var(--swiper-pagination-bottom, px);
        z-index: 10;
        color: transparent;
        left: 14px;
    }

    .swiper-pagination-current {
        color: black;
    }

    .gallery-top .swiper-box {
        opacity: 0;
        transform: scale(1);
    }

    .gallery-top .swiper-box {
        transform: scale(0.9);
        opacity: 1;
    }
</style>
<section class="py-20 bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-5 overflow-hidden">
        <div class="pb-10">
            <h2 class="w-full  text-gray-900 text-4xl font-bold font-manrope leading-loose pb-2.5">Working On Current
                Technologies <span class="text-[#FFC315] font-extrabold">
                    ____
                </span>
            </h2>
            <p class="w-full  text-gray-600 text-lg font-lora leading-8">Find Here Our Experimental Tools.
                our gallery's intimate space.</p>
        </div>

        <!--Slider Wrapper-->
        <div class="mx-auto w-auto relative">
            <!-- Left button -->
            <button id="slider-button-left"
                class="swiper-button-prev w-11 h-11 p-3 xl:flex  shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] items-center justify-center border border-gray-300 rounded-lg group hover:bg-gray-900 transition-all duration-700 ease-in-out absolute bottom-4 left-4">
                <svg class="text-gray-900 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M12.5002 14.9999L7.50005 9.99973L12.5032 4.99658" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="swiper-container gallery-top w-full md:w-[1028px] mx-auto xl:overflow-hidden pt-6">
                <div class="swiper-wrapper w-max mx-0 md:mx-auto mb-5 flex gap-[11.5rem] md:gap-2">
                    <div class="swiper-slide w-96 md:max-w-[319px] grid">
                        <img class=" w-[15.5rem] md:w-full h-[10rem]  object-cover"
                            src="{{ asset('assets/frontend/images/resource/services/2.jpg') }}" alt="Watch image" />

                        <div class="swiper-box mx-auto relative flex-col justify-center items-center gap-1 flex mt-5">
                            <h5 class="w-full  text-gray-900 text-xl font-medium leading-loose">
                                Asp.net,C#,VB.Net,MVC,etc. </h5>

                        </div>
                    </div>
                    <div class="swiper-slide w-96 md:max-w-[319px]  grid">
                        <img class=" w-[15.5rem] md:w-full h-[10rem]   object-cover"
                            src="{{ asset('assets/frontend/images/resource/services/6.jpg') }}" alt="Watch image" />

                        <div class="swiper-box mx-auto relative flex-col justify-center items-center gap-1 flex mt-5">
                            <h5 class="w-full  text-gray-900 text-xl font-medium leading-loose">
                                php, laravel,codingneter,etc. </h5>

                        </div>
                    </div>
                    <div class="swiper-slide w-96 md:max-w-[319px] grid">
                        <img class=" w-[15.5rem] md:w-full h-[10rem]  object-cover"
                            src="{{ asset('assets/frontend/images/resource/services/2.jpg') }}" alt="Watch image" />

                        <div class="swiper-box mx-auto relative flex-col justify-center items-center gap-1 flex mt-5">
                            <h5 class="w-full  text-gray-900 text-xl font-medium leading-loose">
                                Asp.net,C#,VB.Net,MVC,etc. </h5>

                        </div>
                    </div>
                    <div class="swiper-slide w-96 md:max-w-[319px] grid">
                        <img class=" w-[15.5rem] md:w-full h-[10rem]  object-cover"
                            src="{{ asset('assets/frontend/images/resource/services/6.jpg') }}" alt="Watch image" />

                        <div class="swiper-box mx-auto relative flex-col justify-center items-center gap-1 flex mt-5">
                            <h5 class="w-full  text-gray-900 text-xl font-medium leading-loose">
                                php, laravel,codingneter,etc. </h5>

                        </div>
                    </div>
                    <div class="swiper-slide w-96 md:max-w-[319px] grid">
                        <img class=" w-[15.5rem] md:w-full h-[10rem]  object-cover"
                            src="{{ asset('assets/frontend/images/resource/services/2.jpg') }}" alt="Watch image" />

                        <div class="swiper-box mx-auto relative flex-col justify-center items-center gap-1 flex mt-5">
                            <h5 class="w-full  text-gray-900 text-xl font-medium leading-loose">
                                Asp.net,C#,VB.Net,MVC,etc. </h5>

                        </div>
                    </div>
                    <div class="swiper-slide w-96 md:max-w-[319px] grid">
                        <img class=" w-[15.5rem] md:w-full h-[10rem]  object-cover"
                            src="{{ asset('assets/frontend/images/resource/services/6.jpg') }}" alt="Watch image" />

                        <div class="swiper-box mx-auto relative flex-col justify-center items-center gap-1 flex mt-5">
                            <h5 class="w-full  text-gray-900 text-xl font-medium leading-loose">
                                php, laravel,codingneter,etc. </h5>

                        </div>
                    </div>
                   

                </div>
            </div>
            <!-- Right button -->
            <button id="slider-button-right"
                class="swiper-button-next w-11 h-11 p-3 xl:flex  shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] items-center justify-center border border-gray-300 rounded-lg group hover:bg-gray-900 transition-all duration-700 ease-in-out absolute bottom-4 right-4">
                <svg class="text-gray-900 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M7.50301 4.99637L12.5032 9.99657L7.50006 14.9997" stroke="currentColor"
                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>

</section>
<!-- Initialize Swiper -->
<script>
    $(document).ready(function() {
        var mySwiper = new Swiper(".gallery-top", {
            spaceBetween: 30,
            slidesPerView: 4, // Show 4 images
            loop: true, // Enable loop for continuous scrolling
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1920: {
                    slidesPerView: 4, // 4 slides for large screens
                    spaceBetween: 20,
                },
                1400: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                900: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
            },
        });
    });
</script>
