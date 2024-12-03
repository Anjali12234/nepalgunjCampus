@props(['galleries'])

<div class="bg-gray-100 py-12 sm:py-16">
    <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-2xl font-medium text-gray-900 sm:text-3xl">Life At Nepalgunj Campus <span
                    class="text-[#FFC315] font-bold">___</span> <span class="text-base"><button
                        class="bg-[#FFC315] rounded-full px-8 py-3 hover:bg-transparent border border-1 hover:text-[#FFC315] hover:border-[#FFC315]">Welcome
                        to Our Nepalgunj Campus of Management &
                        Technology</button></span></h2>

        </div>
        <div class="mt-10 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-x-6 sm:gap-y-10">
            
            @foreach($galleries as $gallery)
            <div class=" group">
                <div class="flex items-center text-white">
                    <img src="{{count($gallery->files)>0 ? $gallery->files?->random()->file_url : ''}}" alt=""
                        class="h-72 w-[23rem] transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 border border-b-[3px] border-b-[#FFC315]">
                </div>
                <h3 class="mt-3 text-lg font-medium hover:text-[#FFC315] text-gray-900">{{$gallery->title}}</h3>
                <div
                    class=" mt-2 h-[3px] w-10 bg-gray-400 font-bold  transition-all duration-300 group-hover:w-full group-hover:bg-[#FFC315]">
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</div>




<div class="relative h-96">
    <div class="relative h-full overflow-hidden">
        <!-- Image element for the background -->
        <img src="{{ asset('assets/frontend/images/background/11.jpeg') }}" alt="Background Image"
            class="absolute inset-0 w-full h-full object-cover parallax-img">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gray-700 opacity-65"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col text-white">
            <div class="relative flex items-center justify-start pl-24 mt-10">
                <!-- Heading -->
                <h1 class="text-[22px] font-lora">How We Are Different From Others!</h1>
                <div class="w-[45px] h-[2px] bg-[#FFC315] ml-8"></div>
            </div>
            <div class="pl-24 mt-4">
                <p class="font-lora text-[18px] leading-10">Student Club
                    <br>CENTERS AND LABS <br>EVENTS AND ACTIVITIES <br> EXCHANGE & EXPOSURE
                </p>
            </div>
            <div class="pl-24 mt-4 flex gap-4">
                <!-- Play Button -->
                <div class="flex items-center justify-center">
                    <div class="relative bg-transparent rounded-full p-4 border-r-2 border-b-4 border-l-2 border-[#FFC315] cursor-pointer"
                        id="playButton">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-[#FFC315]" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 4v16l13 -8z" />
                        </svg>
                    </div>
                </div>

                <!-- Popup Modal -->
                <div id="videoModal"
                    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="relative">
                            <!-- Close Button -->
                            <button id="closeModal"
                                class="absolute top-2 right-2 bg-gray-200 rounded-full p-2 hover:bg-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <!-- YouTube Video -->
                            <iframe width="800" height="400" src="https://www.youtube.com/embed/xc-4R5uJ-mI"
                                title="Career Counseling on Data Analytics, Machine Learning, Data Science & AL using Python"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <p class="font-lora text-[18px] mt-3 leading-8">Watch Intro Video
                    <br>About us
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const playButton = document.getElementById('playButton');
        const videoModal = document.getElementById('videoModal');
        const closeModal = document.getElementById('closeModal');

        // Show the modal
        playButton.addEventListener('click', () => {
            videoModal.classList.remove('hidden');
        });

        // Close the modal
        closeModal.addEventListener('click', () => {
            videoModal.classList.add('hidden');
        });
    });
</script>
<style>
    .parallax-img {
        position: fixed;
        z-index: -1;
    }
</style>
