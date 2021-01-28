@extends('layouts.admin.layout')

@section('content')

@php
    $item = App\Models\Activity::first();
@endphp

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Activity</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Header Settings</a>
                        </li>
                        <li class="breadcrumb-item active">Activity</li>
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
                            <h2>Edit<strong> Activity</strong></h2>
                        </div>
                        <div class="body clearfix shadow-sm">
                            <form action="{{ route('activity.edit',['activity'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="image">Background Image</label>
                                        <input type="file" name="image" class="dropify" data-default-file="{{ asset($item->image) }}">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="title">Activities</label>
                                                <input type="text" name="activity1" class="form-control" placeholder="Activity-1" value="{{ $item->activity1 }}">
                                            </div>
                                            <div class="form-group col-md-6 pl-0">
                                                <label for="title">Values</label>
                                                <input type="text" name="value1" class="form-control" placeholder="Value-1" value="{{ $item->value1 }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="activity2" class="form-control" placeholder="Activity-2" required value="{{ $item->activity2 }}">
                                            </div>
                                            <div class="form-group col-md-6 pl-0">
                                                <input type="text" name="value2" class="form-control" placeholder="Value-2" required value="{{ $item->value2 }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="activity3" class="form-control" placeholder="Activity-3" required value="{{ $item->activity3 }}">
                                            </div>
                                            <div class="form-group col-md-6 pl-0">
                                                <input type="text" name="value3" class="form-control" placeholder="Value-3" required value="{{ $item->value3 }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="activity4" class="form-control" placeholder="Activity-4" required value="{{ $item->activity4 }}">
                                            </div>
                                            <div class="form-group col-md-6 pl-0">
                                                <input type="text" name="value4" class="form-control" placeholder="Value-4" required value="{{ $item->value4 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control form-group-lg" placeholder="Enter Title" required value="{{ $item->title }}">
                                    </div>
                                    <div class="form-group col-md-2 pt-4">
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
