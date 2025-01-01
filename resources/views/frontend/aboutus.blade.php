@extends('frontend.layouts.master')
@section('content')
    <x-frontend.hero-component image="{{ asset('assets/frontend/images/background/4.jpg') }}" heading="About Us" />


    <x-frontend.bread-crum heading="About Us" />

    <section>
        <div class="max-w-7xl py-7 px-7  md:px-28">
            <!-- Main Content -->
            <div class="">
                <!-- Title -->
                <h2 class="text-3xl font-bold text-gray-800">
                    Welcome to Our NCMT
                    <span class="hidden md:flex text-[#FFC315] font-extrabold">___</span>
                </h2>

                <!-- Description -->
                <div class="mt-10 text-xl text-justify text-gray-800">

                    {!! $about?->description !!}
                </div>

            </div>
        </div>
    </section>
@endsection
