@extends('frontend.layouts.master')
@section('content')
    <section class="">
        <div class="relative">
            <!-- Background Image -->
            <img src="{{ asset('assets/frontend/images/background/4.jpg') }}" alt="About Us Background"
                class="w-full h-96 object-cover">

            <!-- Overlay for About Us Text -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
                <div class="py-7 px-32">
                    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4">About Us</h2>
                </div>
            </div>
        </div>


    </section>
    <section class="">
        <div class="bg-gray-200 border-t-1 py-7 px-6">
            <div class="max-w-7xl mx-auto flex items-center space-x-2 text-lg">

                <a href="#" class="text-yellow-500 font-semibold hover:underline">Home</a>

                <span class="text-gray-400 font-semibold">></span>

                <span class="text-gray-500 font-semibold">About Us</span>
            </div>
        </div>

        <div class="bg-gray-50 py-7 px-6 ">
            <div class="max-w-7xl py-7 px-6  ">
                <!-- Main Content -->
                <div class="ml-14">
                    <!-- Title -->
                    <h2 class="text-5xl font-bold text-gray-800">
                        Welcome to Our NCMT
                        <span class="text-[#FFC315] font-extrabold">___</span>
                    </h2>

                    <!-- Description -->
                    <div class="mt-10 text-xl text-justify text-gray-800">

                        {!!$about->description!!}
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
