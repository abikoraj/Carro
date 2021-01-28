@extends('layouts.app')
@section('page-title','Appointment')
@section('header','Get an Appointment')

@section('content')

    <!-- APPOINTMENT AREA START -->
    <div class="ltn__appointment-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__appointment-inner">
                        <form action="#">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="ltn__secondary-color">Personal Information</h2>
                                    {{-- <div class="form-group mb-0">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <label for="" class="mb-0 font-weight-bold">Name</label>
                                            <input type="text" name="fname" placeholder="First name">
                                        </div>
                                    </div> --}}
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Full Name</h6>
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="name" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Email</h6>
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="email" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Phone</h6>
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="phone" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Choose Location</h6>
                                        <div class="input-item">
                                            <select class="nice-select" name="location">
                                                <option>Location</option>
                                                <option>Melbourne (9)</option>
                                                <option>Berlin (12)</option>
                                                <option>New York (5)</option>
                                                <option>london (7)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="ltn__secondary-color">Specification</h2>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Brand</h6>
                                        <div class="input-item">
                                            <select class="nice-select" name="brand">
                                                <option>Choose</option>
                                                <option>Audi</option>
                                                <option>BMW</option>
                                                <option>Honda</option>
                                                <option>Nissan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Bodystyle</h6>
                                        <div class="input-item">
                                            <select class="nice-select" name="body_style">
                                                <option>Choose</option>
                                                <option>Any</option>
                                                <option>6 Series (1)</option>
                                                <option>7 Series (1)</option>
                                                <option>8 Series (1)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Model</h6>
                                        <div class="input-item">
                                            <input type="text" name="model">
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Year</h6>
                                        <div class="input-item">
                                            <input type="text" name="year">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h6 class="">Services</h6>
                                        <p class="mb-1"><input type="checkbox" name="agree"> wrapping</p>
                                        <p class="mb-1"><input type="checkbox" name="agree"> paint protection</p>
                                        <p class="mb-1"><input type="checkbox" name="agree"> window tinting</p>
                                        <p class="mb-1"><input type="checkbox" name="agree"> graphics design</p>
                                        <p class="mb-1"><input type="checkbox" name="agree"> interior</p>
                                    </div>
                                </div>
                            </div>
                            <h6>What type of service do you need on your vehicle?</h6>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Enter message"></textarea>
                            </div>
                            <div class="btn-wrapper text-center mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- APPOINTMENT AREA END -->

@endsection
