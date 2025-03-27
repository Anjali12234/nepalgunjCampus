@extends('frontend.layouts.master')
@section('title', 'Contact at NCMT')
@section('content')

    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Get In Touch" />

    <x-frontend.bread-crum heading="Get In Touch" />

    <section>
        <div>
            <iframe src="{{ systemSetting()->map_url }}" class="w-full h-[30rem] object-cover" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-gray-50 py-7 px-4 sm:px-6">
            <div class="max-w-8xl py-7 px-4 sm:px-6">
                <div class="ml-[0.5rem] md:ml-14">
                    <h2 class="text-3xl sm:text-2xl font-bold text-gray-800">Drop us message</h2>
                    <span class="text-[#FFC315] font-extrabold">_________</span>

                    <div class="mt-12 sm:mt-8 text-gray-800">
                        <h1 class="text-3xl sm:text-2xl">Make a Contact</h1>
                        <p class="text-lg mt-5 sm:mt-3"> 
                            <span>Get All time support for emergency.</span>
                            <span class="text-red-600">Get Connected with us for any urgency.</span>
                        </p>
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
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5">
                                <div>
                                    <input type="text" name="name"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Name *">
                                </div>
                                <div>
                                    <input type="text" name="email"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Email *">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5">
                                <div>
                                    <input type="text" name="phone_number"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Phone Number *">
                                </div>
                                <div>
                                    <input type="text" name="address"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Address *">
                                </div>
                            </div>
                            <div class="mt-5">
                                <textarea name="message"
                                    class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                    placeholder="Your Message*"></textarea>
                                <div class="mt-4">
                                    <input type="submit" value="Submit"
                                        class="bg-[#FFC315] text-neutral-800 font-bold px-12 py-3 rounded-full hover:bg-white 
                                        hover:text-[#FFC315] border hover:border-[#FFC315] cursor-pointer">
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                        @foreach (['Address', 'Email', 'Phone'] as $info)
                            <div
                                class="flex flex-col items-center group bg-stone-100 border shadow-sm hover:shadow-lg transition 
                                h-80 sm:h-96 p-6">
                                <div
                                    class="relative w-36 h-36 rounded-full overflow-hidden border-8 border-white group-hover:border-[#FFC315] shadow-md">
                                    <img class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                        src="{{ asset('assets/frontend/images/location.jpg') }}" alt="Card Image">
                                </div>
                                <div class="p-4 text-center mt-6">
                                    <h3 class="text-2xl text-gray-800">{{ $info }}:</h3>
                                    <p class="mt-2 text-base">
                                        {{ systemSetting()->{strtolower($info)} }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
