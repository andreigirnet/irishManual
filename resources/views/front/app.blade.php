<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>Irish Safety Training - Online Manual Handling Course</title>
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">
    {{-- Css --}}
    <link rel = "icon" href ="{{asset('images/logo/flavicon.png')}}" type = "image/x-icon">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/registerInclude.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/brandSwiper.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/landing.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/products.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/product.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/teamTraining.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/faq.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/contact.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/consulting.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/login.css")}}">
    <link media="all" rel="stylesheet" href="../../../../public/blog/css/fonts/icomoon/icomoon.css">
    <link media="all" rel="stylesheet" href="../../../../public/blog/css/fonts/roxine-font-icon/roxine-font.css">
    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/font-awesome/css/font-awesome.css">
    <!-- Vendors -->
    {{--    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/owl-carousel/dist/assets/owl.carousel.min.css">--}}
    {{--    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/owl-carousel/dist/assets/owl.theme.default.min.css">--}}
    {{--    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/animate/animate.css">--}}
    {{--    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/rateyo/jquery.rateyo.css">--}}
    {{--    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/bootstrap-datepicker/css/bootstrap-datepicker.css">--}}
    {{--    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/fancyBox/source/jquery.fancybox.css">--}}
    {{--    <link media="all" rel="stylesheet" href="../../../../public/blog/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css">--}}
    <!-- Bootstrap 4 -->
    <link media="all" rel="stylesheet" href="{{asset('/blog/css/bootstrap.css')}}">
    <!-- Rev Slider -->
    <link rel="stylesheet" type="text/css" href="../../../../public/blog/vendors/rev-slider/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="../../../../public/blog/vendors/rev-slider/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="../../../../public/blog/vendors/rev-slider/revolution/css/navigation.css">
    <!-- Theme CSS -->
    <link media="all" rel="stylesheet" href="{{asset('/blog/css/main.css')}}">
    <!-- Custom CSS -->
    <link media="all" rel="stylesheet" href="{{asset('/blog/css/custom.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
@include("frontIncludes/hamburger")
@include("frontIncludes/responsiveNav")
@include("frontIncludes/frontNav")

@yield('content')
<script>
window.replainSettings = { id: 'c80878c4-2fae-43e0-9c25-b83f75ab8a61' };
(function(u){var s=document.createElement('script');s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@include("frontIncludes/registerInclude")
@include("frontIncludes/footer")
@include("frontIncludes/brandSwiper")
<script src="{{asset("js/hamburgerAction.js")}}"></script>
<script src="{{asset("js/brandSwiper.js")}}"></script>
<script src="{{asset("js/accordion.js")}}"></script>
<script src="{{asset("js/review.js")}}"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
