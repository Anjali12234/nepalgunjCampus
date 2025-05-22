@extends('frontend.layouts.master')
@section('title', 'Contact at NCMT')
@section('content')

    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Get In Touch" />

    <x-frontend.bread-crum heading="Get In Touch" />

    <section>
        <div>
            <iframe src="{{ systemSetting()?->map_url }}" class="w-full h-[30rem] object-cover" style="border:0;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-gray-50 py-7 px-4 sm:px-6">
            <div class="max-w-8xl py-7 px-4 sm:px-6">
                <div class="ml-[0.5rem] md:ml-14">
                    <h2 class="text-3xl sm:text-2xl font-bold text-gray-800">Drop us message</h2>
                    <span class="text-[#FFC315] font-extrabold">_________</span>

                    <div class="mt-12 sm:mt-8 text-gray-800">
                        <h1 class="text-3xl sm:text-2xl">CEH Class Registration Form</h1>
                        <p class="text-lg mt-5 sm:mt-3">
                            <span>Get All time support for emergency.</span>
                        </p>
                        <form action="{{ route('registrationForm.submit') }}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Name *">
                                </div>
                                <div>
                                    <input type="text" name="email" value="{{ old('email') }}"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Email *">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5">
                                <div>
                                    <input type="text" name="phone_no" value="{{ old(key: 'phone_no') }}"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Phone Number *">
                                </div>
                                <div>
                                    <input type="text" name="address" value="{{ old('address') }}"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your Address *">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5">
                                <div>
                                    <input type="text" name="college_name" value="{{ old('college_name') }}"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none"
                                        placeholder="Your College Name of +2 *">
                                </div>
                                <div>
                                    <select name="faculty"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
               focus:ring-blue-500 focus:outline-none">
                                        <option value="">Select Faculty *</option>
                                        <option value="Science" {{ old('faculty') == 'Science' ? 'selected' : '' }}>Science
                                        </option>
                                        <option value="Management" {{ old('faculty') == 'Management' ? 'selected' : '' }}>
                                            Management</option>
                                        <option value="Arts" {{ old('faculty') == 'Arts' ? 'selected' : '' }}>Arts
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-5">
                                <div>
                                    <label for="photo_of_id_card">Photo of your ID Card</label>
                                    <input type="file" name="photo_of_id_card"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none">
                                </div>
                                <div>
                                    <label for="photo_of_post_shared">Screenshot of FaceBook Post Share</label>

                                    <input type="file" name="photo_of_post_shared"
                                        class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 
                                        focus:ring-blue-500 focus:outline-none">
                                </div>
                            </div>
                            <div class="mt-5">
                                <textarea name="message"
                                    class="py-3 px-4 w-full border-gray-200 rounded-lg text-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                    placeholder="Your Message*">{{ old('message') }}</textarea>
                                <div class="mt-4">
                                    <input type="submit" value="Submit"
                                        class="bg-[#FFC315] text-neutral-800 font-bold px-12 py-3 rounded-full hover:bg-white 
                                        hover:text-[#FFC315] border hover:border-[#FFC315] cursor-pointer">
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                        <div
                            class="flex flex-col items-center group bg-stone-100 border shadow-sm hover:shadow-lg transition 
                                h-80 sm:h-96 p-6">
                            <div
                                class="relative w-36 h-36 rounded-full overflow-hidden border-8 border-white group-hover:border-[#FFC315] shadow-md">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                    src="{{ asset('assets/frontend/images/location.jpg') }}" alt="Card Image">
                            </div>
                            <div class="p-4 text-center mt-6">
                                <h3 class="text-2xl text-gray-800">Address:</h3>
                                <p class="mt-2 text-base">
                                    {{ systemSetting()?->address }}
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col items-center group bg-stone-100 border shadow-sm hover:shadow-lg transition 
                                h-80 sm:h-96 p-6">
                            <div
                                class="relative w-36 h-36 rounded-full overflow-hidden border-8 border-white group-hover:border-[#FFC315] shadow-md">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                    src="{{ asset('assets/frontend/images/location.jpg') }}" alt="Card Image">
                            </div>
                            <div class="p-4 text-center mt-6">
                                <h3 class="text-2xl text-gray-800">Email:</h3>
                                <p class="mt-2 text-base">
                                    {{ systemSetting()?->email }}
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col items-center group bg-stone-100 border shadow-sm hover:shadow-lg transition 
                                h-80 sm:h-96 p-6">
                            <div
                                class="relative w-36 h-36 rounded-full overflow-hidden border-8 border-white group-hover:border-[#FFC315] shadow-md">
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                    src="{{ asset('assets/frontend/images/location.jpg') }}" alt="Card Image">
                            </div>
                            <div class="p-4 text-center mt-6">
                                <h3 class="text-2xl text-gray-800">Phone Number:</h3>
                                <p class="mt-2 text-base">
                                    {{ systemSetting()?->phone_number }},
                                    {{ systemSetting()?->telephone_number }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
