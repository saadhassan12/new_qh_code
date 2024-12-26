<html lang="en">
<title>QH</title>
    <link rel="icon" type="image/x-icon" class ="logo" href="{{ asset('assets/images/QH-logo-remove.png') }}">

@include('layout.header')

<body style ="overflow-x: hidden;">
    @include('layout.nav')
    {{--content starts here--}}
    <div class="container-fluid p-0">
    @yield('content')
    </div>
    @include('layout.footer')




<!-- bootstrap js file -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- js files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
@yield('javascript')
</body>

</html>
