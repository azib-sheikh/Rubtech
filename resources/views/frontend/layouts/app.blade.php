
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>@stack('title', 'My Laravel App')</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{asset('css/slicknav.min.css')}}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
	<!-- Font Awesome Icon Css-->
	<link href="{{asset('css/all.css')}}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{asset('css/mousecursor.css')}}">
	<!-- Main Custom Css -->
	<link href="{{asset('css/custom.css')}}" rel="stylesheet" media="screen">
</head>
<body>

    {{-- Header --}}
    @include('frontend.components.header')

    {{-- Main content --}}

    @yield('content')


    
  {{--   Footer --}}
   @include('frontend.components.footer')

    <!-- Jquery Library File -->
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap js file -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Validator js file -->
    <script src="{{asset('js/validator.min.js')}}"></script>
    <!-- SlickNav js file -->
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <!-- Swiper js file -->
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <!-- Counter js file -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <!-- Isotop js file -->
	<script src="{{asset('js/isotope.min.js')}}"></script>
    <!-- Magnific js file -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- SmoothScroll -->
    <script src="{{asset('js/SmoothScroll.js')}}"></script>
    <!-- Parallax js -->
    <script src="{{asset('js/parallaxie.js')}}"></script>
    <!-- MagicCursor js file -->
    <script src="{{asset('js/gsap.min.js')}}"></script>
    <script src="{{asset('js/magiccursor.js')}}"></script>
    <!-- Text Effect js file -->
    <script src="{{asset('js/SplitText.js')}}"></script>
    <script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
    <!-- YTPlayer js File -->
    <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Wow js file -->
    <script src="{{asset('js/wow.js')}}"></script>
    <!-- Main Custom js file -->
    <script src="{{asset('js/function.js')}}"></script>
</body>
</html>