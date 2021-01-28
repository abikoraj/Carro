@extends('layouts.admin.layout')

@section('content')

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Footer</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Footer</li>
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
                            <h2>Edit<strong> Operating Hours</strong></h2>
                        </div>
                        <div class="body clearfix">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        {{-- <th>Description</th> --}}
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Footer::all() as $item)
                                        <tr>
                                            <form action="{{ route('footer.edit', ['footer' => $item->id]) }}" method="POST">
                                                @csrf
                                                <td>
                                                    {{ $item->id }}
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="day" placeholder="Enter day" required
                                                        value="{{ $item->day }}">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="time" placeholder="Enter time" required
                                                        value="{{ $item->time }}">
                                                </td>
                                                {{-- <td>
                                                    <input type="text" class="form-control" name="description" placeholder="Enter Description" required
                                                        value="{{ $item->description }}">
                                                </td> --}}
                                                <td>
                                                    {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    {{-- <a href="{{ route('services.delete', ['service' => $item->id]) }}" class="btn btn-danger"> Delete</a> --}}
                                                </td>
                                            </form>
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
