@extends('frontend.layouts.master')
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="{{ $gallery->title }}" />

    <x-frontend.bread-crum heading="{{ $gallery->title }}" />

    <div class="container mx-auto px-4 py-8">
        @if ($gallery->files->isNotEmpty())
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
        @endif
    </div>
@endsection
