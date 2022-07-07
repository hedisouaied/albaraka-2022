<!DOCTYPE html>
<html>
<head>
    @include('frontend.layouts.head')

</head>

<div class="page-wrapper">



        @include('frontend.layouts.header')

    <div class="page-content">
        @yield('content')
    </div>

    @include('frontend.layouts.footer')

<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

</div>

@include('frontend.layouts.script')

</body>
</html>
