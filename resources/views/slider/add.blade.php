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
                                <h2>Add<strong> Slider</strong></h2>
                            </div>
                            <form action="{{ route('slider.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6">
                                            <label for="title">Image</label>
                                            <input type="file" name="image" class="dropify"
                                                data-default-file="{{ asset('assets/img/slider/21.png') }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Enter Title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="subtitle">Sub-Title</label>
                                                <input type="text" name="subtitle" class="form-control"
                                                    placeholder="Enter Sub-Title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="subtitle">Description</label>
                                                <input type="text" name="description" class="form-control"
                                                    placeholder="Enter Description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-2">
                                            <div class="inlineblock pt-1">
                                                <input name="has_video" id="myCheck" type="checkbox">
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
                                                <input type="text" name="video_link" id="name2" class="form-control"
                                                    placeholder="Enter Video Link" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="form-group col-md-3">
                                            <label for="subtitle">Button-1 Text</label>
                                            <input type="text" id="btn1" name="btn_text1" class="form-control"
                                                placeholder="Enter Button-1 Text">
                                        </div>
                                        <div class="form-group col-md-3 pl-0">
                                            <label for="subtitle">Button-1 Link</label>
                                            <input type="text" id="link1" name="btn_link1" class="form-control checker"
                                                placeholder="Enter Button-1 Link">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="subtitle">Button-2 Text</label>
                                            <input type="text" id="btn2" name="btn_text2" class="form-control checker"
                                                placeholder="Enter Button-2 Text">
                                        </div>
                                        <div class="form-group col-md-3 pl-0">
                                            <label for="subtitle">Button-2 Link</label>
                                            <input type="text" id="link2" name="btn_link2" class="form-control checker"
                                                placeholder="Enter Button-2 Link">
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="form-group col-md-12">
                                            <button type="submit"
                                                class="btn btn-primary btn-lg waves-effect float-right">Upload</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h2><strong>Sliders</strong></h2>
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
                                        @foreach (App\Models\Slider::all() as $item)
                                            <tr>
                                                <td>
                                                    {{ $item->id }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt=""
                                                        style="width: 100px; height: 100px;">
                                                </td>
                                                <td>
                                                    {{ $item->title }}
                                                </td>
                                                <td>
                                                    {{ $item->subtitle }}
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('slider.edit', ['slider' => $item->id]) }}"><i
                                                            class="zmdi zmdi-edit"></i></a>
                                                    <a class="btn btn-danger btn-sm"
                                                        href="{{ route('slider.delete', ['slider' => $item->id]) }}"><i
                                                            class="zmdi zmdi-delete"></i></a>
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

@section('scripts')
<script>
    document.getElementById('myCheck').onchange = function() {
        if (this.checked==true)
        {
            document.getElementById("name2").disabled=false;
            document.getElementById('btn1').disabled=true;
            document.getElementById('link1').disabled=true;
            document.getElementById('btn2').disabled=true;
            document.getElementById('link2').disabled=true;
        }else
        {
            document.getElementById("name2").disabled=true;
            document.getElementById('btn1').disabled=false;
            document.getElementById('link1').disabled=false;
            document.getElementById('btn2').disabled=false;
            document.getElementById('link2').disabled=false;
        }
    }
</script>
@endsection
