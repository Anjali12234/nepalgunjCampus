<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Welcome to NCMT')</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="font-poppins">
    @include('frontend.layouts.header')

    @yield('content')

    <div class="fixed left-[-15px] top-1/2 transform -translate-y-1/2 z-50 group">
        <a href="{{ systemSetting()?->youtube_url }}" target="_blank"
            class="flex items-center mb-2 bg-red-600 text-white border border-red-700 rounded-r-full shadow-lg px-4 gap-2 py-4
             transition-all duration-300 hover:pl-6">
            <span class="hidden group-hover:inline text-sm font-medium transition-all duration-300">
                YouTube
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="w-5 h-5 mr-0 group-hover:mr-2 transition-all duration-300" viewBox="0 0 24 24">
                <path
                    d="M23.498 6.186a2.83 2.83 0 0 0-1.988-1.994C19.267 3.673 12 3.673 12 3.673s-7.267 0-9.51.519a2.83 2.83 0 0 0-1.988 1.994C0 8.516 0 12 0 12s0 3.484.502 5.814a2.83 2.83 0 0 0 1.988 1.994c2.243.519 9.51.519 9.51.519s7.267 0 9.51-.519a2.83 2.83 0 0 0 1.988-1.994C24 15.484 24 12 24 12s0-3.484-.502-5.814zm-14.006 9.12V8.694l6.26 3.306-6.26 3.306z" />
            </svg>

        </a>
        <a href="#" target="_blank"
            class="flex items-center bg-orange-400 text-whit e border border-red-700 rounded-r-full shadow-lg px-4 py-4 gap-2 transition-all
             duration-300 hover:pl-6">
            <span class="hidden group-hover:inline text-base font-medium transition-all duration-300">
                Brochures
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 text-red-500 mr-2"
                viewBox="0 0 24 24">
                <path d="M19 2H8c-1.1 0-2 .9-2 2v16l4-4h9c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 12H9.17L8 14.17V4h11v10z">
                </path>
            </svg>

        </a>

    </div>
    <div id="apply-box" class="fixed right-0 top-1/2 transform -translate-y-1/2 z-50 hidden md:flex flex-col items-center ">
        <!-- Hanging Box -->
        <div class="relative w-48 bg-white border border-gray-300 shadow-md p-1">
            <!-- Close Button -->
            <button id="close-btn" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                &times;
            </button>
            <!-- Content -->
            <div class="text-center">
                <h3 class="text-xl font-semibold text-[#777777]"> Free CEH Registration form</h3>
                <a href="{{route('registrationForm')}}" class="text-[#FFC315] hover:underline font-medium">
                    Click Here
                </a>
            </div>
        </div>
    </div>
    <div class="fixed left-4 bottom-4 z-50">
        <a href="https://wa.me/{{ systemSetting()?->phone_no }}" target="_blank"
            class="block bg-green-500 text-white motion-preset-shake  rounded-full p-4 shadow-lg hover:bg-green-600 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path
                    d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
            </svg>

        </a>
    </div>
    @include('frontend.layouts.footer')
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popup = document.getElementById("popup");
            var closeButton = document.getElementById("close-btn");

            closeButton.addEventListener("click", function() {
                popup.style.display = "none";
            });

            window.addEventListener("scroll", function() {
                if (window.pageYOffset > 100) {
                    popup.style.display = "block";
                } else {
                    popup.style.display = "none";
                }
            });
        });
    </script>


    <script>
        // Check if the modal has already been displayed
        const modalDisplayed = sessionStorage.getItem('modalDisplayed');

        if (!modalDisplayed) {
            // If the modal has not been displayed, show it and set the flag in local storage
            setTimeout(() => {
                $('#exampleModal').modal({
                    backdrop: 'static',
                    keyboard: false,
                });

                sessionStorage.setItem('modalDisplayed', 'true');
            }, 2000);
        }
    </script>
 <script src="../path/to/src/pagedone.js"></script>
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- for chatboot --}}

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6775f595af5bfec1dbe5a00d/1igicekv7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script>
        window.addEventListener('focus', function() {
            this.document.title = "Welcome to NCMT"
        })
        window.addEventListener('blur', function() {
            this.document.title = "NCMT - Online Learning Platform"
        })
    </script>
</body>