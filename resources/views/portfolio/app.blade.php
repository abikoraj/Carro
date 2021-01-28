<!-- IMAGE SLIDER AREA START (img-slider-3) -->
<div class="ltn__img-slider-area pb-100 pt-100 mb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">// Portfolio</h6>
                    <h1 class="section-title">Our Gallary<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__image-slider-3-active slick-arrow-1 slick-arrow-1-inner">
            @foreach (App\Models\Portfolio::take(6)->latest()->get() as $item)
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-3 mb-0">
                    <a href="{{ $item->image }}" data-rel="lightcase:myCollection">
                        <img src="{{ $item->image }}" alt="Image">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn-wrapper offset-md-5">
            <a href="{{ route('portfolio') }}" class="btn theme-btn-3 btn-effect-4 text-uppercase mt-4 mb-4">Load More  <i class="fas fa-arrow-right"></i></a>
        </div>
        <hr>
    </div>
</div>
<!-- IMAGE SLIDER AREA END -->
