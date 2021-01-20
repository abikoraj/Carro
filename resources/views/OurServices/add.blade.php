@extends('layouts.admin.layout')

@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                        </li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class=" col-md-12 justify-content-center">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Services</strong></h2>
                        </div>
                        <form action="">
                            @csrf
                            <div class="body row">
                                <div class="form-group col-md-4">
                                    <label for="image">Slider Image</label>
                                    <input type="file" name="image" class="dropify" data-default-file="{{ asset('assets/img/slider/21.png') }}">
                                </div>
                                <div class="col-md-8">
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

        {{-- <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="alert alert-warning" role="alert">
                        <strong>Bootstrap</strong> Better check yourself, <a target="_blank" href="https://getbootstrap.com/docs/4.2/components/forms/">View More</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                        </button>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Edit<strong> About</strong></h2>
                        </div>
                        <form action="" method="post">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Sub-Title</label>
                                            <input type="text" class="form-control" name="subtitle" maxlength="100" placeholder="Enter Sub-Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 1</label>
                                            <input type="text" name="feature1" class="form-control" placeholder="Enter Feature-1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 2</label>
                                            <input type="text" name="feature2" class="form-control" placeholder="Enter Feature-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 3</label>
                                            <input type="text" name="feature3" class="form-control" placeholder="Enter Feature-3">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 4</label>
                                            <input type="text" name="feature4" class="form-control" placeholder="Enter Feature-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group mt-3">
                                            <button type="submit" class="float-right btn btn-primary btn-lg">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>

@endsection
