@extends('layouts.admin.layout')

@section('content')

<section class="content file_manager">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Appoint</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">Appoint</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
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

            {{-- Car Brands Area --}}
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Car Brands</strong></h2>
                        </div>
                        <div class="body shadow">
                            <form action="{{ route('carbrand.submit') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Brands" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 pl-0">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect ">Save</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            @foreach (App\Models\CarBrand::all() as $carbrand)
                            <span class="badge badge-info" style="font-size: 15px; line-height: 1.61em; !important">
                                {{ $carbrand->name}}   <a href="{{ route('carbrand.delete',['carbrand'=>$carbrand->id]) }}" style="color: #fff; padding: 2px;"><i class="zmdi zmdi-close"></i></a>
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- Car Brands Area Ends --}}

            {{-- Bodystyle Area --}}
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Bodystyles</strong></h2>
                        </div>
                        <div class="body shadow">
                            <form action="{{ route('bodystyle.submit') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Enter BodyStyle" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 pl-0">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect ">Save</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            @foreach (App\Models\Bodystyle::all() as $bodystyle)
                            <span class="badge badge-info" style="font-size: 15px; line-height: 1.61em; !important">
                                {{ $bodystyle->name}}   <a href="{{ route('bodystyle.delete',['bodystyle'=>$bodystyle->id]) }}" style="color: #fff; padding: 2px;"><i class="zmdi zmdi-close"></i></a>
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- Bodystyle Area Ends --}}

            {{-- Locations Area --}}
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Locations</strong></h2>
                        </div>
                        <div class="body shadow">
                            <form action="{{ route('location.submit') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Location" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 pl-0">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect ">Save</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            @foreach (App\Models\Location::all() as $location)
                            <span class="badge badge-info" style="font-size: 15px; line-height: 1.61em; !important">
                                {{ $location->name}}   <a href="{{ route('location.delete',['location'=>$location->id]) }}" style="color: #fff; padding: 2px;"><i class="zmdi zmdi-close"></i></a>
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- Locations Area Ends --}}

            {{-- Service Area --}}
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Services</strong></h2>
                        </div>
                        <div class="body shadow">
                            <form action="{{ route('solution.submit') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Service" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 pl-0">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect ">Save</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            @foreach (App\Models\Solution::all() as $solution)
                            <span class="badge badge-info" style="font-size: 15px; line-height: 1.61em; !important">
                                {{ $solution->name}}   <a href="{{ route('solution.delete',['solution'=>$solution->id]) }}" style="color: #fff; padding: 2px;"><i class="zmdi zmdi-close"></i></a>
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- Service Area Ends --}}

        </div>
    </div>
</section>

@endsection
