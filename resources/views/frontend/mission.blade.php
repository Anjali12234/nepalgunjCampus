@extends('frontend.layouts.master')
@section('title', 'Mission And Vision Of NCMT')

@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Mission & Vision" />


    <x-frontend.bread-crum heading="Mission & Vision" />

    <section>

        <!-- Content Section -->
        <div class="bg-gray-50 py-10 px-6">
            <div class="max-w-7xl mx-auto">
                <!-- Title -->
                <h2 class="text-5xl font-bold text-gray-800 mb-10">
                    Mission
                    <span class="text-yellow-500 font-extrabold">___</span>
                </h2>

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
            <div class="max-w-7xl mx-auto mt-32">
                <!-- Title -->
                <h2 class="text-5xl font-bold text-gray-800 mb-10">
                    Vission
                    <span class="text-yellow-500 font-extrabold">___</span>
                </h2>

                <!-- Content -->
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    <!-- Image -->
                    <div class="lg:w-1/3">
                        <img src="{{ asset('assets/frontend/images/about-4.jpg') }}" alt="About Image"
                            class="rounded-lg shadow-md object-cover w-full h-auto">
                    </div>

                    <!-- Description -->
                    <div class="lg:w-2/3 text-lg text-gray-800">
                        <p class="mb-6">
                            At NCMT, our vision is to be a beacon of knowledge and innovation, empowering students to become
                            critical thinkers, compassionate leaders, and global citizens. We strive to create an
                            environment that nurtures intellectual curiosity, embraces diversity, and promotes a culture of
                            lifelong learning.
                        </p>
                        <ul class="list-disc pl-6 space-y-2 text-gray-500">
                            <li>Intensely focus towards students to attain their categorical requirements.</li>
                            <li>Deliver economical yet efficient, competent, and innovative education.</li>
                            <li>Adhere to the global standards of Professionalism and conduct.</li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="max-w-7xl mx-auto mt-32">
                <!-- Title -->


                <!-- Content -->
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    <!-- Description -->
                    <div class="lg:w-1/2 text-lg text-gray-800">
                        <h2 class="text-5xl font-bold text-gray-800 mb-10">
                            Community Engagement
                            <span class="text-yellow-500 font-extrabold">___</span>
                        </h2>
                        <p class="mb-6">
                            As a socially responsible institution, we believe in the power of education to drive positive
                            change. We are deeply rooted in our local community and strive to make a meaningful impact
                            through service-learning initiatives, community partnerships, and outreach programs. Our
                            students, faculty, and staff actively contribute to addressing social, environmental, and
                            economic challenges, working together to create a more just and sustainable future.
                        </p>
                    </div>
                    <div class="lg:w-1/2 text-lg text-gray-800 mt-20">
                        <h2 class="text-5xl font-bold text-gray-800 mb-10">
                            Academic Excellence
                            <span class="text-yellow-500 font-extrabold">___</span>
                        </h2>
                        <p class="mb-6">
                            We take immense pride in our commitment to academic excellence. Our distinguished faculty
                            members, renowned for their expertise and dedication, foster an intellectually stimulating
                            environment that encourages students to explore, discover, and excel in their chosen fields.
                            With a broad range of programs spanning various disciplines, we offer a comprehensive
                            educational experience that combines theoretical knowledge with practical application. Our
                            state-of-the-art facilities and cutting-edge technologies enable students to engage in hands-on
                            learning, research, and creative endeavors.
                        </p>
                    </div>


                </div>
            </div>
            <div class="max-w-7xl mx-auto mt-32">
                <!-- Title -->
                <h2 class="text-5xl font-bold text-gray-800 mb-10">
                    Student-Centered Approach
                    <span class="text-yellow-500 font-extrabold">___</span>
                </h2>

                <!-- Content -->
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    <!-- Image -->


                    <!-- Description -->
                    <div class=" text-lg text-gray-800">
                        <p class="mb-6">
                            At NCMT , our students are at the heart of everything we do. We believe in fostering a
                            supportive and inclusive community where students can grow academically, socially, and
                            personally. We offer a range of student services and resources to promote holistic development
                            and well-being, including academic advising, career counseling, tutoring, and extracurricular
                            activities. Our diverse and vibrant campus life provides numerous opportunities for students to
                            explore their interests, develop leadership skills, and engage in meaningful community service.
                            From student clubs and organizations to cultural events, sports, and recreational activities,
                            there is something for everyone to enrich their college experience and forge lifelong
                            friendships.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
