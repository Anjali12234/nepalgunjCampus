@extends('frontend.layouts.master')
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Our Gallery" />


    <x-frontend.bread-crum heading="Our Gallery" />


    <div class="container mx-auto px-4 py-8">
        @if ($galleries->isNotEmpty())
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-5">
                @foreach ($galleries as $gallery)
                    <a href="{{ route('galleryList', $gallery) }}" target="_blank">
                        <img src="{{ $gallery->image }}" style="height: 200px;"
                            class="w-full h-52 object-cover rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl"
                            alt="{{ $gallery->title }}">
                        <div class="p-4">
                            <h1 class="text-xl font-semibold text-center text-gray-800 underline">
                                {{ $gallery->title }}
                            </h1>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">No images available</p>
        @endif
    </div>
@endsection
