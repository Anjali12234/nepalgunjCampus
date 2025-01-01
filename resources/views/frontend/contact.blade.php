@extends('frontend.layouts.master')
@section('content')

    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Get In Touch" />


    <x-frontend.bread-crum heading="Get In Touch" />

    <section>
        <div>
            <iframe src="{{ systemSetting()->map_url }}" class="w-full h-[30rem] object-cover" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-gray-50 py-7 px-6 ">
            <div class="max-w-7xl py-7 px-6  ">
                <!-- Main Content -->
                <div class="ml-14">
                    <!-- Title -->
                    <h2 class="text-5xl font-bold text-gray-800">
                        Drop us message
                    </h2>
                    <span class="text-[#FFC315] font-extrabold ">_________</span>

                    <!-- Description -->
                    <div class="mt-16 text-xl text-justify text-gray-800">

                        <h1 class="text-3xl">Make a Contact</h1>

                        <p class="text-base mt-5"> <span>Get All time support for emergency. </span> <span
                                class="text-red-600">Get Conneted with us for any urgency. </span></p>
                        <form action="{{ route('admin.contact.store') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="grid grid-cols-2 gap-4 mt-5">
                                <div>
                                    <input type="text" name="name"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:ring-2 
                                                focus:ring-blue-500 focus:outline-none dark:bg-neutral-900 dark:border-neutral-700 
                                                dark:text-neutral-400 dark:placeholder-neutral-500"
                                        placeholder="Your Name">
                                </div>
                                <div>
                                    <input type="text" name="email"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500"
                                        placeholder="Your Email">
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 mt-5">
                                <div>
                                    <input type="text" name="phone_number"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500"
                                        placeholder="Your Phone Number">
                                </div>
                                <div>
                                    <input type="text" name="address"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500"
                                        placeholder="Your Address">
                                </div>
                            </div>
                            <div class="mt-5">
                                <div>
                                    <textarea type="text" name="message"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500"
                                        placeholder="Your Message"></textarea>
                                </div>
                                <div class="mt-4">
                                    <input type="submit" value="Submit"
                                        class="bg-[#FFC315] text-neutral-800 font-bold  px-12 py-4 rounded-full hover:bg-white border 
                                        border-transparent hover:border-[#FFC315] hover:border-1 hover:text-[#FFC315] 
                                        cursor-pointer">
                                </div>

                            </div>

                        </form>


                    </div>
                    <div class="mt-16 text-xl text-justify text-gray-800 grid grid-cols-3 gap-10">

                        <div
                            class="flex flex-col items-center group bg-stone-100 border shadow-sm  overflow-hidden 
                            hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-700 
                            dark:shadow-neutral-700/70 h-96 relative">

                            <!-- Top Half Circle on Hover -->
                            <div
                                class="absolute inset-0 flex items-start justify-center overflow-hidden pointer-events-none">
                                <div
                                    class="hidden group-hover:block w-96 h-64 bg-[#FFC315] rounded-full -translate-y-1/2 shadow-md">
                                </div>
                            </div>

                            <!-- Circle Image -->
                            <div
                                class="relative mt-10 w-36 h-36 rounded-full overflow-hidden border-8 border-white group-hover:border-[#FFC315] shadow-md transition-colors duration-500 ease-in-out dark:border-neutral-700">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"
                                    src="{{ asset('assets/frontend/images/location.jpg') }}" alt="Card Image">
                            </div>

                            <!-- Bottom Rectangle on Hover -->
                            <div
                                class="absolute bottom-0 hidden group-hover:block w-full h-[20px] bg-[#FFC315] transition-all duration-500 ease-in-out">
                            </div>

                            <!-- Card Content -->
                            <div class="p-4 text-center mt-16">
                                <h3 class="text-3xl text-gray-800 dark:text-white">
                                    Address:
                                </h3>
                                <p class="mt-1 text-base">
                                    {{ systemSetting()->address }}

                                </p>
                            </div>

                        </div>
                        <div
                            class="flex flex-col items-center group bg-stone-100 border shadow-sm  overflow-hidden 
                            hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-700 
                            dark:shadow-neutral-700/70 h-96 relative">

                            <!-- Top Half Circle on Hover -->
                            <div
                                class="absolute inset-0 flex items-start justify-center overflow-hidden pointer-events-none">
                                <div
                                    class="hidden group-hover:block w-96 h-64 bg-[#FFC315] rounded-full -translate-y-1/2 shadow-md">
                                </div>
                            </div>

                            <!-- Circle Image -->
                            <div
                                class="relative mt-10 w-36 h-36 rounded-full overflow-hidden border-8 border-white group-hover:border-[#FFC315] shadow-md transition-colors duration-500 ease-in-out dark:border-neutral-700">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"
                                    src="{{ asset('assets/frontend/images/location.jpg') }}" alt="Card Image">
                            </div>

                            <!-- Bottom Rectangle on Hover -->
                            <div
                                class="absolute bottom-0 hidden group-hover:block w-full h-[20px] bg-[#FFC315] transition-all duration-500 ease-in-out">
                            </div>

                            <!-- Card Content -->
                            <div class="p-4 text-center mt-16">
                                <h3 class="text-3xl text-gray-800 dark:text-white">
                                    Email:
                                </h3>
                                <p class="mt-1 text-base">
                                    {{ systemSetting()->email }}

                                </p>
                            </div>

                        </div>
                        <div
                            class="flex flex-col items-center group bg-stone-100 border shadow-sm  overflow-hidden 
                            hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-neutral-900 dark:border-neutral-700 
                            dark:shadow-neutral-700/70 h-96 relative">

                            <!-- Top Half Circle on Hover -->
                            <div
                                class="absolute inset-0 flex items-start justify-center overflow-hidden pointer-events-none">
                                <div
                                    class="hidden group-hover:block w-96 h-64 bg-[#FFC315] rounded-full -translate-y-1/2 shadow-md">
                                </div>
                            </div>

                            <!-- Circle Image -->
                            <div
                                class="relative mt-10 w-36 h-36 rounded-full overflow-hidden border-8 border-white group-hover:border-[#FFC315] shadow-md transition-colors duration-500 ease-in-out dark:border-neutral-700">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"
                                    src="{{ asset('assets/frontend/images/location.jpg') }}" alt="Card Image">
                            </div>

                            <!-- Bottom Rectangle on Hover -->
                            <div
                                class="absolute bottom-0 hidden group-hover:block w-full h-[20px] bg-[#FFC315] transition-all duration-500 ease-in-out">
                            </div>

                            <!-- Card Content -->
                            <div class="p-4 text-center mt-16">
                                <h3 class="text-3xl text-gray-800 dark:text-white">
                                    Phone:
                                </h3>
                                <p class="mt-1 text-base">
                                    {{ systemSetting()->phone_number }}
                                </p>
                            </div>

                        </div>







                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
