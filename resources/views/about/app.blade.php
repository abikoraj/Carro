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
                <div class="get-a-quote-wrap">
                    <h2>Get A Quote</h2>
                    <form action="#" class="get-a-quote-form">
                        <div class="input-item input-item-name ltn__custom-icon">
                            <input type="text" placeholder="Enter your name">
                        </div>
                        <div class="input-item input-item-email ltn__custom-icon">
                            <input type="email" placeholder="Enter your email">
                        </div>
                        <div class="input-item">
                            <select class="nice-select">
                                <option>Select Car Type</option>
                                <option>New Car</option>
                                <option>Used Car</option>
                            </select>
                        </div>
                        <div class="btn-wrapper mt-0">
                            <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">get an appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->
