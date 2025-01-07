<footer class="bg-black text-gray-200 py-4 px-5 md:px-28  text-center md:text-left font-poppins">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- About Section -->
        <div class="mt-5 md:mt-12 w-80">
            <div class="  rounded-full flex items-center justify-center md:justify-start">
                <img src="{{ systemSetting()?->logo2 }}" class="h-34 w-34" alt="">
            </div>

            <div class="text-gray-400 text-justify text-base mt-10">
                {!! systemSetting()?->footer_description !!}
            </div>
        </div>

        <!-- Quick Links -->
        <div class="mt-5 ml-0 md:ml-16 md:mt-12 ">
            <h3 class="text-xl font-semibold mb-4  flex items-center justify-center md:justify-start">
                Quick Links
                <div class="ml-2 w-10 h-[1px] bg-yellow-500 mt-3"></div>
            </h3>
            <ul class="text-gray-400 space-y-2 text-base">
                <li><a href="{{ route('welcome') }}" class="hover:text-yellow-500">Home</a></li>
                <li><a href="{{ route('aboutus') }}" class="hover:text-yellow-500">About Us</a></li>
                <li><a href="{{ route('whyNcmt') }}" class="hover:text-yellow-500">Why NCMT</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-yellow-500">Request Call Back</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact Us</a></li>
            </ul>
        </div>

        <!-- Our Programme -->
        <div class="mt-5 md:mt-12 ">
             <h3 class="text-xl font-semibold mb-4  flex items-center justify-center md:justify-start">
                Our Programme
                <div class="ml-2 w-10 h-[1px] bg-yellow-500 mt-3"></div>
            </h3>
            <ul class="text-gray-400 space-y-2 text-base">
                @foreach (programmes() as $programme)
                    <li><a href="{{ route('programme', $programme) }}" class="hover:text-yellow-500">{{ $programme->programme_short_name }}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- Get In Touch -->
        <div class="mt-5 md:mt-12">
             <h3 class="text-xl font-semibold mb-4  flex items-center justify-center md:justify-start ">
                Get In Touch
                <div class="ml-2 w-10 h-[1px] bg-yellow-500 mt-3"></div>
            </h3>
            <ul class="text-gray-400 space-y-2">
                <li class="text-[18px]">{{ systemSetting()?->telephone_number }}</li>
                <li class="text-[18px]">{{ systemSetting()?->phone_number }}</li>
                <li>{{ systemSetting()?->address }}</li>
                <li>Sunday - Friday, 6 AM to 12 PM</li>
            </ul>
            <!-- Social Media -->
            <div class="mt-5 space-x-4 flex items-center justify-center md:justify-start">
                <a href="{{ systemSetting()?->facebook_url }}" target="_blank"
                    class="h-10 w-10 bg-white text-black rounded-full flex items-center justify-center hover:bg-yellow-500 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg>
                </a>
                <a href="{{ systemSetting()?->youtube_url }}" target="_blank"
                    class="h-10 w-10 bg-white text-black rounded-full flex items-center justify-center hover:bg-yellow-500 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                        <path d="M10 9l5 3l-5 3z" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
    <div class="mt-4 mb-4">
        <hr class="text-gray-500">
        <div class="text-sm flex justify-between justify-items-end">
            <p class="mt-2">© Copyright <span class="text-[#FFC315]"><a href="">NCMT</a></span> 2020. All right
                reserved.</p>
            <p class="mt-2">Developed by <span class="text-[#FFC315]"><a href="">NCMT</a></span></p>
        </div>
    </div>
</footer>
