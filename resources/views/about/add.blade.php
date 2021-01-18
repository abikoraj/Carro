@extends('layouts.admin.layout')

@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>About Us</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
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
                                            <input type="text" class="form-control" placeholder="Enter Title">
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
                                            <input type="text" class="form-control" placeholder="Enter Feature-1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 2</label>
                                            <input type="text" class="form-control" placeholder="Enter Feature-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 3</label>
                                            <input type="text" class="form-control" placeholder="Enter Feature-3">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 4</label>
                                            <input type="text" class="form-control" placeholder="Enter Feature-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea rows="4" class="form-control no-resize" name="description" maxlength="335" placeholder="Enter Description"></textarea>
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


        </div>
    </div>
</section>

@endsection
