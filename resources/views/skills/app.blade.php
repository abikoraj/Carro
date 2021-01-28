<!-- PROGRESS BAR AREA START -->
@php
    $item = App\Models\Skill::first();
@endphp
<div class="ltn__progress-bar-area before-bg-right pt-115 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ltn__progress-bar-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// skills</h6>
                        <h1 class="section-title">{{ $item->title }}<span>.</span></h1>
                        <p>{{ $item->subtitle }}</p>
                    </div>
                    <div class="ltn__progress-bar-inner">
                        <div class="ltn__progress-bar-item">
                            <p>{{ $item->skill1 }}</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width:{{ $item->progress1 }}">
                                    <span>{{ $item->progress1 }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__progress-bar-item">
                            <p>{{ $item->skill2 }}</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width:{{ $item->progress2 }}">
                                    <span>{{ $item->progress2 }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__progress-bar-item">
                            <p>{{ $item->skill3 }}</p>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width:{{ $item->progress3 }}">
                                    <span>{{ $item->progress3 }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30" data-bg="{{ asset($item->image) }}">
                    <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="{{ $item->video }}" data-rel="lightcase:myCollection">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PROGRESS BAR AREA END -->
