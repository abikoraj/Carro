@extends('layouts.app')

@section('content')

@include('slider.app')

{{-- @include('sections.featured') --}}

@include('about.app')

@include('OurServices.app')

@include('activity.app')

{{-- @include('sections.teams') --}}

@include('portfolio.app')

@include('sections.freeService')

@include('sections.brands')

@include('testimonial.app')


@endsection
