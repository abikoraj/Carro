<!-- ABOUT US AREA START -->
@php
    $item = App\Models\About::first();
@endphp
<div class="ltn__about-us-area pt-115 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// About Us</h6>
                        <h1 class="section-title">{{ $item->title }}<span>.</span></h1>
                        <p>{{ $item->subtitle }}</p>
                    </div>
                    <div class="about-us-info-wrap-inner about-us-info-devide">
                        <p>{{ $item->description }}</p>
                        <div class="list-item-with-icon">
                            <ul>
                                <li><a href="{{ route('service') }}">{{ $item->feature1 }}</a></li>
                                <li><a href="{{ route('service') }}">{{ $item->feature2 }}</a></li>
                                <li><a href="{{ route('service') }}">{{ $item->feature3 }}</a></li>
                                <li><a href="{{ route('service') }}">{{ $item->feature4 }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    {{-- @if ($item->image == NULL)
                    <img src="{{ asset('assets/img/team/4.jpg') }}" alt="About Us Image">
                    @endif --}}
                    <img src="{{ asset($item->image) }}">
                    <div class="about-us-img-info about-us-img-info-2">
                        <div class="about-us-img-info-inner">
                            <h1>{{ $item->experience }}<span>+</span></h1>
                            <h6>Years Experience</h6>
                            <!-- <span class="dots-bottom"></span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->
