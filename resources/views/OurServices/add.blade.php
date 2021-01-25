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
                            <h2>Add<strong> Services</strong></h2>
                        </div>
                        <div class="body clearfix shadow-sm">
                            <form action="{{ route('services.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Image</label>
                                        <input type="file" name="image" class="dropify" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Features</label>
                                            <input type="text" name="feature1" class="form-control" placeholder="Feature-1" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="feature2" class="form-control" placeholder="Feature-2" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="feature3" class="form-control" placeholder="Feature-3" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="feature4" class="form-control" placeholder="Feature-4" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="title">Sub-Title</label>
                                        <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub-Title" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary waves-blue btn-lg float-right">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2><strong>Services</strong></h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 c_list c_table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Sub-Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Service::all() as $item)
                                        <tr>
                                            <td>
                                                {{ $item->id }}
                                            </td>
                                            <td>
                                                <img src="{{ asset($item->image) }}"  alt="" style="width: 100px; height: 100px;">
                                            </td>
                                            <td>
                                                {{ $item->title }}
                                            </td>
                                            <td>
                                                {{ $item->subtitle }}
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('services.edit', ['service'=>$item->id]) }}"><i class="zmdi zmdi-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" href="{{ route('services.delete', ['service'=>$item->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
