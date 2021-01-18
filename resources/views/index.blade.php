@extends('layouts.app')

@section('content')

@include('slider.app')

{{-- @include('sections.featured') --}}

@include('about.app')

@include('OurServices.app')

@include('sections.counter')

{{-- @include('sections.teams') --}}

@include('sections.img-slider')

@include('sections.freeService')

@include('sections.brands')

@include('sections.testimonials')


@endsection
