<div class="flex items-center justify-around bg-white py-4 px-6 mx-1">
    <div class="flex ml-36 justify-end items-end h-full top-0 z-50 sticky">
        <img src="{{ setting()->logo1 }}" alt="NCMT Logo" class="h-11 w-36" />
    </div>

    <div class="flex items-center space-x-4">
        <div>
            {{-- <i class="ti ti-map-pin text-[2rem] stroke-[1] text-gray-400"></i> --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                stroke="currentColor" class="size-8 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>

        </div>
        <div>
            <p class="text-gray-800">{{ setting()->address }}</p>
            <p class="text-gray-800 ">Sunday - Friday, 6 AM to 12PM</p>
        </div>

    </div>

    <div class="flex items-center space-x-4 mr-32">
        <div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                stroke="currentColor" class="size-6 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
            </svg>

        </div>
        <div>
            <p class="text-gray-800 font-medium">{{ setting()->phone_number }}</p>
            <p class="text-gray-800 font-medium">&nbsp;{{ setting()->telephone_number }}</p>
        </div>
        <button
            class="bg-[#FFC315] mr-4 hover:bg-white border border-transparent hover:border-[#FFC315] hover:border-1 hover:text-[#FFC315] text-black font-medium py-2 px-4 rounded-full">
            Request a call back
        </button>

    </div>
</div>
<!-- Navigation Bar -->
<nav class="bg-black text-white top-0 z-50 sticky">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Left Navigation Links -->
            <div class="flex space-x-6">
                <a href="{{route('welcome')}}"
                    class="hover:text-yellow-500 relative after:content-['|'] after:ml-6 after:text-gray-500">Home</a>

                <div class="relative group">
                    <button
                        class="hover:text-yellow-500 focus:outline-none after:content-['|']  after:ml-6 after:text-gray-500">
                        Who We Are</button>
                    <div
                        class="absolute hidden group-hover:block group-focus-within:block bg-black text-gray-500 py-2 mt-4 shadow-lg  w-48">
                        <a href="{{ route('aboutus') }}"
                            class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">About Us</a>
                        <a href="{{route('mission')}}" class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">Mission &
                            Vision</a>

                    </div>
                </div>



                <a href="{{route('whyNcmt')}}"
                    class="hover:text-yellow-500 relative after:content-['|'] after:ml-6 after:text-gray-500">Why
                    NCMT</a>

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button
                        class="hover:text-yellow-500 focus:outline-none after:content-['|']  after:ml-6 after:text-gray-500">Our
                        Programme</button>
                    <div
                        class="absolute hidden group-hover:block group-focus-within:block bg-black text-gray-500 py-2 mt-4 shadow-lg  w-48">
                        <a href="#" class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">Programme 1</a>
                        <a href="#" class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">Programme 2</a>
                        <a href="#" class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">Programme 3</a>
                    </div>
                </div>

                <a href="#"
                    class="hover:text-yellow-500 relative after:content-['|'] after:ml-6 after:text-gray-500">
                    Career Counselling
                </a>
                <a href="#" class="hover:text-yellow-500">Contact Us</a>
            </div>

            <!-- Social Icons -->
            <div class="flex space-x-4">
                <a href="#" class="hover:text-yellow-500">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="hover:text-yellow-500">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <div class="flex space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                    <path d="M10 9l5 3l-5 3z" />
                </svg>
            </div>
        </div>
    </div>
</nav>
