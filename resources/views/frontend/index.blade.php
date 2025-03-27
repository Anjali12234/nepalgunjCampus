@extends('frontend.layouts.master')
@section('content')
    <section>
        <x-frontend.slider :sliders="$sliders" />
@if($notices->first()?->status == 1)
        <div id="exampleModal" class="fixed inset-0 z-50 flex  justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                <button id="closeModalButton"
                    class="text-gray-500 hover:text-gray-700 flex justify-between items-center  p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                @foreach ($notices as $notice)
                    @if ($notice->status == 1)
                        <!-- Modal Header -->
                        <div class="flex justify-between items-center border-t  p-4">
                            <h2 class="text-2xl font-semibold text-gray-800">
                                {{ $notice?->title }}
                                <span class="text-yellow-500 font-extrabold">___</span>
                            </h2>

                        </div>
                        <!-- Modal Body -->
                        <div class="p-4 ">
                            <div class="relative">
                                <img src="{{ $notice?->image }}" alt="Notice Image">


                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
        @endif
    </section>
    <section>
        <x-frontend.indexAboutus :about="$about" />
    </section>
    <section>
        <x-frontend.lifeAtNpj :galleries="$galleries" :about="$about" />
    </section>

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
@endsection
