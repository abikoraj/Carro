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
            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                    </button>
                </div>
            @endif
            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add<strong> FAQs</strong></h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="{{ route('faq.submit') }}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="question">Question</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 pl-0">
                                        <div class="form-group">
                                            <input type="text" name="question" class="form-control" placeholder="Enter Question">
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                        <label for="password_2">Answer</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 pl-0">
                                        <div class="form-group">
                                            <textarea rows="5" name="answer" class="form-control no-resize" placeholder="Enter Answer"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-lg waves-effect float-right">Uploaad</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class=" col-md-12 justify-content-center">
                    <div class="card">
                        <div class="header">
                            <h2><strong>FAQs</strong></h2>
                        </div>
                        <div class="body clearfix">
                            <table class="table table-hover" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>#id</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        {{-- <th>Description</th> --}}
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Faq::all() as $item)
                                        <tr>
                                            <form action="{{ route('faq.edit', ['faq' => $item->id]) }}" method="POST">
                                                @csrf
                                                <td>
                                                    {{ $item->id }}
                                                </td>
                                                <td>
                                                    <textarea rows="3" name="question" class="form-control no-resize" placeholder="Enter Question">{{ $item->question }}</textarea>
                                                    {{-- <input type="text" class="form-control" name="day" placeholder="Enter day" required
                                                        value="{{ $item->day }}"> --}}
                                                </td>
                                                <td>
                                                    <textarea rows="3" name="answer" class="form-control no-resize" placeholder="Enter Answer">{{ $item->answer }}</textarea>
                                                    {{-- <input type="text" class="form-control" name="time" placeholder="Enter time" required
                                                        value="{{ $item->time }}"> --}}
                                                </td>
                                                <td>
                                                    <div class="col-md-10">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <a href="{{ route('faq.delete', ['faq' => $item->id]) }}" class="btn btn-danger"> Delete </a>
                                                        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                                                    </div>
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
