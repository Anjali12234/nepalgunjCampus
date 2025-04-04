<div class="flex flex-wrap lg:items-center lg:justify-around bg-white py-4  ">
    <!-- Logo Section -->
    <div class="ml-[7.5rem] lg:ml-0 w-full lg:w-auto justify-center  lg:justify-end items-end h-full top-0 z-50 ">
        <a href="{{ route('welcome') }}"> <img src="{{ systemSetting()?->logo1 }}" alt="{{ systemSetting()?->name }}"
                class="h-11 w-36 lg:h-11 lg:w-44" /></a>
    </div>

    <!-- Address Section -->
    <div
        class="flex flex-col lg:flex-row items-center space-y-2 lg:space-y-0 lg:space-x-4 w-full lg:w-auto mt-4 lg:mt-0 pr-5 font-popins">
        <div class="flex justify-center lg:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                stroke="currentColor" class="size-10 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
            </svg>
        </div>
        <div class="text-center lg:text-left ">
            <p class="text-gray-800 text-sm font-semibold ">{{ systemSetting()?->address }}</p>
            <p class="text-gray-800 text-sm font-semibold ">Sunday - Friday, 6 AM to 12PM</p>
        </div>
        <div class="border-l border-gray-400 h-12 hidden md:flex"></div>
        <div class="flex justify-center lg:justify-start ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                stroke="currentColor" class="size-9 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
            </svg>
        </div>

        <div class="text-center lg:text-left">
            <p class="text-gray-800 text-sm font-semibold">{{ systemSetting()?->phone_number }}</p>
            <p class="text-gray-800 text-sm font-semibold">&nbsp;{{ systemSetting()?->telephone_number }}</p>
        </div>
        <button
            class="bg-[#FFC315] hover:bg-white border border-transparent hover:border-[#FFC315] hover:border-1 hover:text-[#FFC315] text-neutral-700 text-lg font-semibold py-2 px-4 rounded-full lg:w-auto w-full font-popins">
            Request a call back
        </button>
    </div>
</div>

