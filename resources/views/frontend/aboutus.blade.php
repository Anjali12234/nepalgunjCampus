@extends('frontend.layouts.master')
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="About Us" />


    <x-frontend.bread-crum heading="About Us" />

    <section>
        <div class=" py-7 px-7  md:px-28">
            <!-- Main Content -->
            <div class="">
                <!-- Title -->
                <h2 class="text-3xl font-bold text-gray-800 flex">
                    Welcome to Our NCMT
                    <span class="hidden md:flex text-[#FFC315] font-extrabold">_____</span>
                </h2>

                <!-- Description -->
                <div class="mt-10 text-xl text-justify text-gray-800 leading-relaxed">

                    {!! $about?->description !!}
                </div>

            </div>
        </div>
    </section>
    <div class="flex flex-col md:flex-row items-center md:items-start bg-[#292929] text-white mt-5">
        <!-- Left Section -->
        <div class="">
            <img src="{{ asset('assets/frontend/images/resource/image-1.jpg') }}" alt="Workspace"
                class="w-full md:w-[40rem] h-full md:h-[32rem] object-cover " />
        </div>

        <!-- Right Section -->
        <div class="w-full md:w-1/2 lg:w-2/3 mt-6 md:mt-0 md:pl-10 pt-0 md:pt-12 px-0 md:px-8">
            <!-- Title -->
            <div class="ml-5 md:ml-12 mb-4">
                <h2 class="text-4xl font-bold mb-4">
                    How We Are Different From Others!
                </h2>
                <!-- Subtitle -->
                <h3 class="text-xl font-semibold mb-2 text-gray-400 mt-5">Our Exposure</h3>

                <!-- List -->
                <ul class="space-y-2 text-gray-400 mt-5 text-base">
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2">⮞</span> Student Club
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2 mt-3">⮞</span> CENTERS AND LABS
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2  mt-3">⮞</span> EVENTS AND ACTIVITIES
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2  mt-3">⮞</span> EXCHANGE & EXPOSURE
                    </li>
                </ul>

                <!-- Features Section -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mt-8 border-t border-gray-700 pt-4">
                    <!-- Feature 1 -->
                    <div class="flex items-center space-x-2">
                        <span class="text-5xl font-mono">🎯</span>
                        <span class="text-[20px]">Strong organization and <br> Structure</span>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-center space-x-2">
                        <span class="text-5xl">👥</span>
                        <span class="text-[20px]">Academic <br> Tone</span>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-center space-x-2">
                        <span class="text-5xl">📚</span>
                        <span class="text-[20px]">Academic <br> Research</span>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex items-center space-x-2">
                        <span class="text-5xl">🖋️</span>
                        <span class="text-[20px]">Revised and <br> Polished Drafts</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-frontend.gallery-slider />

    <section class="py-7 px-7  md:px-5  bg-white">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3">
                <div class="pb-10 text-center">
                    <h2 class="text-4xl font-bold   text-gray-900">Our Team</h2>
                    <p class="text-lg  text-[#FFC315] pr-24 font-extrabold">_______</p>
                </div>
            </div>

            <div class="w-full md:w-2/3">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <!-- Team Member 1 -->
                    @foreach ($teachers as $teacher)
                    <a href="{{route('teacher',$teacher)}}">
                        <div class="flex flex-col items-center text-center">
                            <img src="{{ $teacher->image }}" alt="{{$teacher->teacher_name}}"
                                class="w-[270px] h-[180px] object-cover  mb-4">
                            <h3 class="text-xl font-semibold text-gray-900 hover:text-[#FFC315]">Mr. {{$teacher->teacher_name}}
                                <span>_____</span></h3>
                            <p class="text-sm text-gray-500">{{$teacher->faculty_name}}</p>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
