@extends('layouts.admin.layout')

@section('content')

<!-- Main Content -->

<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    {{-- <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-plus"></i></button> --}}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="header">
                            <h2><strong>Appointments</strong></h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover c_table theme-color">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th class="hidden-md-down">Email</th>
                                        <th>Phone</th>
                                        <th>Location</th>
                                        <th>Brand</th>
                                        <th class="hidden-md-down">Bodystyle</th>
                                        <th>Model</th>
                                        <th class="hidden-md-down">Year</th>
                                        <th>Services</th>
                                        <th class="hidden-md-down">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Appoint::all() as $appoint)
                                    <tr>
                                        <td>{{ $appoint->id }}</td>
                                        <td>{{ $appoint->name }}</td>
                                        <td>{{ $appoint->email }}</td>
                                        <td>{{ $appoint->phone }}</td>
                                        <td>{{ $appoint->location->name }}</td>
                                        <td>{{ $appoint->car_brand->name }}</td>
                                        <td>{{ $appoint->bodystyle->name }}</td>
                                        <td>{{ $appoint->model }}</td>
                                        <td>{{ $appoint->year }}</td>
                                        <td>{{ $appoint->service }}</td>
                                        <td>{{ $appoint->message }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- <ul class="pagination pagination-primary mt-4">
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
