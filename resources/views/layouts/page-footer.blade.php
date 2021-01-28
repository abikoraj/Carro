<!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
<footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
    <div class="footer-top-area  section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90">
                        <h6 class="ltn__secondary-color text-uppercase">// time shedule</h6>
                        <h4 class="footer-title">Operating Hours.</h4>
                        <ul>
                            @foreach (App\Models\Footer::take(7)->get() as $item)
                            <li>{{ $item->day }} <span>{{ $item->time }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-md-7">
                    <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                        <h4 class="footer-title">Services.</h4>
                        <div class="footer-menu">
                            <ul>
                                @foreach (App\Models\Service::all() as $item)
                                <li><a href="{{ route('service') }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="footer-widget footer-blog-widget">
                        <h4 class="footer-title">News Feeds.</h4>
                        <div class="ltn__footer-blog-item">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                deals with the normal.</a></h4>
                        </div>
                        <div class="ltn__footer-blog-item">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                deals with the normal.</a></h4>
                        </div>
                        <div class="ltn__footer-blog-item">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                </ul>
                            </div>
                            <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                deals with the normal.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="index.html"><img src="{{ asset(App\Models\Header::first()->logo) }}" alt="Logo"></a>
                        </div>
                        <div class="get-support ltn__copyright-design clearfix">
                            <div class="get-support-info">
                                <h6>Copyright & Design By</h6>
                                <h4>Company - <span class="current-year"></span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-right">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Claim</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER AREA END -->
