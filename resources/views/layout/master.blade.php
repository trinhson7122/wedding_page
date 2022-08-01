<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App css -->
    <link href="{{ asset('/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    {{-- <link href="{{ asset('/css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" /> --}}
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        .error{
            color: red;
        }
        body{
            overflow: scroll;
        }
    </style>
</head>

<body
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
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
    @include('layout.modal')
    {{-- @include('layout.rightsidebar') --}}
    <!-- bundle -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/js/event.js') }}"></script>
    <script src="{{ asset('/js/vendor.min.js') }}"></script>
    <script src="{{ asset('/js/app.min.js') }}"></script>
</body>

</html>