<!-- Navigation Bar -->
<nav id="navbar" class="bg-black text-white top-0 z-50 sticky">
    <div class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16 gap-5">
        <!-- Navbar Logo -->
        <a href="{{ route('welcome') }}"><img id="navbar-logo" src="{{ systemSetting()?->logo1 }}"
                alt="{{ systemSetting()?->name }}" class="hidden  h-8 w-24 lg:h-10 lg:w-28" /></a>

        <!-- Mobile Menu Button -->
        <div class="flex md:hidden">
            <button id="menu-button" class="text-white hover:text-emerald-500 focus:outline-none">
                <svg class="w-12 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Links -->
        <div id="menu" class="hidden md:flex md:space-x-8 font-semibold ">
            <a href="{{ route('welcome') }}"
                class="hover:text-yellow-500 relative after:content-['|'] after:ml-6 after:text-gray-500">Home</a>
          
            <div class="relative group">
                <button
                    class="hover:text-yellow-500 focus:outline-none after:content-['|'] after:ml-6 after:text-gray-500">Who
                    We Are</button>
                <div
                    class="absolute hidden group-hover:block group-focus-within:block bg-black text-gray-500 py-2 mt-4 shadow-lg w-48">
                    <a href="{{ route('about') }}" class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">About
                        Us</a>
                    <a href="{{ route('mission') }}"
                        class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">Mission
                        & Vision</a>

                </div>
            </div>

            <a href="{{ route('whyncmt') }}"
                class="hover:text-yellow-500 relative after:content-['|'] after:ml-6 after:text-gray-500">Why
                NCMT</a>

            <!-- Dropdown Menu -->
            <div class="relative group">
                <button
                    class="hover:text-yellow-500 focus:outline-none after:content-['|'] after:ml-6 after:text-gray-500">Our
                    Programme</button>
                <div
                    class="absolute hidden group-hover:block group-focus-within:block bg-black text-gray-500 py-2 mt-4 shadow-lg w-48">
                    @foreach (programmes() as $programme)
                        <a href="{{ route('programme', $programme) }}"
                            class="block px-4 py-2 hover:bg-[#FFC315] hover:text-black">{{ $programme->programme_short_name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="relative group">
                <button
                    class="hover:text-yellow-500 focus:outline-none after:content-['|'] after:ml-6 after:text-gray-500">
                    Our Team</button>
                <div
                    class="absolute hidden group-hover:block group-focus-within:block bg-black text-gray-500 py-2 mt-4 shadow-lg w-48">
                    @foreach (\App\DepartmentEnum::cases() as $teacher)
                    <a href="{{ route('tacher.facultyMember',$teacher) }}"
                        class="block px-4 py-2 hover:bg-yellow-400
                         hover:text-gray-900 rounded-t-md transition-colors
                          duration-300">{{ $teacher->label() }}</a>
                @endforeach
                </div>
            </div>

            <a href="#"
                class="hover:text-yellow-500 relative after:content-['|'] after:ml-6 after:text-gray-500">Career
                Counselling</a>
            <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact Us</a>
        </div>

        <!-- Social Icons -->
        <div class="hidden md:flex space-x-4 ">
            <a href="{{ systemSetting()?->facebook_url }}" class="hover:text-yellow-500">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="{{ systemSetting()?->youtube_url }}" class="hover:text-yellow-500">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="{{ systemSetting()?->facebook_url }}" class="hover:text-yellow-500" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
            </a>
            <a href="{{ systemSetting()?->youtube_url }}" class="hover:text-yellow-500" target="_blank">
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

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu"
        class="md:hidden flex flex-col space-y-4 mt-4 bg-gradient-to-b from-gray-900 to-gray-700 text-gray-200 px-5 py-4 rounded-lg shadow-lg">
        <a href="{{ route('welcome') }}"
            class="hover:text-yellow-400 text-lg font-medium tracking-wide transition-colors duration-300">Home</a>

        <div>
            <button
                class="w-full text-left flex justify-between items-center hover:text-yellow-400 text-lg font-medium tracking-wide transition-colors duration-300"
                onclick="toggleDropdown('who-we-are-dropdown')">
                Who We Are
                <i id="who-we-are-icon" class="ti ti-chevron-up transform transition-transform duration-300"></i>
            </button>
            <div id="who-we-are-dropdown" class="hidden bg-gray-800 text-gray-300 mt-2 rounded-lg shadow-md">
                <a href="{{ route('about') }}"
                    class="block px-4 py-2 hover:bg-yellow-400 hover:text-gray-900 rounded-t-md transition-colors duration-300">About
                    Us</a>
                <a href="{{ route('mission') }}"
                    class="block px-4 py-2 hover:bg-yellow-400 hover:text-gray-900 rounded-b-md transition-colors duration-300">Mission
                    & Vision</a>
            </div>
        </div>


        <a href="{{ route('whyncmt') }}"
            class="hover:text-yellow-400 text-lg font-medium tracking-wide transition-colors duration-300">Why NCMT</a>

        <div>
            <button
                class="w-full text-left flex justify-between items-center hover:text-yellow-400 text-lg font-medium tracking-wide transition-colors duration-300"
                onclick="toggleDropdown('programme-dropdown')">
                Our Programme
                <i id="programme-icon" class="ti ti-chevron-up transform transition-transform duration-300"></i>
            </button>
            <div id="programme-dropdown" class="hidden bg-gray-800 text-gray-300 mt-2 rounded-lg shadow-md">
                @foreach (programmes() as $programme)
                    <a href="{{ route('programme', $programme) }}"
                        class="block px-4 py-2 hover:bg-yellow-400 hover:text-gray-900 rounded-t-md transition-colors duration-300">{{ $programme->programme_short_name }}</a>
                @endforeach
            </div>
        </div>
        <div>
            <button
                class="w-full text-left flex justify-between items-center hover:text-yellow-400 text-lg font-medium tracking-wide transition-colors duration-300"
                onclick="toggleDropdown('teacher-dropdown')">Our Team
                <i id="programme-icon" class="ti ti-chevron-up transform transition-transform duration-300"></i>
            </button>
            <div id="teacher-dropdown" class="hidden bg-gray-800 text-gray-300 mt-2 rounded-lg shadow-md">
                @foreach (\App\DepartmentEnum::cases() as $teacher)
                    <a href="{{ route('tacher.facultyMember',$teacher) }}"
                        class="block px-4 py-2 hover:bg-yellow-400
                         hover:text-gray-900 rounded-t-md transition-colors
                          duration-300">{{ $teacher->label() }}</a>
                @endforeach
            </div>
            
        </div>

        <a href="#"
            class="hover:text-yellow-400 text-lg font-medium tracking-wide transition-colors duration-300">Career
            Counselling</a>
        <a href="{{route('contact')}}"
            class="hover:text-yellow-400 text-lg font-medium tracking-wide transition-colors duration-300">Contact
            Us</a>
    </div>

</nav>

<script>
    const headerLogo = document.getElementById('header-logo');
    const navbarLogo = document.getElementById('navbar-logo');
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Show logo in navbar
            navbarLogo.classList.remove('hidden');
            headerLogo.classList.add('hidden');
        } else {
            // Show header logo
            navbarLogo.classList.add('hidden');
            headerLogo.classList.remove('hidden');
        }
    });

    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }
</script>
