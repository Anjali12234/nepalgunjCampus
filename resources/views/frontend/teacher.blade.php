@extends('frontend.layouts.master')
@section('title', 'Expert Teacher of NCMT')

@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Teacher Rating" />


    <x-frontend.bread-crum heading="Teacher" />

    <section>

        <!-- Content Section -->
        <div class="bg-gray-50 py-10 px-6">
            <div class="max-w-7xl mx-auto">
                <!-- Title -->
                <h2 class="text-5xl font-bold text-gray-800 mb-3">
                    {{ $teacher->teacher_name }}
                    <span class="text-yellow-500 font-extrabold">___</span>
                </h2>
                {{-- <h2>{{ auth()->guard('student')->user()?->name }}</h2> --}}

                <!-- Content -->
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    <div class="lg:w-1/2">
                        <img src="{{ $teacher->image }}" alt=" {{ $teacher->teacher_name }}"
                            class="rounded-lg shadow-md object-cover w-full h-[39rem]">
                    </div>
                    <div class="lg:w-1/2 text-lg text-gray-800">
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-3">
                            Faculty : <span class="text-red-500 font-semibold">{{ $teacher->faculty_name }}
                            </span>

                        </h3>
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-3">
                            Email : <span class="text-red-500 font-semibold">{{ $teacher?->email }}
                            </span>

                        </h3>
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-3">
                            Phone Number : <span class="text-red-500 font-semibold">{{ $teacher->phone_number }}
                            </span>

                        </h3>
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-3">
                            Address : <span class="text-red-500 font-semibold">{{ $teacher->address }}
                            </span>

                        </h3>

                        <div class="">
                            <!-- Total Rating Section -->
                            <div class="flex items-center space-x-4">
                                <h3 class="text-lg md:text-xl font-semibold text-gray-800">Total Rating:</h3>
                                <div class="flex items-center space-x-2">
                                    <svg class="w-6 h-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0
                                                    0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532
                                                    1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.53
                                                    7 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <p class="text-lg font-medium text-gray-500">{{ $totalAverageRating }} / 5</p>
                                </div>
                            </div>

                            <div class="space-y-4 mt-3">
                                @foreach ([
                                            'Teaching Skill' => $averageTeachingSkillRating,
                                            'Communication Skill' => $averageCommunicationSkillRating,
                                            'Subject Knowledge' => $averageSubjectKnowledgeRating,
                                            'Class Performance' => $averageClassPerformanceRating,
                                            'Interactive Teaching' => $averageInteractiveTeachingRating,
                                            ] as $label => $rating)
                                    <div class="flex flex-col ">
                                        <!-- Label -->
                                        {{-- <div class="absolute inset-0 flex items-center justify-center">
                                            <span class="text-sm font-medium text-gray-800">
                                                {{ $rating }} / 5
                                            </span>
                                        </div> --}}
                                        <h3 class="text-lg font-semibold text-gray-800">
                                            {{ $label }}:
                                        </h3>
                                        <!-- Progress Bar Wrapper -->
                                        <div class="relative w-90 bg-gray-200 rounded-full h-2">
                                            <!-- Filled Progress Bar -->
                                            <div class="absolute top-0 left-0 h-2 bg-yellow-400 rounded-full"
                                                style="width: {{ $rating * 20 }}%;">
                                            </div>
                                            <!-- Rating Text -->

                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- User Rating Section -->
                            <div class="flex">
                                <h3 class="text-base md:text-xl font-bold mt-3 text-gray-800">Your Rating:</h3>
                                @if (auth('student')->check())
                                    @if (
                                        !empty($student->ratings->teaching_skill) ||
                                            !empty($student->ratings->communication_skill) ||
                                            !empty($student->ratings->subject_knowledge) ||
                                            !empty($student->ratings->class_performance) ||
                                            !empty($student->ratings->interactive_teaching))
                                        <a href="{{ route('student.teacher.show', $teacher) }}"
                                            class="flex items-center ml-5 mt-3">
                                            <svg class="w-6 h-6 text-blue-500 me-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>

                                            <p class="ms-1 text-xl font-medium text-gray-500">
                                                {{ $totalAverageStudentRating }}/5</p>
                                        </a>
                                    @else
                                        <a href="{{ route('student.dashboard') }}" class="flex items-center ml-5 mt-3">
                                            <svg class="w-6 h-6 text-blue-500 me-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>

                                            <p class="ms-1 text-xl font-medium text-gray-500">Rate</p>
                                        </a>
                                    @endif
                                @else
                                    <a href="{{ route('studentLogin') }}" class="flex items-center ml-5">
                                        <svg class="w-8 h-8 text-blue-500 me-1" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        <p class="ms-1 text-lg md:text-xl font-medium text-gray-500">Rate</p>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-6 mt-5">
                    <!-- Social Links -->
                    <div class="mb-4 flex">
                        <a href="{{ $teacher?->facebook_url }}" class="text-blue-600 hover:text-blue-800 mr-4"
                            target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-600 mr-4" target="_blank"
                            rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-twitter">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
                            </svg>
                        </a>
                        <a href="#" class="text-blue-700 hover:text-blue-900 mr-4" target="_blank"
                            rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 11v5" />
                                <path d="M8 8v.01" />
                                <path d="M12 16v-5" />
                                <path d="M16 16v-3a2 2 0 1 0 -4 0" />
                                <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                            </svg>
                        </a>
                        <a href="{{ $teacher?->instagram_url }}" class="text-pink-600 hover:text-pink-800 mr-4"
                            target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                <path d="M16.5 7.5v.01" />
                            </svg>
                        </a>
                    </div>

                    <!-- Teacher Description -->
                    <div>
                        {!! $teacher->description !!}
                    </div>
                </div>
            </div>
    </section>
@endsection
