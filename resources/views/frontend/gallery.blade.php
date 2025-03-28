@extends('frontend.layouts.master')
@section('title', $gallery->title)
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}"
        heading="{{ $gallery->title }}" />

    <x-frontend.bread-crum heading="{{ $gallery->title }}" />

    <div class="container mx-auto px-4 py-8">
        {{-- @if ($gallery->files->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($gallery->files as $file)
                    <div class="overflow-hidden rounded-lg shadow-md">
                        <a href="{{ $file->file_url }}" target="_blank">
                            <img src="{{ $file->file_url }}" alt="Gallery Image" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105">
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">No images available</p>
        @endif --}}
        @if ($gallery->galleryPhotos->isNotEmpty())
            @foreach ($gallery->galleryPhotos as $galleryPhoto)
                <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">


                    @foreach ($galleryPhoto->files as $file)
                        <div class="overflow-hidden rounded-lg shadow-md">
                            <a href="{{ $file->file_url }}" target="_blank">
                                <img src="{{ $file->file_url }}" alt="Gallery Image"
                                    class="w-full h-48 shadow-xl shadow-neutral-900 object-cover transition-transform duration-300 hover:scale-105">
                            </a>
                            <h1 class="font-semibold text-2xl mt-5 text-center ">{{ $galleryPhoto->title }}</h1>

                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <p class="text-center text-gray-500">No images available</p>
        @endif
    </div>
@endsection
