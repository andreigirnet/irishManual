@extends('front.app')
@section('content')
    <div id="wrapper">
        <div class="page-wrapper">
            <main>
                <!-- main content wrapper -->
                <div class="content-wrapper">
                    <section class="content-block">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-12 less-wide">
                                    <div class="blog-holder">
                                        <article class="blog-article">
                                                <div class="blog-title text-center pb-5">
                                                    <h1>{{$blog->title}}</h1>

                                                </div>
                                            <div class="blog-desc pt-5">
                                                <div class="blog-img">
                                                    <div class="image-wrap">
                                                        <figure class="">
                                                            <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="" style="width: 100%">                                                        </figure>
                                                    </div>
                                                </div>
                                                <p style="font-size: 20px">{!! $blog->content !!}</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                    </section>
                    </div>
                    <!--/main content wrapper -->
            </main>
            </div>
            <!-- footer of the pagse -->
            <!--/footer of the page -->
        </div>
        <!-- search form wrapper -->
        <div class="search-form-wrapper">
            <a href="#" class="nav-search-link close"><span class="icon-android-close"></span></a>
            <div class="holder">
                <input type="search" class="form-control form-control-v1" placeholder="Enter Your Search">
                <button type="submit"><span class="custom-icon-search"></span></button>
            </div>
        </div>
        <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
{{--        <!-- jquery library -->--}}
{{--        <script src="vendors/jquery/jquery-2.1.4.min.js"></script>--}}
{{--        <!-- external scripts -->--}}
{{--        <script src="vendors/tether/dist/js/tether.min.js"></script>--}}
{{--        <script src="vendors/bootstrap/js/bootstrap.min.js"></script>--}}
{{--        <script src="vendors/stellar/jquery.stellar.min.js"></script>--}}
{{--        <script src="vendors/isotope/javascripts/isotope.pkgd.min.js"></script>--}}
{{--        <script src="vendors/isotope/javascripts/packery-mode.pkgd.js"></script>--}}
{{--        <script src="vendors/owl-carousel/dist/owl.carousel.js"></script>--}}
{{--        <script src="vendors/waypoint/waypoints.min.js"></script>--}}
{{--        <script src="vendors/counter-up/jquery.counterup.min.js"></script>--}}
{{--        <script src="vendors/fancyBox/source/jquery.fancybox.pack.js"></script>--}}
{{--        <script src="vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>--}}
{{--        <script src="vendors/image-stretcher-master/image-stretcher.js"></script>--}}
{{--        <script src="vendors/wow/wow.min.js"></script>--}}
{{--        <script src="vendors/rateyo/jquery.rateyo.js"></script>--}}
{{--        <script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>--}}
{{--        <script src="vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>--}}
{{--        <script src="vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>--}}
{{--        <script src="js/mega-menu.js"></script>--}}
{{--        <!-- custom jquery script -->--}}
{{--        <script src="js/jquery.main.js"></script>--}}
{{--        <!-- REVOLUTION JS FILES -->--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>--}}
{{--        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>--}}
{{--        <!-- SNOW ADD ON -->--}}
{{--        <script type="text/javascript" src="vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>--}}
{{--        <!-- revolutions slider script -->--}}
{{--        <script src="js/revolution.js"></script>--}}

@endsection
