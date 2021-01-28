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
        <div class="row justify-content-center">
            @foreach (App\Models\Service::take(3)->latest()->get() as $item)
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
            {{-- <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-mechanic"></i>
                    </div>
                    <div class="service-item-brief">
                        <h6 class="ltn__secondary-color text-uppercase">//  Drivability problems</h6>
                        <h3><a href="service-details.html">majority have suffered alteration in some form.</a></h3>
                        <hr>
                        <ul>
                            <li><span>//</span> Tire puncher with cleaning</li>
                            <li><span>//</span> Tire Customization</li>
                            <li><span>//</span> Tire check & fixing</li>
                            <li><span>//</span> Tire change & color</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-cog"></i>
                    </div>
                    <div class="service-item-brief">
                        <h6 class="ltn__secondary-color text-uppercase">//  Automotive filters</h6>
                        <h3><a href="service-details.html">Excellece in automotive services since 1996.</a></h3>
                        <hr>
                        <ul>
                            <li><span>//</span> Tire puncher with cleaning</li>
                            <li><span>//</span> Tire Customization</li>
                            <li><span>//</span> Tire check & fixing</li>
                            <li><span>//</span> Tire change & color</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->
