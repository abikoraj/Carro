@extends('layouts.app')
@section('page-title','Appointment')
@section('header','Get an Appointment')

@section('content')

    <!-- APPOINTMENT AREA START -->
    <div class="ltn__appointment-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__appointment-inner">
                        <form action="#">
                            @csrf
                            <h6>Personal Information</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="ltn__name" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="ltn__lastname" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="ltn__email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="ltn__phone" placeholder="Phone number">
                                    </div>
                                </div>
                            </div>
                            <h6>What type of service do you need on your vehicle?</h6>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="ltn__message" placeholder="Enter message"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <h6>Choose Location</h6>
                                    <div class="input-item">
                                        <select class="nice-select">
                                            <option>Location</option>
                                            <option>Melbourne (9)</option>
                                            <option>Berlin (12)</option>
                                            <option>New York (5)</option>
                                            <option>london (7)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <h6>Choose Date</h6>
                                    <div class="input-item input-item-date">
                                        <input type="date" name="datemin" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <h6>Choose Time</h6>
                                    <div class="input-item input-item-time">
                                        <select class="nice-select">
                                            <option>HH:MM</option>
                                            <option>9:00 AM - 11:00 AM</option>
                                            <option>11:00 AM - 13:00 PM</option>
                                            <option>13:00 PM - 15:00 PM</option>
                                            <option>15:00 PM - 17:00 PM</option>
                                            <option>17:00 PM - 19:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.
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
