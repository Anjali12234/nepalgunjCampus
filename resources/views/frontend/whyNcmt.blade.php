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
                           
                        </p>
                        
                    </div>

                    <!-- Image -->
                   
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
                            <div class="hs-accordion active bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                                id="hs-bordered-heading-one">
                                <button
                                    class="text-xl hs-accordion-toggle  inline-flex items-center gap-x-3 w-full 
                                    font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 
                                    disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 
                                    dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400"
                                    aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Nepalgunj Campus for a Strategic Advantage
                                </button>
                                <div id="hs-basic-bordered-collapse-one"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-bordered-heading-one">
                                    <div class="pb-4 px-5">
                                        <p class="text-gray-500 ml-6 dark:text-neutral-200">
                                            At Nepalgunj Campus, we firmly believe that strategic planning is an essential
                                            component of student success. By incorporating strategic planning into our
                                            educational approach, we empower our students to become proactive, goal-oriented
                                            individuals ready to face the challenges of the future. If you are looking for a
                                            learning environment that values your dreams and aspirations, join Nepalgunj
                                            Campus today. Discover the power of strategic planning and embark on a
                                            transformative educational journey that will shape your future for years to
                                            come. Together, let's build a strategic advantage for your success!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                                id="hs-bordered-heading-two">
                                <button
                                    class="text-xl hs-accordion-toggle  inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-bordered-collapse-two">
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Developing Excellent Organization Skills:
                                </button>
                                <div id="hs-basic-bordered-collapse-two"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-bordered-heading-two">
                                    <div class="pb-4 px-5">
                                        <p class="text-gray-500 ml-6 dark:text-neutral-200">
                                            At Nepalgunj Campus, we believe that excellent organization skills are
                                            foundational for student success. Through workshops, mentorship programs, and
                                            ongoing support, we aim to empower our students with the tools and mindset
                                            required to excel in their academic pursuits and beyond. Join Nepalgunj Campus
                                            today and embark on an educational journey where organization skills are
                                            emphasized, enabling you to
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700"
                                id="hs-bordered-heading-three">
                                <button
                                    class="text-xl hs-accordion-toggle  inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-bordered-collapse-three">
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Leadership and Personnel Management Skills
                                </button>
                                <div id="hs-basic-bordered-collapse-three"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-bordered-heading-three">
                                    <div class="pb-4 px-5">
                                        <p class="text-gray-500 ml-6 dark:text-neutral-200">
                                            At Nepalgunj Campus, we are committed to empowering our students to become
                                            leaders equipped with the skills necessary for success. Through our
                                            comprehensive programs, mentorship opportunities, and experiential learning, we
                                            prepare students to lead with integrity, empathy, and vision. Join us at
                                            Nepalgunj Campus and unlock
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 
                               dark:border-neutral-700"
                                id="hs-bordered-heading-four">
                                <button
                                    class="text-xl hs-accordion-toggle  inline-flex items-center gap-x-3 w-full 
                                    font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 
                                    disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 
                                    dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-bordered-collapse-four">
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Mastering Project Management Skills for Student Success
                                </button>
                                <div id="hs-basic-bordered-collapse-four"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-bordered-heading-four">
                                    <div class="pb-4 px-5">
                                        <p class="text-gray-500 ml-6 dark:text-neutral-200">
                                            At Nepalgunj Campus, we believe that project management skills are crucial for
                                            student success. Through our comprehensive programs, mentorship opportunities,
                                            and practical learning experiences, we equip our students with the skills and
                                            knowledge needed to excel in project management. Join us
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 
                                 dark:border-neutral-700"
                                id="hs-bordered-heading-five">
                                <button
                                    class="text-xl hs-accordion-toggle  inline-flex items-center gap-x-3 w-full 
                                    font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 
                                    disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 
                                    dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-bordered-collapse-five">
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Unlocking Student Success
                                </button>
                                <div id="hs-basic-bordered-collapse-five"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-bordered-heading-five">
                                    <div class="pb-4 px-5">
                                        <div class="text-gray-500 ml-6 dark:text-neutral-200">
                                            <ol>
                                                <li>
                                                    1. Academic Excellence: Attention to detail is crucial for academic
                                                    success. It
                                                    ensures that students produce high-quality assignments, accurately cite
                                                    sources,
                                                    and meet academic requirements. Paying careful attention to
                                                    instructions,
                                                    formatting, and content helps students convey their ideas effectively
                                                    and earn
                                                    recognition for their hard work.
                                                </li>
                                                <li>
                                                    2. Professional Competence: Employers highly value attention to detail
                                                    in the
                                                    workplace. Professionals who exhibit this skill are known for producing
                                                    error-free reports, meeting project specifications, and delivering
                                                    high-quality
                                                    work. Attention to detail enhances productivity, reduces mistakes, and
                                                    contributes to professional growth.
                                                </li>
                                                <li>
                                                    3. Critical Thinking and Problem-solving: Attention to detail is closely
                                                    linked
                                                    to critical thinking and problem-solving abilities. By carefully
                                                    analyzing
                                                    information, students can identify patterns, detect errors, and make
                                                    informed
                                                    decisions. Attention to detail promotes a thorough understanding of
                                                    complex
                                                    concepts and facilitates effective problem-solving strategies.
                                                </li>
                                                <li>
                                                    4. Building Trust and Reliability: Students who demonstrate attention to
                                                    detail
                                                    are regarded as reliable and trustworthy individuals. Attention to
                                                    accuracy and
                                                    precision in their work enhances their reputation, fosters trust from
                                                    peers and
                                                    instructors, and opens doors to opportunities for growth and
                                                    collaboration
                                                </li>
                                            </ol>




                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg dark:bg-neutral-800 
                                 dark:border-neutral-700"
                                id="hs-bordered-heading-six">
                                <button
                                    class="text-xl hs-accordion-toggle  inline-flex items-center gap-x-3 w-full 
                                    font-semibold text-start text-gray-800 py-4 px-5 hover:text-gray-500 disabled:opacity-50 
                                    disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 
                                    dark:hover:text-neutral-400 dark:focus:outline-none dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-bordered-collapse-six">
                                    <svg class="hs-accordion-active:hidden block size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-3.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Nepalgunj Campus and Cultivate Attention
                                </button>
                                <div id="hs-basic-bordered-collapse-six"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-bordered-heading-six">
                                    <div class="pb-4 px-5">
                                        <p class="text-gray-500 ml-6 dark:text-neutral-200">
                                            At Nepalgunj Campus, we believe that attention to detail is a fundamental skill
                                            for student success. Through our comprehensive programs, interactive learning
                                            experiences, and a supportive environment, we foster the development of
                                            attention to detail in our students. Join us at Nepalgunj Campus and unlock your
                                            potential for academic excellence, professional

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
