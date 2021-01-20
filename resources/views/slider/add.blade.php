@extends('layouts.admin.layout')

@section('content')

<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Slider</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Slider 1</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class=" col-md-12 justify-content-center">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Slider</strong></h2>
                        </div>
                        <form action="">
                            @csrf
                            <div class="body row">
                                <div class="form-group col-md-6">
                                    <label for="image">Slider Image</label>
                                    <input type="file" name="image" class="dropify" data-default-file="{{ asset('assets/img/slider/21.png') }}">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle">Sub-Title</label>
                                        <input type="text" name="subtitle" class="form-control form-control-lg" placeholder="Enter Sub-Title">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary waves-blue">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
