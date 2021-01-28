@extends('layouts.admin.layout')

@section('content')

<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Slider</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">Slider</li>
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
                            <h2>Edit<strong> Slider</strong></h2>
                        </div>
                        <form action="{{ route('slider.edit',['slider'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6">
                                        <label for="title">Image</label>
                                        <input type="file" name="image" class="dropify" data-default-file="{{ asset($item->image) }}">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter Title" required value="{{ $item->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle">Sub-Title</label>
                                            <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub-Title" required value="{{ $item->subtitle }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle">Description</label>
                                            <input type="text" name="description" class="form-control" placeholder="Enter Description" value="{{ $item->description }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-2">
                                        <div class="inlineblock pt-1">
                                            <input name="has_video" id="remember_me_3" type="checkbox" value="1">
                                            <label for="has_video">
                                                Has Video
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 form-control-label pt-2 text-center">
                                        <label for="video_link">Video Link</label>
                                    </div>
                                    <div class="col-md-8 pl-0">
                                        <div class="form-group">
                                            <input type="text" name="video_link" class="form-control" placeholder="Enter Video Link" value="{{ $item->video_link }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="form-group col-md-3">
                                        <label for="subtitle">Button-1 Text</label>
                                        <input type="text" name="btn_text1" class="form-control" placeholder="Enter Button-1 Text" value="{{ $item->btn_text1 }}">
                                    </div>
                                    <div class="form-group col-md-3 pl-0">
                                        <label for="subtitle">Button-1 Link</label>
                                        <input type="text" name="btn_link1" class="form-control" placeholder="Enter Button-1 Link" value="{{ $item->btn_link1 }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="subtitle">Button-2 Text</label>
                                        <input type="text" name="btn_text2" class="form-control" placeholder="Enter Button-2 Text" value="{{ $item->btn_text2 }}">
                                    </div>
                                    <div class="form-group col-md-3 pl-0">
                                        <label for="subtitle">Button-2 Link</label>
                                        <input type="text" name="btn_link2" class="form-control" placeholder="Enter Button-2 Link" value="{{ $item->btn_link2 }}">
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg waves-effect float-right">Upload</button>
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
