<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/multi-select/css/multi-select.css') }}">

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    @if (Route::is('home'))
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    @else
        @include('layouts.page-header')
        @include('layouts.breadcrumb')
        @yield('content')
        @include('layouts.page-footer')
    @endif

    {{-- @if (!Route::is('home'))
        @include('layouts.breadcrumb')
    @endif

    @yield('content')

    @include('layouts.footer') --}}


    <!-- All JS Plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Select2 Js -->
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <!-- Multi Select Plugin Js -->
    <script src="{{ asset('assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script>



    @if(Auth::check())
        <div title="Go To Dashboard" style="text-align:center;height:50px;width:50px;position:fixed;border-radius:5px;left:10px;bottom:10px;background:rgb(229, 62, 41);color:white ;font-size: 25px;
        cursor: pointer;
        z-index: 9999;">
        <a href="{{ route('dashboard') }}" style="color:white !important">
            <i class="fas fa-chevron-right"></i>
        </a>
        </div>
    @endif
</body>

</html>
