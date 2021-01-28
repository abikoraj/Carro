@extends('layouts.admin.layout')

@section('content')

@php
    $item = App\Models\About::first();
@endphp
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
                    @if (session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                        </button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="header">
                            <h2>Edit<strong> About</strong></h2>
                        </div>
                        <form action="{{ route('about.edit',['about'=>$item->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="dropify" data-default-file="{{ asset($item->image) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $item->title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 pl-0">
                                        <div class="form-group">
                                            <label for="">Experience</label>
                                            <input type="text" name="experience" class="form-control" placeholder="Years of Experience" value="{{ $item->experience }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Sub-Title</label>
                                            <input type="text" class="form-control" name="subtitle" maxlength="100" placeholder="Enter Sub-Title" value="{{ $item->subtitle }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 1</label>
                                            <input type="text" name="feature1" class="form-control" placeholder="Enter Feature-1" value="{{ $item->feature1 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-0">
                                        <div class="form-group">
                                            <label for="">Feature 2</label>
                                            <input type="text" name="feature2" class="form-control" placeholder="Enter Feature-2" value="{{ $item->feature2 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Feature 3</label>
                                            <input type="text" name="feature3" class="form-control" placeholder="Enter Feature-3" value="{{ $item->feature3 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-0">
                                        <div class="form-group">
                                            <label for="">Feature 4</label>
                                            <input type="text" name="feature4" class="form-control" placeholder="Enter Feature-4" value="{{ $item->feature4 }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea rows="4" class="form-control no-resize" name="description" maxlength="335" placeholder="Enter Description" required>{{ $item->description }}</textarea>
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
