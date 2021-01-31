@extends('layouts.app')

@section('page-title','FAQ')
@section('header','Frequently Asked Questions')

@section('content')

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-12">
                <div class="error-404-inner text-center">
                    <h2>Frequently Asked Questions</h2>
                    <h1 class="error-404-title">Coming Soon...</h1>
                    <article>

                    </article>
                    <div class="btn-wrapper">
                        <a href="{{ route('home') }}" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> BACK TO HOME</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        @foreach (App\Models\Faq::all() as $faqs)
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq-item-2-1" aria-expanded="false">
                                    {{ $faqs->question }}
                                </h6>
                                <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>{{ $faqs->answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                        @endforeach
                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Still need help? Reach out to support 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="{{ route('contact') }}" class="theme-btn-1 btn">Contact Us</a>
                        </div>
                        @php
                            $header = App\Models\Header::first();
                        @endphp
                        <h3><i class="fas fa-phone"></i> {{ $header->phone }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">// subscribe</h6>
                        <h4 class="ltn__widget-title">Get Newsletter</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    @php
                        $about = App\Models\About::first();
                    @endphp
                    <div class="widget ltn__banner-widget">
                        <a href="{{ route('about') }}"><img src="{{ $about->image }}" alt="Banner Image"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- FAQ AREA Ends -->

@include('activity.app')
<div style="margin-top: -180px;">
    @include('sections.brands')
</div>

@endsection
