<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        @foreach (\App\Models\Slider::all() as $slider)

            @if($slider->has_video==1)
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="{{ $slider->video_link }}" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h1 class="slide-title animated ">{{ $slider->title }}</h1>
                                        <h6 class="slide-sub-title animated"><span>//</span> {{ $slider->subtitle }}</h6>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{ asset($slider->image) }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                <div class="ltn__slide-item-inner  text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title ltn__secondary-color animated">// {{ $slider->subtitle }}</h6>
                                        <h1 class="slide-title animated ">{{ $slider->title }}</h1>
                                        <div class="slide-brief animated">
                                            <p>{{ $slider->description }}</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="{{ $slider->btn_link1 }}" class="theme-btn-1 btn btn-effect-1">{{ $slider->btn_text1 }}</a>
                                            <a href="{{ $slider->btn_link2 }}" class="btn btn-transparent btn-effect-3">{{ $slider->btn_text2 }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img slide-img-left">
                                    <img src="{{ asset($slider->image) }}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        @endforeach
    </div>
</div>
<!-- SLIDER AREA END -->
