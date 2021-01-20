@extends('layouts.app')
@section('page-title', 'Portfolio')
@section('header', 'our Gallary')

@section('content')

    <!-- Gallery area start -->
    <div class="ltn__gallery-area mb-120">
        <div class="container">

            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__gallery-menu">
                        <div class="ltn__gallery-filter-menu portfolio-filter text-uppercase mb-50">
                            <button data-filter="*" class="active">all</button>
                            <button data-filter=".filter_category_1">White</button>
                            <button data-filter=".filter_category_2">Red</button>
                            <button data-filter=".filter_category_3">Black</button>
                        </div>
                    </div>
                </div>
            </div> --}}


            <!-- Portfolio Wrapper Start -->
            <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
            <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide">
                <div class="ltn__gallery-sizer col-1"></div>

                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="{{ asset('assets/img/gallery/1.jpg') }}" data-rel="lightcase:myCollection">
                                <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Image">
                                {{-- <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span> --}}
                            </a>
                        </div>
                        {{-- <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div> --}}
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_1" data-rel="lightcase:myCollection">
                                <img src="img/gallery/2.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Inline Description </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="//www.youtube.com/embed/6v2L2UGZJAM?version=3" data-rel="lightcase:myCollection">
                                <img src="img/gallery/3.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fab fa-youtube"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Youtube Video </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="https://player.vimeo.com/video/47362400" data-rel="lightcase:myCollection">
                                <img src="img/gallery/4.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fab fa-vimeo-v"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Vimeo Video </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="media/1.mp4" data-rel="lightcase:myCollection">
                                <img src="img/gallery/5.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-video"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">HTML5 Video </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1575.9076122223137!2d144.96590401578402!3d-37.81779982944919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b6af832249%3A0xe39e415e49a7c44e!2sFlinders%20Street%20Railway%20Station!5e0!3m2!1sen!2sbd!4v1598113544515!5m2!1sen!2sbd" data-rel="lightcase:myCollection">
                                <img src="img/gallery/6.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Google Map </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection" data-lc-caption="Your caption Here">
                                <img src="img/gallery/7.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fab fa-acquisitions-incorporated"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Image Caption </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/no-image.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/8.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-not-equal"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Not Found</a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/9.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/10.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/1.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-lg-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/2.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
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
