<footer class="bg-black text-gray-500 py-4  px-36">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- About Section -->
        <div>
            <div class="flex items-center">
                <div class=" h-40 w-40 rounded-full flex items-center justify-center">
                    <img src="{{ setting()->logo1 }}" alt="">
                </div>

            </div>
            <p class="text-gray-400 text-justify">
                {!! setting()->footer_description !!}
            </p>
        </div>

        <!-- Quick Links -->
        <div class="mt-12">
            <h3 class="text-lg font-bold mb-4  flex items-center">
                Quick Links
                <div class="ml-2 w-5 h-[3px] bg-yellow-500"></div>
            </h3>
            <ul class="text-gray-400 space-y-2">
                <li><a href="#" class="hover:text-yellow-500">Home</a></li>
                <li><a href="#" class="hover:text-yellow-500">About Us</a></li>
                <li><a href="#" class="hover:text-yellow-500">Why NCMT</a></li>
                <li><a href="#" class="hover:text-yellow-500">Request Call Back</a></li>
                <li><a href="#" class="hover:text-yellow-500">Contact Us</a></li>
            </ul>
        </div>

        <!-- Our Programme -->
        <div class="mt-12">
            <h3 class="text-lg font-bold mb-4 flex items-center">
                Our Programme
                <div class="ml-2 w-5 h-[3px] bg-yellow-500"></div>
            </h3>
            <ul class="text-gray-400 space-y-2">
                <li><a href="#" class="hover:text-yellow-500">BCA</a></li>
                <li><a href="#" class="hover:text-yellow-500">BSC.CsIT</a></li>
            </ul>
        </div>

        <!-- Get In Touch -->
        <div class="mt-12">
            <h3 class="text-lg font-bold mb-4 flex items-center">
                Get In Touch
                <div class="ml-2 w-5 h-[3px] bg-yellow-500"></div>
            </h3>
            <ul class="text-gray-400 space-y-2">
                <li class="text-[18px]">{{setting()->telephone_number}}</li>
                <li class="text-[18px]">{{setting()->phone_number}}</li>
                <li>{{setting()->address}}</li>
                <li>Sunday - Friday, 6 AM to 12 PM</li>
            </ul>
            <!-- Social Media -->
            <div class="mt-5 flex space-x-4">
                <a href="#"
                    class="h-10 w-10 bg-white text-black rounded-full flex items-center justify-center hover:bg-yellow-500 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg>
                </a>
                <a href="#"
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
