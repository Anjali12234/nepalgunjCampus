@extends('frontend.layouts.master')
@section('title', 'Our Team')

@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="{{$department->label()}}" />


    <x-frontend.bread-crum heading="Our Team" />

    <section>

        <div class="px-5 md:px-16 mt-10 mb-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($teachers as $teacher)
                    <div class="rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800 transition transform hover:scale-105 hover:shadow-xl">
                        <div class="text-center px-5 py-6">
                            <a href="{{ route('teacher', $teacher) }}">
                                <img class="h-28 w-28 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4 object-cover"
                                    src="{{ $teacher->image ?? asset('assets/frontend/images/default-avatar.png') }}" 
                                    alt="{{ $teacher->teacher_name }}">
                            </a>
                            <h1 class="font-bold text-xl text-gray-800 dark:text-white">{{ $teacher->teacher_name }}</h1>
                            
                            <div class="mt-2">
                                <div class="inline-flex gap-2 items-center text-gray-800 dark:text-gray-300">
                                    <svg class="h-5 w-5 text-gray-600 dark:text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                                    </svg>
                                    <strong class="text-gray-900 dark:text-white">{{ $teacher->post }}</strong>
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm mt-1">
                                    <span class="font-semibold text-red-700">Experience:</span> {{ $teacher->experience }} years
                                </p>
                                <p class="text-gray-700 dark:text-gray-300 text-sm mt-1">
                                    <span class="font-semibold text-red-700">Qualification:</span> {{ $teacher->qualification }}
                                </p>
                            </div>
    
                            <div class="inline-flex gap-1   items-center text-gray-800 dark:text-gray-300 mt-5">
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
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-700 dark:text-white">No members available!</p>
                @endforelse
            </div>
        </div
    </section>
@endsection
