@extends('layouts.app')

@section('page-title', 'About')
@section('header', 'About Us')

@section('content')
@php
    $item = App\Models\About::first();
@endphp
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120-- pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="assets/img/team/4.jpg" alt="About Us Image">
                        <div class="about-us-img-info about-us-img-info-2">
                            <div class="about-us-img-info-inner">
                                <h1>{{ $item->experience }}<span>+</span></h1>
                                <h6>Years Experience</h6>
                                <!-- <span class="dots-bottom"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// About Us</h6>
                            <h1 class="section-title">{{ $item->title }}<span>.</span></h1>
                            <p>{{ $item->subtitle }}</p>
                        </div>

                        <p>{{ $item->description }}</p>
                        <div class="btn-wrapper">
                            <a href="service" class="theme-btn-3 btn btn-effect-4">OUR SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// features //</h6>
                        <h1 class="section-title">Why Choose Us<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach (App\Models\Service::take(3)->latest()->get() as $service)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <img src="{{ asset($service->image) }}" alt="" style="width: 80px; border-radius: 50%;">
                                {{-- <span><i class="icon-car-parts-3"></i></span> --}}
                            </div>
                            <h3><a href="{{ route('service') }}">{{ $service->title }}</a></h3>
                        </div>
                        <div class="service-item-brief">
                            <ul style="list-style: none;">
                                <li><span>//</span> {{ $service->feature1 }}</li>
                                <li class="mt-0"><span>//</span> {{ $service->feature2 }}</li>
                                <li class="mt-0"><span>//</span> {{ $service->feature3 }}</li>
                                <li class="mt-0"><span>//</span> {{ $service->feature4 }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- CALL TO ACTION START (call-to-action-5) -->
    <div class="call-to-action-area call-to-action-5 bg-image bg-overlay-theme-90 pt-40 pb-25" data-bg="{{ asset('assets/img/bg/13.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-5 text-center">
                        <h2 class="white-color text-decoration">24/7 Availability, Make <a href="{{ route('appointment') }}">An Appointment</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- PROGRESS BAR AREA START -->
    {{-- <div class="ltn__progress-bar-area before-bg-right pt-115 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__progress-bar-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// skills</h6>
                            <h1 class="section-title">We Have A Skillest
                                Team Ever<span>.</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                        <div class="ltn__progress-bar-inner">
                            <div class="ltn__progress-bar-item">
                                <p>Car Repair</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 72%">
                                        <span>72%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Car Rental Service</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 74%">
                                        <span>74%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Car Cleaning & Parts</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 81%">
                                        <span>81%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30" data-bg="assets/img/others/5.jpg">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- PROGRESS BAR AREA END -->

    @include('skills.app')

    @include('testimonial.app')

@endsection
