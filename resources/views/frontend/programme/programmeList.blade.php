@extends('frontend.layouts.master')
@section('title', $programme->programme_full_name)
@section('content')
    {{-- <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/9.jpg') }}"
        heading="{{ $programme->programme_full_name }}" /> --}}
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/9.jpg') }}"
        heading="{{ $programme->programme_full_name }}" />

    <x-frontend.bread-crum heading="{{ $programme->programme_full_name }}" />

    

    <section>
        <div class="py-7 px-3  md:px-28">

            <div class="block md:grid grid-cols-1 lg:grid-cols-4 gap-[8rem]">

                <!-- Left Section -->
                <div class=" hidden md:block">
                    <div class="mb-4 font-slabo">
                        <!-- Tabs -->
                        <div class=" p-2 ">
                            @foreach ($programmes as $prog)
                                <div class="flex mt-1 mb-1">
                                    <div class="bg-gray-400 hover:bg-gray-600 "></div>
                                    <a href="{{ route('programme', $prog->slug) }}">
                                        <div
                                            class="text-black w-72 text-lg  font-bold tracking-wider
                                             p-4  hover:bg-[#FFC315]  border-gray-500
                                              {{ request()->is("programme/".$prog->slug) ? 'bg-[#FFC315]' : 'bg-gray-300' }}">
                                            {{ $prog->programme_short_name }}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Download Buttons -->
                    <div class="space-y-4">
                        <button class="flex items-center justify-between w-[295px] m-[7px] bg-black text-white px-4 py-2">
                            <span class="flex items-center gap-3 p-2 font-bold tracking-wide text-[18px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#FFC315]" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                    <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                    <path d="M17 18h2" />
                                    <path d="M20 15h-3v6" />
                                    <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                </svg>
                                PDF. Download
                            </span>
                        </button>
                        <button class="flex items-center justify-between w-[295px] m-[7px] bg-black text-white px-4 py-2">
                            <span class="flex p-2 items-center gap-2 text-[18px] tracking-wide font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#FFC315]" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-text-spark">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v3.5" />
                                    <path d="M9 9h1" />
                                    <path d="M9 13h6" />
                                    <path d="M9 17h3" />
                                    <path
                                        d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5" />
                                </svg>
                                PDF. Download
                            </span>
                        </button>
                    </div>

                    <!-- Contact Info -->
                    <div class="mt-8 w-[19rem]">
                       
                        <h2 class="text-xl font-bold text-gray-800 ">
                            For More Information
                            <span class="hidden md:flex text-[#FFC315] font-extrabold">_____</span>
                        </h2>

                        <ul class="space-y-2 text-gray-700 mt-4">
                            <li class="flex text-[16px] gap-1 leading-6 font-semibold p-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                                {{ systemSetting()?->phone_number }}
                            </li>
                            <li class="flex text-[16px] leading-6 font-semibold items-center p-2 gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                                {{ systemSetting()?->telephone_number }}

                            </li>
                            <li class="flex items-center text-[16px] gap-1 leading-6 p-2 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                </svg>
                                {{ systemSetting()?->email }}

                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Section -->
                <div class="col-span-3 mt-20 ml-0 md:ml-10">
                    <h1 class="text-2xl md:text-[28px] font-semibold text-gray-900 leading-0 md:leading-5 mb-4">
                        {{ $programme->programme_full_name }}

                    </h1>
                    <p class="text-2xl md:text-[28px] font-semibold text-gray-900 leading-0 md:leading-5 mb-4">
                        {{ $programme->programme_short_name }}· {{ $programme->university }} · {{ $programme->years }}
                        years
                    </p>

                    <div class="bg-gray-200">
                        <!-- CTA Button -->
                        <div class="pt-20 pb-12 px-2 md:px-8">
                            <button
                                class="bg-[#FFC315] hover:bg-transparent border hover:border-1 hover:text-[#FFC315] motion-ease-in  
                                hover:border-[#FFC315] text-black px-10 py-3  rounded-full  transition-all duration-300 
                                font-semibold text-xl font-laro">
                                Make a Career In IT
                            </button>
                        </div>

                        <!-- FAQ Section -->
                        <div class="px-5 pb-20 md:px-8">
                            <h2 class="font-bold leading-5 text-black text-[28px] mb-8">General Questions</h2>
                            <div class="hs-accordion-group" id="accordionGroup">
                                @foreach ($generalQuestions as $key => $generalQuestion)
                                    <div class="mt-5 hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                                        id="accordion-{{ $key }}">
                                        <button
                                            class="text-xl hs-accordion-toggle inline-flex items-center gap-x-3 w-full 
                                                   font-semibold text-start text-gray-900 py-4 px-5 hover:text-gray-500 disabled:opacity-50 
                                                   disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 
                                                   dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400 
                                                    "
                                            onclick="toggleAccordion({{ $key }})"
                                            aria-expanded="{{ $key === 0 ? 'true' : 'false' }}"
                                            aria-controls="accordion-content-{{ $key }}">
                                            <svg class="hs-accordion-active:hidden block  p-2 rounded"
                                                xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5v14"></path>
                                            </svg>
                                            <svg class="hs-accordion-active:block hidden bg-yellow-400 p-2 rounded"
                                                xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                            </svg>


                                            {{ $generalQuestion->title }}
                                        </button>

                                        <div id="accordion-content-{{ $key }}"
                                            class="hs-accordion-content text-lg text-gray-500 w-full overflow-hidden transition-[height] 
                                            duration-300 pl-[3.25rem]"
                                            role="region" aria-labelledby="accordion-{{ $key }}"
                                            style="{{ $key === 0 ? 'display: block;' : 'display: none;' }}">
                                            <div class="pb-4 px-3 ">
                                                <p class=" ml-6 ">
                                                    {!! $generalQuestion->description !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <h2 class="mt-3 mb-6 text-gray-500">
                        CURRICULAR STRUCTURE Semester wise breakdown of the course
                    </h2>
                    <div class="bg-gray-200">
                        <!-- CTA Button -->
                        <div class="block md:flex  pt-20 pb-12 px-8 gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 107px;" width="60"
                                height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                <path d="M17 18h2" />
                                <path d="M20 15h-3v6" />
                                <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                            </svg>
                            <button
                                class="bg-[#FFC315] mt-5 hover:bg-transparent border hover:border-1 hover:text-[#FFC315] motion-ease-in 
                                 hover:border-[#FFC315] text-black px-10 py-3 tracking-wider rounded-full  transition-all duration-300 font-semibold">
                                CURRICULAR STRUCTURE OF ALL SEMESTER
                            </button>
                        </div>
                        <!-- FAQ Section -->
                        <div class="px-4 pb-20">
                            <div class="block md:grid grid-cols-2 gap-4 justify-items-center items-center text-center">
                                @foreach ($programme->semesters as $semester)
                                    <div class="my-4 mt-12">
                                        <a href="{{ route('semester', $semester) }}"
                                            class="bg-[#FFC315]  hover:bg-transparent border hover:border-1 hover:text-[#FFC315] motion-ease-in hover:border-[#FFC315] text-black px-14 py-4 tracking-wider rounded-full transition-all duration-300 font-semibold">                                            {{ $semester->title }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Left Section -->
                <div class="block md:hidden">
                    <div class="mb-4">
                        <!-- Tabs -->
                        <div class="pt-5">
                            @foreach ($programmes as $index => $prog)
                                <div class="flex mt-1 mb-1">
                                    <div class="bg-gray-400 hover:bg-gray-600 w-3 md:w-1"></div>
                                 
                                    <a href="{{ route('programme', $prog->slug) }}">
                                        <div
                                            class="w-[21rem] pr-80 font-bold tracking-wider p-4
                                             {{ request()->is("programme/".$prog->slug) ? 'bg-[#FFC315]' : 'bg-gray-300 hover:bg-[#FFC315]' }} hover:bg-[#FFC315] border-gray-500">
                                            {{ $prog->programme_short_name }}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>


                    <!-- Download Buttons -->
                    <div class="space-y-4">
                        <button class="flex items-center justify-between w-[350px]  bg-black text-white px-4 py-2">
                            <span class="flex items-center gap-3 p-2 font-bold tracking-wide text-[18px]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#FFC315]" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-type-pdf">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                    <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                    <path d="M17 18h2" />
                                    <path d="M20 15h-3v6" />
                                    <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                </svg>
                                PDF. Download
                            </span>
                        </button>
                        <button class="flex items-center justify-between w-[350px]  bg-black text-white px-4 py-2">
                            <span class="flex p-2 items-center gap-2 text-[18px] tracking-wide font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#FFC315]" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-text-spark">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v3.5" />
                                    <path d="M9 9h1" />
                                    <path d="M9 13h6" />
                                    <path d="M9 17h3" />
                                    <path
                                        d="M19 22.5a4.75 4.75 0 0 1 3.5 -3.5a4.75 4.75 0 0 1 -3.5 -3.5a4.75 4.75 0 0 1 -3.5 3.5a4.75 4.75 0 0 1 3.5 3.5" />
                                </svg>
                                PDF. Download
                            </span>
                        </button>
                    </div>

                    <!-- Contact Info -->
                    <div class="mt-8">
                        <h2 class="text-xl font-bold text-gray-800 ">
                            For More Information
                        </h2>
                        <span class=" text-[#FFC315] font-extrabold">_____</span>
                        <ul class="space-y-2 text-gray-700 mt-4">
                            <li class="flex text-lg gap-1 leading-6 font-semibold p-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                                {{ systemSetting()?->phone_number }}
                            </li>
                            <li class="flex text-lg leading-6 font-semibold items-center p-2 gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                                {{ systemSetting()?->telephone_number }}

                            </li>
                            <li class="flex items-center text-lg gap-1 leading-6 p-2 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                </svg>
                                {{ systemSetting()?->email }}

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    {{-- <section>
        <div class="grid grid-cols-4 gap-4 px-6 md:px-[5.5rem] mt-24">
            <div class="border-lg">
                <a href="">
                    <div
                        class="text-black  font-bold tracking-wider
                     p-4 bg-gray-300 hover:bg-[#FFC315]  border-gray-500">
                        BCA</div>
                </a>
            </div>
            <div class="col-span-2">

            </div>

        </div>

    </section> --}}

    <script>
        function toggleAccordion(key) {
            const group = document.getElementById('accordionGroup');
            const accordions = group.querySelectorAll('.hs-accordion-content');

            accordions.forEach((content, index) => {
                if (index === key) {
                    // Toggle visibility of the clicked accordion
                    const isVisible = content.style.display === 'block';
                    content.style.display = isVisible ? 'none' : 'block';
                } else {
                    // Close other accordions
                    content.style.display = 'none';
                }
            });
        }
    </script>
@endsection
