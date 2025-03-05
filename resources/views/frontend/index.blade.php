@extends('frontend.layouts.master')
@section('content')
    <section>
        <x-frontend.slider :sliders="$sliders" />
        @if ($notices->count() > 0)
            <div id="exampleModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full">
                    <!-- Modal Header -->
                    <div class="flex justify-between items-center border-b p-4">
                        <h2 class="text-4xl font-bold text-gray-800">
                            Notice
                            <span class="text-yellow-500 font-extrabold">___</span>
                        </h2>
                        <button id="closeModalButton" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="p-4">
                        <div class="relative">
                            <!-- Slides -->
                            <div>
                                @foreach ($notices as $key => $notice)
                                    <h5 class="text-lg font-semibold">{{ $notice->title }}</h5>
                                        <div class="carousel-item mt-5 {{ $key == 0 ? 'active' : 'hidden' }}"
                                            data-index="{{ $key }}">
                                            <img src="{{ $notice->image }}" alt="Notice Image" 
                                            class="w-full h-auto">
                                        </div>
                                @endforeach
                            </div>
                            <!-- Navigation -->
                            
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <section>
        <x-frontend.indexAboutus :about="$about" />
    </section>
    <section>
        <x-frontend.lifeAtNpj :galleries="$galleries" :about="$about"  />
    </section>

    @if ($notices->count() > 0)
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = document.getElementById('exampleModal');
                modal.classList.remove('hidden');

                const closeModalButton = document.getElementById('closeModalButton');
                closeModalButton.addEventListener('click', () => {
                    modal.classList.add('hidden');
                });

                
            });
        </script>
    @endif


@endsection
