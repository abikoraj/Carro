@extends('layouts.app')
@section('page-title','Appointment')
@section('header','Get an Appointment')

@section('content')

    <!-- APPOINTMENT AREA START -->
    <div class="ltn__appointment-area pb-80">
        <div class="col-12">
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                </button>
            </div>
            @endif
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__appointment-inner">
                        <form action="{{ route('appoint.submit') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
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
                                            <input type="text" name="name" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Email</h6>
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="email" placeholder="Email address" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Phone</h6>
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="phone" placeholder="Phone number" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Location</h6>
                                        <div class="input-item">
                                            <select class="nice-select" name="location_id" required aria-placeholder="hello">
                                                {{-- <option>Choose Location</option> --}}
                                                <option value="" disabled selected>Choose Location</option>
                                                @foreach (App\Models\Location::all() as $location)
                                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="ltn__secondary-color">Specification</h2>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Brand</h6>
                                        <div class="input-item">
                                            <select class="nice-select" name="car_brand_id" required>
                                                <span class="text-danger">@error('car_brand_id'){{ $message }} @enderror</span>
                                                <option value="" disabled selected>Choose Brand</option>
                                                @foreach (App\Models\CarBrand::all() as $carbrand)
                                                <option value="{{ $carbrand->id }}">{{ $carbrand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Bodystyle</h6>
                                        <div class="input-item">
                                            <select class="nice-select" name="bodystyle_id" required>
                                                <option value="" disabled selected>Choose</option>
                                                @foreach (App\Models\Bodystyle::all() as $bodystyle)
                                                <option value="{{ $bodystyle->id }}">{{ $bodystyle->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Model</h6>
                                        <div class="input-item">
                                            <input type="text" name="model" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="mb-0">Year</h6>
                                        <div class="input-item">
                                            <input type="text" name="year" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <h6 class="">Services</h6>
                                        <div class="input-item">
                                            @foreach (App\Models\Solution::all() as $solution)
                                            <input type="checkbox" name="service[]" value="{{ $solution->name }}" style="margin-left: 5px"> {{ $solution->name }}
                                            @endforeach
                                            {{-- <select class="nice-select" name="service[]" required multiple>
                                                <option value="" disabled selected>Choose</option>
                                                <option value="{{ $solution->name }}">{{ $solution->name }}</option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6>What type of service do you need on your vehicle?</h6>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Enter message" required></textarea>
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
