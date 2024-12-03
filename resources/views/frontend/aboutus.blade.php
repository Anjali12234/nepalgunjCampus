@extends('frontend.layouts.master')
@section('content')
    <section class="container mx-auto">
        <div class="relative">
            <!-- Background Image -->
            <img src="{{ asset('assets/frontend/images/background/4.jpg') }}" alt="About Us Background"
                class="w-full h-96 object-cover">

            <!-- Overlay for About Us Text -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
                <div class="pl-48 pt-48 ">
                    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4">About Us</h2>
                </div>
            </div>
        </div>


    </section>
    <section class="container mx-auto">
        <div class="bg-gray-200 border-t-1 py-5 px-6">
            <div class="max-w-7xl mx-auto flex items-center space-x-2 text-sm">

                <a href="#" class="text-yellow-500 font-semibold hover:underline">Home</a>

                <span class="text-gray-400 font-semibold">></span>

                <span class="text-gray-500 font-semibold">About Us</span>
            </div>
        </div>

        <div class="bg-gray-50 py-16 px-6">
            <div class="max-w-5xl py-5 px-6 flex space-x-8">
                <!-- Main Content -->
                <div class="ml-14">
                    <!-- Title -->
                    <h2 class="text-3xl font-bold text-gray-800">
                        Welcome to Our NCMT
                        <span class="text-[#FFC315] font-extrabold">___</span>
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 mt-6 leading-relaxed text-[20px] font-lora">
                        Nepalgunj Campus of Management & Technology (NCMT), a modern campus, is established with an aim to
                        significantly contribute to shape the career of +2 graduates in the field of IT and Computing,
                        affiliated
                        to Tribhuwan University, was established in 2013 AD and promoted by a group of experienced and
                        dedicated
                        academicians, computer engineers, IT experts, and management professionals of this cubical place.



                        The goal of the campus is to provide a high-quality education that will enable the students to
                        embrace
                        the challenges of the modern world and establish the foundation for a successful future. Most
                        importantly,
                        the course taught offers both theoretical and practical applications where students are encouraged
                        to
                        apply their classroom instructions.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
