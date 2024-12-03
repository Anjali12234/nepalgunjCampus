@extends('frontend.layouts.master')
@section('content')
    <section>
        <div class="relative">
            <!-- Background Image -->
            <img src="{{ asset('assets/frontend/images/background/background-image.jpg') }}" alt="Why Nepalgunj Campus"
                class="w-full h-96 object-cover">

            <!-- Overlay for About Us Text -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
                <div class="py-7 px-32">
                    <h2 class="text-white text-4xl md:text-5xl font-bold mb-4">Why Nepalgunj Campus</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- Breadcrumb -->
        <div class="bg-gray-200 border-t py-5">
            <div class="max-w-7xl mx-auto flex items-center space-x-2 text-lg">
                <a href="#" class="text-yellow-500 font-semibold hover:underline">Home</a>
                <span class="text-gray-400 font-semibold">></span>
                <span class="text-gray-500 font-semibold">Why NCMT</span>
            </div>
        </div>

        <!-- Content Section -->
        <div class="bg-gray-50 py-10 px-6 mt-16">
            <div class="max-w-7xl mx-auto">
                <!-- Title -->
                <h2 class="text-5xl font-semibold text-gray-800 mb-10">
                    Nepalgunj Campus Core Competencies
                    <span class="text-yellow-500 font-extrabold">___</span>
                </h2>
                <p class="text-2xl text-gray-800 mb-10">5 Core Competencies</p>

                <!-- Content -->
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    <!-- Description -->
                    <div class="lg:w-1/2 text-lg text-gray-800">
                        <p class="mb-6">
                            Nepalgunj Campus of Management & Technology has its highest priority on students learning and
                            their achievement. As BBC prepares world-class citizens in the 21st century, we recognize that
                            the aim of education is the development of the whole person, who is prepared to be an active
                            citizen and to participate in a global community of information technology.
                        </p>
                        <ul class="list-disc pl-6 space-y-2 text-gray-500">
                            <li>Core values</li>
                            <li>Student focus</li>
                            <li>Innovation</li>
                            <li>Commitment</li>
                            <li>Responsibility</li>
                            <li>Teamwork</li>
                            <li>Excellence</li>
                        </ul>
                    </div>

                    <!-- Image -->
                    <div class="lg:w-1/2">
                        <img src="{{ asset('assets/frontend/images/about-3.jpg') }}" alt="About Image"
                            class="rounded-lg shadow-md object-cover w-full h-auto">
                    </div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto mt-16">
                <!-- Title -->
                <h2 class="text-5xl font-semibold text-gray-800 mb-10">
                    Our Approach
                    <span class="text-yellow-500 font-extrabold">___</span>
                </h2>

                <!-- Content -->
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    <!-- Description -->
                    <div class="text-lg text-gray-500">
                        <p class="mb-6">
                            We pride ourselves on our open, honest, personable and transparent approach to what we do. Our
                            dedicated team take great pride in what they do and delivering something that we can all be very
                            proud of that makes a difference for our clients and their customers is what drives us.
                        </p>
                        <p class="mb-6">
                            Our approach comes purely from lessons learnt, things we've done really well in the past -
                            others that could have been done a little better. It's how we improve and it is why we have a
                            linear process for our approach, because we know what works and what doesn't.
                        </p>
                        <div class="hs-accordion-group">
                            <div class="hs-accordion active bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700" id="hs-bordered-heading-one">
                              <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">
                                <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                  <path d="M12 5v14"></path>
                                </svg>
                                <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                </svg>
                                Accordion #1
                              </button>
                              <div id="hs-basic-bordered-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-bordered-heading-one">
                                <div class="pb-4 px-5">
                                  <p class="text-gray-800 dark:text-neutral-200">
                                    <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                  </p>
                                </div>
                              </div>
                            </div>
                          
                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700" id="hs-bordered-heading-two">
                              <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-bordered-collapse-two">
                                <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                  <path d="M12 5v14"></path>
                                </svg>
                                <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                </svg>
                                Accordion #2
                              </button>
                              <div id="hs-basic-bordered-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-bordered-heading-two">
                                <div class="pb-4 px-5">
                                  <p class="text-gray-800 dark:text-neutral-200">
                                    <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                  </p>
                                </div>
                              </div>
                            </div>
                          
                            <div class="hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700" id="hs-bordered-heading-three">
                              <button class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-expanded="false" aria-controls="hs-basic-bordered-collapse-three">
                                <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                  <path d="M12 5v14"></path>
                                </svg>
                                <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                </svg>
                                Accordion #3
                              </button>
                              <div id="hs-basic-bordered-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-bordered-heading-three">
                                <div class="pb-4 px-5">
                                  <p class="text-gray-800 dark:text-neutral-200">
                                    <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                    <!-- Image -->

                </div>
            </div>

        </div>
    </section>
@endsection
