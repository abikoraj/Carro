<!-- GET A FREE SERVICE AREA START -->
@php
    $item = App\Models\Offer::first();
@endphp
<div class="ltn__get-a-free-service-area" style="margin-bottom: -25px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="get-a-free-service-inner bg-white text-center pt-115 pb-100">
                    <div class="call-to-img">
                        <img src="{{ $item->image }}" alt="#">
                    </div>
                    <div class="call-to-action-inner-content">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            {{-- <h6 class="section-subtitle ltn__secondary-color">//  call to action  //</h6> --}}
                            <h1 class="section-title">{{ $item->title }}<span>.</span></h1>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{ $item->btn_link }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">{{ $item->btn_text }}</a>
                        </div>
                    </div>
                    <span class="call-to-circle-1"></span>
                    <span class="call-to-circle-2 fa-spin"></span>
                    <span class="call-to-bg-icon"><i class="icon-automobile"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- GET A FREE SERVICE AREA END -->
