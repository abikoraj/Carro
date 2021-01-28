@extends('layouts.app')

@section('page-title','Service')
@section('header','What We Do')

@section('content')
@php
    $about = App\Models\About::first();
@endphp
<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{ $about->image }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  RELIABLE SERVICES</h6>
                        <h1 class="section-title">{{ $about->title }}<span>.</span></h1>
                        <p>{{ $about->subtitle }}</p>
                    </div>
                    <div class="about-us-info-wrap-inner about-us-info-devide">
                        <p>{{ $about->description }}</p>
                        <div class="list-item-with-icon">
                            <ul>
                                <li><a href="{{ route('service') }}">{{ $about->feature1 }}</a></li>
                                <li><a href="{{ route('service') }}">{{ $about->feature2 }}</a></li>
                                <li><a href="{{ route('service') }}">{{ $about->feature3 }}</a></li>
                                <li><a href="{{ route('service') }}">{{ $about->feature4 }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Service</h6>
                    <h1 class="section-title">What We Do<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h6 class="ltn__secondary-color">//  Tire and wheel</h6>
                        <h3><a href="service-details.html">There are many variations of passages of Lorem.</a></h3>
                            <ul>
                                <li><span>//</span> Tire puncher with cleaning</li>
                                <li><span>//</span> Tire Customization</li>
                                <li><span>//</span> Tire check & fixing</li>
                                <li><span>//</span> Tire change & color</li>
                            </ul>
                    </div>
                </div>
            </div> --}}
            @foreach (App\Models\Service::all() as $item)
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <img src="{{ asset($item->image) }}" alt="" style="width: 100px; border-radius: 50%;">
                        {{-- <i class="icon-car-service"></i> --}}
                    </div>
                    <div class="service-item-brief">
                        <h6 class="ltn__secondary-color text-uppercase">//  {{ $item->title }}</h6>
                        <h3><a href="service-details.html">{{ $item->subtitle }}</a></h3>
                        <hr>
                        <ul>
                            <li><span>//</span> {{ $item->feature1 }}</li>
                            <li><span>//</span> {{ $item->feature2 }}</li>
                            <li><span>//</span> {{ $item->feature3 }}</li>
                            <li><span>//</span> {{ $item->feature4 }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- BLOG AREA START (blog-4) -->
<div class="ltn__blog-area pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// blog & insights</h6>
                    <h1 class="section-title">News Feeds<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1">
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="assets/img/blog/1.jpg">
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Electric Car Maintenance, Servicing & Repairs</a></h3>
                        <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="assets/img/blog/2.jpg">
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Common Engine Oil Problems and Solutions</a></h3>
                        <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="assets/img/blog/3.jpg">
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">How to Prepare for your First Track Day!</a></h3>
                        <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="assets/img/blog/4.jpg">
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that deals with the normal.</a></h3>
                        <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-4">
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Services</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">How to: Make Your Tires Last Longer</a></h3>
                        <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

@endsection
