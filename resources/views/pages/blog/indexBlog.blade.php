@extends('front.app')
@section('content')
    <!-- Font Icons -->

    <!-- main wrapper -->
    <div id="wrapper">
        <div class="page-wrapper">
            <main>
                <!-- visual/banner of the page -->
                <section class="visual">
                    <div class="visual-inner blog-default-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                        <div class="container">
                            <div class="visual-text-large text-left visual-center">
                                <h1 class="visual-title visual-sub-title">Blog</h1>
                                <p style="font-size: 20px">Efficiency in Motion: Elevate Safety with Proven Manual Handling Training</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/visual/banner of the page -->
                <!-- main content wrapper -->
                <div class="content-wrapper">
                    <section class="content-block">
                        <div class="container">
                            <div class="row multiple-row">
                                @foreach($blogs as $blog)
                                <div class="col-md-6 col-lg-4">
                                    <div class="col-wrap">
                                        <div class="post-grid reverse-grid reverse-grid">
                                            <div class="img-block post-img">
                                                <a href="{{route('front.show.blog', $blog->id)}}">
                                                    <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-text-block bg-gray-light">
                                                <strong class="content-title mb-0"  style="width: 100%"><a href="{{route('front.show.blog', $blog->id)}}" style="font-size: 24px; display: block; width: 100%"><span>{{$blog->title}}</span></a></strong>
{{--                                                <span class="content-sub-title">{{$blog->description}}</span>--}}
                                                <p style="width: 90%; font-size: 20px">{{ Illuminate\Support\Str::limit($blog->description, 50, '...') }}</p>
                                                <div class="post-meta clearfix">
                                                    <div class="post-link-holder">
                                                        <a href="{{route('front.show.blog', $blog->id)}}" style="font-size: 20px">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div style="margin-top: 50px">
                                {{ $blogs->links('paginator') }}
                            </div>
{{--                            <div class="btn-container full-width-btn top-space">--}}
{{--                                    <a href="javascript:void(0)" class="btn btn-black">LOAD MORE<span class="c-ripple js-ripple"><span class="c-ripple__circle"></span></span></a>--}}
{{--                            </div>--}}
                        </div>
                    </section>
                </div>
                <!--/main content wrapper -->
            </main>
        </div>

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
{{--    <script src="../../../../public/blog/vendors/jquery/jquery-2.1.4.min.js"></script>--}}
{{--    <!-- external scripts -->--}}
{{--    <script src="../../../../public/blog/vendors/tether/dist/js/tether.min.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/bootstrap/js/bootstrap.min.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/stellar/jquery.stellar.min.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/isotope/javascripts/isotope.pkgd.min.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/isotope/javascripts/packery-mode.pkgd.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/owl-carousel/dist/owl.carousel.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/waypoint/waypoints.min.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/counter-up/jquery.counterup.min.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/fancyBox/source/jquery.fancybox.pack.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/image-stretcher-master/image-stretcher.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/wow/wow.min.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/rateyo/jquery.rateyo.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/bootstrap-slider-master/src/js/bootstrap-slider.js"></script>--}}
{{--    <script src="../../../../public/blog/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>--}}
{{--    <script src="../../../../public/blog/js/mega-menu.js"></script>--}}
{{--    <!-- custom jquery script -->--}}
{{--    <script src="{{asset('/blog/js/jquery.main.js')}}"></script>--}}
{{--    <!-- REVOLUTION JS FILES -->--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>--}}
{{--    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>--}}
{{--    <!-- SNOW ADD ON -->--}}
{{--    <script type="text/javascript" src="../../../../public/blog/vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js"></script>--}}
{{--    <!-- revolutions slider script -->--}}
{{--    <script src="../../../../public/blog/js/revolution.js"></script>--}}
@endsection
