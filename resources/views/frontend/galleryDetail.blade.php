@extends('frontend.layouts.master')

@section('title', $gallery->galleryPhotos->first()->title)

@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}"
        heading="{{ $gallery->galleryPhotos->first()->title }}" />

    <x-frontend.bread-crum heading="{{ $gallery->galleryPhotos->first()->title }}" />

    <div class="container mx-auto px-4 py-8">
        @if ($gallery->galleryPhotos->isNotEmpty())
            @foreach ($gallery->galleryPhotos as $galleryPhoto)
                <div class="mb-8">
                    <!-- Gallery Title -->
                    <h1 class="text-xl font-semibold text-center text-gray-800 mb-4">
                        {{ $galleryPhoto->title }}
                    </h1>

                    <!-- Responsive Image Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-5">
                        @foreach ($galleryPhoto->files as $file)    
                            <a href="{{ $file->file_url }}" target="_blank">
                                <img src="{{ $file->file_url }}" style="height: 200px;" 
                                    class="w-full h-52 object-cover rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl" 
                                    alt="{{ $galleryPhoto->title }}">
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-500">No images available</p>
        @endif
    </div>
@endsection
