<!-- COUNTER UP AREA START -->
@php
    $item = App\Models\Activity::first();
@endphp
<div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="assets/img/bg/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle white-color">// activity</h6>
                    <h1 class="section-title white-color">{{ $item->title }}<span>.</span></h1>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white">
                    <div class="counter-icon"> // </div>
                    <h1><span class="counter">{{ $item->value1 }}</span><span class="counterUp-icon">+</span> </h1>
                    <h6>{{ $item->activity1 }}</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white">
                    <div class="counter-icon"> // </div>
                    <h1><span class="counter">{{ $item->value2 }}</span><span class="counterUp-letter">K</span><span class="counterUp-icon">+</span> </h1>
                    <h6>{{ $item->activity2 }}</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white">
                    <div class="counter-icon"> // </div>
                    <h1><span class="counter">{{ $item->value3 }}</span><span class="counterUp-icon">+</span> </h1>
                    <h6>{{ $item->activity3 }}</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white">
                    <div class="counter-icon"> // </div>
                    <h1><span class="counter">{{ $item->value4 }}</span><span class="counterUp-icon">+</span> </h1>
                    <h6>{{ $item->activity4 }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->
