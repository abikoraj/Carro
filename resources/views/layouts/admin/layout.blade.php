<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: Aero Bootstrap4 Admin :: Home</title>
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/charts-c3/plugin.css') }}"/>

<link rel="stylesheet" href="{{ asset('assets/backend/plugins/morrisjs/morris.min.css') }}" />
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/style.min.css') }}">

<!-- Multi Select Css -->
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/multi-select/css/multi-select.css') }}">
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/backend/plugins/select2/select2.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/backend/plugins/dropify/css/dropify.min.css') }}">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/backend/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Left Sidebar -->
@include('layouts.admin.header')

@yield('content')


{{-- <script>
    document.getElementById('myCheck').onclick = function() {
        // var video = getElementById('name2');
        // var check = getElementById('check_box');
        // var input = document.querySelectorAll('#btn1, #link1, #btn2, #link2');
        if (this.checked==true)
        {
            video.disabled = false;
            // document.querySelectorAll('#btn1, #link1, #btn2, #link2').disabled=true;
            // input.disabled = false;
            document.getElementById('name2').disabled=false;
            document.getElementById('btn1').disabled=true;
            document.getElementById('link1').disabled=true;
            document.getElementById('btn2').disabled=true;
            document.getElementById('link2').disabled=true;
        }else
        {
            // video.disabled = true;
            // input.disabled = true;
            document.getElementById('name2').disabled=true;
            document.getElementById('btn1').disabled=false;
            document.getElementById('link1').disabled=false;
            document.getElementById('btn2').disabled=false;
            document.getElementById('link2').disabled=false;
        }
    }
</script> --}}


<!-- Jquery Core Js -->
<script src="{{ asset('assets/backend/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ asset('assets/backend/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ asset('assets/backend/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('assets/backend/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
<script src="{{ asset('assets/backend/bundles/c3.bundle.js') }}"></script>

<script src="{{ asset('assets/backend/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/js/pages/index.js') }}"></script>

<script src="{{ asset('assets/backend/plugins/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/pages/forms/dropify.js') }}"></script>

<script src="{{ asset('assets/backend/plugins/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
<script src="{{ asset('assets/backend/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
@yield('scripts')
</body>


</html>
