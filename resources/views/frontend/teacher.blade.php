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
                            class="rounded-lg shadow-md object-cover w-full h-auto">
                    </div>
                    <div class="lg:w-1/2 text-lg text-gray-800">
                        <h3 class="text-xl font-bold text-gray-800 mb-10">
                            Faculty : <span class="text-red-500">{{ $teacher->faculty_name }}
                            </span>

                        </h3>
                        <div class="mb-6">
                            {!! $teacher->description !!}
                        </div>
                        <div class="flex">
                            <h3 class="text-xl font-bold text-gray-800 ">
                                Rating :
                            </h3>
                            <div class="flex items-center ml-5">
                                <svg class="w-8 h-8 text-yellow-400 me-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <p class="ms-1 text-xl font-medium text-gray-500 dark:text-gray-400">{{ $averageRating }}
                                </p>
                                <p class="ms-1 text-xl font-medium text-gray-500 dark:text-gray-400">out of</p>
                                <p class="ms-1 text-xl font-medium text-gray-500 dark:text-gray-400">5</p>
                            </div>
                        </div>
                        <div class="flex">
                            <h3 class="text-xl font-bold text-gray-800 ">
                                Your Rating :
                            </h3>
                            @if (isset($teacher->teacherRating->rating))
                                <button class="flex items-center ml-5" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-slide-up-animation-modal"
                                    data-hs-overlay="#hs-slide-up-animation-modal">
                                    <svg class="w-8 h-8 text-blue-500 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>

                                    <p class="ms-1 text-xl font-medium text-gray-500 dark:text-gray-400">
                                        {{ $teacher->teacherRating->rating }}
                                    </p>
                                </button>
                            @else
                                <button class="flex items-center ml-5" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-slide-up-animation-modal"
                                    data-hs-overlay="#hs-slide-up-animation-modal">
                                    <svg class="w-8 h-8 text-blue-500 me-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>

                                    <p class="ms-1 text-xl font-medium text-gray-500 dark:text-gray-400">Rate</p>
                                </button>
                            @endif

                        </div>
                    </div>


                    <!-- Image -->

                </div>
            </div>

        </div>
        <div id="hs-slide-up-animation-modal"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden
     overflow-y-auto pointer-events-none"
            role="dialog" tabindex="-1" aria-labelledby="hs-slide-up-animation-modal-label">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100
     hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all 
     sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div
                    class="flex flex-col bg-white border shadow-sm rounded-xl 
            pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700
             dark:shadow-neutral-700/70">
                    <div class="flex justify-between items-center py-3 px-4 border-b
             dark:border-neutral-700">
                        <button type="button"
                            class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border 
                    border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 
                    disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600
                     dark:text-neutral-400 dark:focus:bg-neutral-600"
                            aria-label="Close" data-hs-overlay="#hs-slide-up-animation-modal">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 overflow-y-auto text-center">
                        <h3 id="hs-slide-up-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
                            Rate {{ $teacher->teacher_name }}
                        </h3>
                        <div id="rating-container" class="flex items-center justify-center mt-4">
                            <!-- Stars -->
                            @php
                                $existingRating = $teacher->teacherRating->rating ?? 0;
                            @endphp

                            @for ($i = 1; $i <= 5; $i++)
                                <span data-value="{{ $i }}"
                                    class="star cursor-pointer w-8 h-8 {{ $i <= $existingRating ? 'text-yellow-400' : 'text-gray-400' }}">
                                    ★
                                </span>
                            @endfor
                        </div>
                        <button id="rate-button" class="bg-yellow-400 rounded-lg mt-3 px-20 py-1.5 text-white">
                            Submit Rating
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const stars = document.querySelectorAll(".star");
                const rateButton = document.getElementById("rate-button");
                let currentRating = @json($existingRating); // Pre-fill rating if it exists

                stars.forEach((star, index) => {
                    star.addEventListener("mouseenter", () => {
                        stars.forEach((s, i) => {
                            s.classList.toggle("text-yellow-400", i <= index);
                            s.classList.toggle("text-gray-400", i > index);
                        });
                    });

                    star.addEventListener("mouseleave", () => {
                        stars.forEach((s, i) => {
                            s.classList.toggle("text-yellow-400", i < currentRating);
                            s.classList.toggle("text-gray-400", i >= currentRating);
                        });
                    });

                    star.addEventListener("click", () => {
                        currentRating = index + 1;
                        stars.forEach((s, i) => {
                            s.classList.toggle("text-yellow-400", i < currentRating);
                            s.classList.toggle("text-gray-400", i >= currentRating);
                        });
                    });
                });

                rateButton.addEventListener("click", () => {
                    if (currentRating === 0) {
                        alert("Please select a rating before submitting.");
                        return;
                    }
                    submitRating(currentRating);
                });

                const submitRating = (rating) => {
                    fetch("/rate-teacher", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    "content"),
                            },
                            body: JSON.stringify({
                                teacher_id: @json($teacher->id),
                                rating: rating,
                            }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            alert("Your rating has been updated!");
                        })
                        .catch((error) => {
                            console.error("Error:", error);
                        });
                };
            });
        </script>

    </section>
@endsection
