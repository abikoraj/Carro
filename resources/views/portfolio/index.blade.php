@extends('layouts.app')
@section('page-title', 'Portfolio')
@section('header', 'our Gallary')

@section('content')

    <!-- Gallery area start -->
    <div class="ltn__gallery-area mb-120">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__gallery-menu">
                        <div class="ltn__gallery-filter-menu portfolio-filter text-uppercase mb-50">
                            <button data-filter="*" class="active">all</button>
                            @foreach (App\Models\Tag::all() as $item)
                            <button data-filter=".{{ $item->id }}">{{ $item->tag }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <!-- Portfolio Wrapper Start -->
            <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
            <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide">
                <div class="ltn__gallery-sizer col-1"></div>

                <!-- gallery-item -->
                @foreach (App\Models\Portfolio::all() as $item)
                <div class="ltn__gallery-item {{ $item->tag }} col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="{{ asset($item->image) }}" data-rel="lightcase:myCollection">
                                <img src="{{ asset($item->image) }}" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- <div id="ltn__inline_description_1" style="display: none;">
                <h4 class="first">This content comes from a hidden element on that page</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor.</p>
                <p>Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel.</p>
            </div> --}}

            <!-- pagination start -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__pagination text-center margin-top-50">
                        <ul>
                            <li class="arrow-icon"><a href="#"> &leftarrow; </a></li>
                            <li class="active"><a href="blog.html">1</a></li>
                            <li><a href="blog-2.html">2</a></li>
                            <li><a href="blog-2.html">3</a></li>
                            <li><a href="blog-2.html">...</a></li>
                            <li><a href="blog-2.html">10</a></li>
                            <li class="arrow-icon"><a href="#"> &rightarrow; </a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <!-- pagination end -->

        </div>
    </div>
    <!-- Gallery area end -->

@endsection
