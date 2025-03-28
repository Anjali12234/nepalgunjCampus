@extends('frontend.layouts.master')
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="Our Gallery" />


    <x-frontend.bread-crum heading="Our Gallery" />

    <div class="container mx-auto px-4 py-8">

        <div class="overflow-hidden rounded-lg shadow-md">
            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10 mx-5">
                    @foreach ($galleries as $gallery)
                    <div class="mb-5 mt-5">

                        <a href="{{ route('galleryList',$gallery) }}" >
                            <img src="{{ $gallery->image }}" alt="Gallery Image"
                                class="w-full h-60 shadow-xl shadow-neutral-900 object-cover transition-transform duration-300 hover:scale-105">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
@endsection
