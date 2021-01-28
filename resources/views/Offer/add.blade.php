@extends('layouts.admin.layout')

@section('content')

@php
    $item = App\Models\Offer::first();
@endphp

<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Offer</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">Offer</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button">
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
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
                            <h2>Edit<strong> Offer</strong></h2>
                        </div>
                        <form action="{{ route('offer.edit',['offer'=>$item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="form-group col-md-5">
                                        <label for="title">Image</label>
                                        <input type="file" name="image" class="dropify" data-default-file="{{ asset($item->image) }}" value="{{ asset($item->image) }}">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter Title" required value="{{ $item->title }}">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="subtitle">Button Text</label>
                                                <input type="text" name="btn_text" class="form-control form-control-lg" placeholder="Enter Button Text" required value="{{ $item->btn_text }}">
                                            </div>
                                            <div class="form-group col-md-6 pl-0">
                                                <label for="subtitle">Button Link</label>
                                                <input type="text" name="btn_link" class="form-control form-control-lg" placeholder="Enter Button Link" required value="{{ $item->btn_link }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-primary btn-lg waves-effect float-right">Save Changes</button>
                                            </div>
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
