<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT News</title>
    <link rel="icon" href="{{ asset('images/logos/logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Padauk:wght@400;700&display=swap" rel="stylesheet">
    @yield('head')
</head>
<body>
<div class="py-3 mb-5" id="themeHeaderSpacer">
    @include('blog.layouts.header')
</div>


<div class="container">
    <div class="row justify-content-center g-5">
        <div class="col-12 col-lg-6">

            <div class="">
                {{--Content_Area_start--}}
                    @yield('content')
                {{--Content_Area_end--}}
            </div>

        </div>
            {{--     sidebar_start   --}}
                @include('blog.layouts.sidebar')
            {{--   sidebar_end  --}}
        <div class="col-12 border-bottom mb-0 mt-3">
        </div>

        <div class="col-12">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center my-4">
                    <div class="text-center">
                        Copyright © 2021 IT News
                    </div>
                    <a href="#themeHeaderSpacer" class="btn btn-primary">
                        <i class="feather-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('js/theme.js') }}"></script>
@yield('foot')

</body>
</html>
