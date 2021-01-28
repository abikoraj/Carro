@extends('layouts.admin.layout')

@section('content')

<section class="content file_manager">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Brands</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Portfolio</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-12">
                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                    </button>
                </div>
                @endif
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Tags</strong></h2>
                        </div>
                        <div class="body shadow">
                            <form action="{{ route('portfolio.tag') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <input type="text" name="tag" class="form-control" placeholder="Enter Tag">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect ">Save</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            @foreach (App\Models\Tag::all() as $item)
                            <span class="badge badge-info" style="font-size: 15px; line-height: 1.61em; !important">
                                {{ $item->tag}}   <a href="{{ route('portfolio.tag.delete',['tag'=>$item->id]) }}" style="color: #fff; padding: 2px;"><i class="zmdi zmdi-close"></i></a>
                            </span>
                            @endforeach
                        </div>
                        {{-- <div class="body">
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> Portfolio</strong></h2>
                        </div>
                        <div class="body clearfix shadow-sm">
                            <form action="{{ route('portfolio.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="image" class="dropify" required data-default-file="{{ asset('assets/img/img-slide/11.jpg') }}">
                                </div>
                                <div class="row">
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <select name="tag" class="form-control show-tick ms select2" data-placeholder="Select">
                                                <option>--Select Tag--</option>
                                                @foreach (App\Models\Tag::all() as $item)
                                                <option value="{{ $item->id }}">{{ $item->tag }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3" style="padding-left: 0;">
                                        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect ">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card col-md-2">
                <div class="header">
                    <h2><strong>Gallary</strong></h2>
                </div>
            </div>
            <div class="row clearfix">
                @foreach (App\Models\Portfolio::all() as $item)
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <a href="{{ route('portfolio.delete',['porto'=>$item->id]) }}" class="file">
                            <div class="hover">
                                <button type="button" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </div>
                            <div class="image">
                                <img src="{{ asset($item->image) }}" alt="img" class="img-fluid">
                                {{-- <p class="m-b-5 text-muted text-center">{{ $item->tag }}</p> --}}
                            </div>
                            {{-- <div class="file-name">
                                <p class="m-b-5 text-muted">img21545ds.jpg</p>
                                <small>Size: 2MB <span class="date">Dec 11, 2019</span></small>
                            </div> --}}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
