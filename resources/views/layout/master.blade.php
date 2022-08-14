<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- App css -->
    <link href="{{ asset('/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        body{
            overflow-y: scroll;
            overflow-x: hidden;
        }
    </style>
</head>

<body
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false}'>
    <!-- Begin page -->
    <div class="wrapper">
        @include('layout.leftsidebar')
        <div class="content-page">
            <div class="content">
                @include('layout.header')
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.footer')

        </div>
    </div>
    {{-- @include('layout.rightsidebar') --}}
    <!-- bundle -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/event.js') }}"></script>
    <script src="{{ asset('/js/vendor.min.js') }}"></script>
    <script src="{{ asset('/js/app.min.js') }}"></script>
</body>

</html>
