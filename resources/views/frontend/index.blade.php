
@extends('frontend.layouts.master')
@section('content')
<Section>
    <x-frontend.slider :sliders="$sliders"/>
</Section>
<section>
    <x-frontend.indexAboutus :about="$about" />
</section>
<section>
    <x-frontend.lifeAtNpj :galleries="$galleries"/>
</section>
@endsection
