@extends('layouts.admin.layout')

@section('content')

<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Testimonial</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Testimonial</li>
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
                            <h2>Add<strong> Testimonial</strong></h2>
                        </div>
                        <form action="{{ route('testimonial.edit', ['testimonial'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="body row">
                                <div class="form-group col-md-3">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="dropify" data-default-file="{{ asset($item->image) }}" value="{{ asset($item->image) }}">
                                </div>
                                <div class="col-md-9 row">
                                    <div class="col-md-6">
                                        <label for="title">Name</label>
                                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter Name" value="{{ $item->name }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subtitle">Designation</label>
                                        <input type="text" name="designation" class="form-control form-control-lg" placeholder="Enter Designation" value="{{ $item->designation }}" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="subtitle">Message</label>
                                        <textarea class="form-control no-resize" name="message" rows="2" maxlength="125" placeholder="Enter Message" required>{{ $item->message }}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary waves-blue btn-lg float-right">Update</button>
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
