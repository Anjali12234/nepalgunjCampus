@extends('frontend.layouts.master')
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Teacher Rating" />


    <x-frontend.bread-crum heading="Teacher" />

    <section>

        <!-- Content Section -->
        <div class="bg-gray-50 py-10 px-6">
            <div class="max-w-7xl mx-auto">
                <!-- Title -->
                <h2 class="text-5xl font-bold text-gray-800 mb-10">
                    {{ $teacher->teacher_name }}
                    <span class="text-yellow-500 font-extrabold">___</span>
                </h2>

                <!-- Content -->
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    <div class="lg:w-1/2">
                        <img src="{{ $teacher->image }}" alt="About Image"
                            class="rounded-lg shadow-md object-cover w-full h-[39rem]">
                    </div>
                    <div class="lg:w-1/2 text-lg text-gray-800">
                        <h3 class="text-base md:text-xl font-bold text-gray-800 mb-10">
                            Faculty : <span class="text-red-500">{{ $teacher->faculty_name }}
                            </span>

                        </h3>
                       
                        <div class="space-y-6">
                            <!-- Total Rating Section -->
                            <div class="flex items-center space-x-4">
                                <h3 class="text-lg md:text-xl font-semibold text-gray-800">Total Rating:</h3>
                                <div class="flex items-center space-x-2">
                                    <svg class="w-8 h-8 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                    <p class="text-lg font-medium text-gray-500">{{ $totalAverageRating }} / 5</p>
                                </div>
                            </div>
                        
                            <!-- Ratings Sections -->
                            <div class="space-y-4">
                                @foreach ([
                                    'Teaching Skill' => $averageTeachingSkillRating,
                                    'Communication Skill' => $averageCommunicationSkillRating,
                                    'Subject Knowledge' => $averageSubjectKnowledgeRating,
                                    'Class Performance' => $averageClassPerformanceRating,
                                    'Interactive Teaching' => $averageInteractiveTeachingRating
                                ] as $label => $rating)
                                    <div class="flex items-center space-x-4">
                                        <h3 class="text-lg md:text-xl font-semibold text-gray-800">{{ $label }}:</h3>
                                        <div class="flex items-center space-x-2">
                                            <svg class="w-8 h-8 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="text-lg font-medium text-gray-500">{{ $rating }} / 5</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="flex">
                            <h3 class="text-base md:text-xl font-bold text-gray-800 ">
                                Your Rating :
                            </h3>
                            {{-- @if (isset($teacher->teacherRating->rating)) --}}
                            @if (auth('student')->check())
                            @if (isset($teacher->teacherRating->rating))
                                <button class="flex items-center ml-5" >
                                    <svg class="w-8 h-8 text-blue-500 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>

                                    <p class="ms-1 text-xl font-medium text-gray-500 ">
                                        {{ $teacher->teacherRating->rating }}
                                    </p>
                                </button>
                                @else
                                <a href="{{ route('student.dashboard') }}" class="flex items-center ml-5">
                                    <svg class="w-8 h-8 text-blue-500 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>

                                    <p class="ms-1 text-xl font-medium text-gray-500 ">Rate</p>
                                </a>
                                @endif
                            @else
                                <a href="" class="flex items-center ml-5">
                                    <svg class="w-8 h-8 text-blue-500 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>

                                    <p class="ms-1 text-lg md:text-xl font-medium text-gray-500 ">Rate</p>
                                </a>
                            @endif

                        </div>
                    </div>


                    <!-- Image -->

                </div>

                <div class="mb-6 mt-5">
                    {!! $teacher->description !!}
                </div>
            </div>

        </div>
    

      
    </section>
@endsection
