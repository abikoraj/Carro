@extends('layouts.admin.layout')

@section('content')

@php
    $item = App\Models\Skill::first();
@endphp

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Skills</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Skills</li>
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
                            <h2>Edit<strong> Skills</strong></h2>
                        </div>
                        <div class="body clearfix shadow-sm">
                            <form action="{{ route('skills.edit',['skill'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <label for="title">Image</label>
                                        <input type="file" name="image" class="dropify" data-default-file="{{ asset($item->image) }}">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row form-group">
                                            <div class="col-md-7">
                                                <label for="title">Skills</label>
                                                <input type="text" name="skill1" class="form-control" value="{{ $item->skill1 }}">
                                            </div>
                                            <div class="col-md-5 pl-0">
                                                <label for="title">Progress</label>
                                                <input type="text" name="progress1" class="form-control" value="{{ $item->progress1 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                <label for="skill2">Skill 2</label>
                                                <input type="text" name="skill2" class="form-control" value="{{ $item->skill2 }}">
                                            </div>
                                            <div class="col-md-5 pl-0">
                                                <label for="progress2">Progress 2</label>
                                                <input type="text" name="progress2" class="form-control" placeholder="Progress 1" required value="{{ $item->progress2 }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                <label for="skill3">Skill 3</label>
                                                <input type="text" name="skill3" class="form-control" value="{{ $item->skill3 }}">
                                            </div>
                                            <div class="col-md-5 pl-0">
                                                <label for="progress3">Progress 3</label>
                                                <input type="text" name="progress3" class="form-control" value="{{ $item->progress3 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title" required value="{{ $item->title }}">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="video">Video Link</label>
                                        <input type="text" name="video" class="form-control" value="{{ $item->video }}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="subtitle">Sub-Title</label>
                                        <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub-Title" required value="{{ $item->subtitle }}" maxlength="52">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary waves-blue btn-lg float-right">Save Changes</button>
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
