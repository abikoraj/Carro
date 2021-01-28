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
                        <div class="body clearfix shadow-sm">
                            <form action="{{ route('services.edit',['service'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Image</label>
                                        <input type="file" name="image" class="dropify" data-default-file="{{ asset($item->image) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Features</label>
                                            <input type="text" name="feature1" class="form-control" placeholder="Feature-1" required value="{{ $item->feature1 }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="feature2" class="form-control" placeholder="Feature-2" required value="{{ $item->feature2 }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="feature3" class="form-control" placeholder="Feature-3" required value="{{ $item->feature3 }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="feature4" class="form-control" placeholder="Feature-4" required value="{{ $item->feature4 }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title" required value="{{ $item->title }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title">Sub-Title</label>
                                        <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub-Title" required value="{{ $item->subtitle }}" maxlength="52">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary waves-blue btn-lg float-right">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
