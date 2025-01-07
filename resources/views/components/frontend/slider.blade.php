@props(['sliders'])

<!-- Carousel container -->
<div class="relative w-full h-[500px] overflow-hidden">
    <div class="relative h-full flex transition-transform duration-700 ease-in-out" id="carousel-container">
        @foreach ($sliders as $slider)
            <div class="w-full h-full flex-shrink-0 relative parallax-slide">
                <img src="{{ $slider->image }}" alt="slider1" class="w-full h-full object-cover parallax-image">
                <div class="absolute inset-0 flex flex-col justify-center  bg-black bg-opacity-50 px-8 sm:px-16 lg:px-24">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl text-white font-bold" >{{ $slider->title }}</h1>
                    <p class="text-lg sm:text-xl text-orange-600 mt-4" >NCMT Centers provides students with safe and innovative
                         spaces</p>
                    <div class="block md:flex flex-wrap  mt-3" >
                        <a class="bg-[#FFC315] mr-4 hover:bg-transparent border border-transparent hover:border-[#FFC315] hover:border-1 hover:text-[#FFC315] text-black font-medium py-3 px-8 rounded-full">
                            Contact Us
                        </a>
                        <a class="hover:bg-[#FFC315] border hover:border-[#FFC315] border-white hover:border-1 hover:text-black text-white font-medium py-3 px-8 rounded-full">
                            Know More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Banner --}}
<div class="bg-[#FFC315] py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="ml-3 md:ml-10">
            <h2 class="text-2xl md:text-3xl font-semibold  text-gray-900 ">
                Excellent organization skills & Mastering Project Management Skills for Student Success
                <span class="text-xl">
                    <button class="hover:bg-[#FFC315] mr-4 border hover:border-[#FFC315] border-white hover:border-1 hover:text-black text-white font-medium px-10 py-3 rounded-full">
                        Request for Call
                    </button>
                    <button class="hover:bg-[#FFC315] mt-3  mr-4 ml-4 md:ml-0 border hover:border-[#FFC315] border-white hover:border-1 hover:text-black
                     text-white font-medium px-10 py-3 rounded-full">
                        Know More
                    </button>
                </span>
            </h2>
        </div>
    </div>
</div>

<script>
   
    document.addEventListener("DOMContentLoaded", () => {
        const container = document.getElementById("carousel-container");
        let index = 1;
        let slideWidth = container.clientWidth;

        const slides = Array.from(container.children);

        container.appendChild(slides[0].cloneNode(true));
        container.insertBefore(slides[slides.length - 1].cloneNode(true), slides[0]);

        container.style.transform = `translateX(-${slideWidth}px)`;

        window.addEventListener("resize", () => {
            slideWidth = container.clientWidth;
            container.style.transform = `translateX(-${index * slideWidth}px)`;
        });

        const nextSlide = () => {
            index++;
            container.style.transition = "transform 0.7s ease-in-out";
            container.style.transform = `translateX(-${index * slideWidth}px)`;

            container.addEventListener("transitionend", () => {
                if (index === slides.length + 1) {
                    container.style.transition = "none";
                    index = 1;
                    container.style.transform = `translateX(-${index * slideWidth}px)`;
                }
            }, {
                once: true
            });
        };

        const prevSlide = () => {
            index--;
            container.style.transition = "transform 0.7s ease-in-out";
            container.style.transform = `translateX(-${index * slideWidth}px)`;

            container.addEventListener("transitionend", () => {
                if (index === 0) {
                    container.style.transition = "none";
                    index = slides.length;
                    container.style.transform = `translateX(-${index * slideWidth}px)`;
                }
            }, {
                once: true
            });
        };

        setInterval(nextSlide, 5000); // 5-second interval
    });
</script>

<style>
    .parallax-image {
        will-change: transform;
        backface-visibility: hidden;
        transition: transform 0.2s ease-out;
    }
</style>
