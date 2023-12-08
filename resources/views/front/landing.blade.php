@extends('front.app')
@section('content')
    <div id="mainBanner">
        <video autoplay muted loop class="warehouse" >
            <source src="video/bannerVideoBig.mp4" type="video/mp4">
        </video>
        <div class="opacityLayer"></div>
        <div class="mainBannerContent">
            <div class="mainBannerRight">
                <h1 class="mainBannerTitle">Convenient & Effective,<br> Ensuring Your Safe Return to Work</h1>
                <div class="mainBannerDescription">Providing best Online Manual Handling Training Course that delivers top-quality safety instruction, certification management, and consultative services, simplifying the task of ensuring every worker returns home safely.</div>
                <a href="{{route('register')}}"><div class="pulse-button">Pay / Register Here</div></a>
            </div>
        </div>
    </div>

    <div id="statsCounter">
        <div id="counterWrap">
            <div class="counterContent">
                <div class="counterNumbers" id="customersCounter"></div>
                <div class="counterDescription">CUSTOMERS</div>
            </div>
            <div class="counterContent">
                <div class="counterNumbers" id="certificatesCounter"></div>
                <div class="counterDescription">CERTIFICATE'S ISSUED</div>
            </div>
            <div class="counterNumbers" class="counterContent">
                <div id="instructorsCounter"></div>
                <div class="counterDescription">QUALIFIED INSTRUCTORS</div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up">
        <div class="titleText">Awarded for Exceptional Performance in Online Learning in Ireland and Europe</div>
        <div class="borderTitle"></div>
    </div>
    <div class="productSection">
        <div class="productWrapper">
            <div class="product-img" id="productDashImg">
                <img src="{{asset("images/products/productSmall.png")}}" height="420" width="327">
            </div>
            <div class="product-info">
                <div class="product-text">
                    <h1 style="color: #014a22; font-size: 45px">Manual Handling</h1>
                    <img src="{{asset("images/products/saleOver.png")}}" id="overImgDash" alt="">
                    <div class="product-info-icons">
                        <div class="product-icons">
                            <img src="images/icons/back-in-time.png" alt="">
                            <div style="font-size: 21px">Duration: 1-2 hours</div>
                        </div>
                        <div class="product-icons">
                            <img src="images/icons/certificate.png" alt="">
                            <div style="font-size: 21px">Certificate Validity: 3 Years</div>
                        </div>
                        <div class="product-icons">
                            <img src="images/icons/money.png" alt="">
                            <div class="price">
                                <span class="before-price">€ 35</span>
                                <span class="after-price">€ 25</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-price-btn">
                    <a href="{{route('front.product',1)}}"><button type="button" class="buttonInfo" style="background: white;   border: 1px solid var(--yellowColor);color: black;">info</button></a>
                    <form action="{{route('basket.add')}}" method="POST">
                        @csrf
                        <input type="hidden" value="1" name="productId">
                        <button type="submit" class="sale-button" style="color: #414141">SHOP NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="langTitle" data-aos="fade-up">
        <div class="languageText">When you start the course, you'll have the opportunity to choose from that 6 languages:</div>
        <div class="languagesSection">
            <img src="{{asset('images/flags/en.png')}}" alt="">
            <img src="{{asset('images/flags/pl.png')}}" alt="">
            <img src="{{asset('images/flags/ro.png')}}" alt="">
            <img src="{{asset('images/flags/ru.png')}}" alt="">
            <img src="{{asset('images/flags/sp.png')}}" alt="">
            <img src="{{asset('images/flags/ukr.png')}}" alt="">
        </div>
    </div>

    <div class="bulkContainer">
        <div class="innerBulk">
            <div class="bulkLeftSide">
                <div class="bulkTitle">Our online courses are designed for easy completion.</div>
                <div class="bulkLine"></div>
                <div class="bulkItems">
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/subnav/star.png')}}" alt="image">
                        </div>
                        <div class="bulkContent">- Buy your course online.</div>
                    </div>
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/subnav/star.png')}}" alt="image">
                        </div>
                        <div class="bulkContent">- Get started by activating your course and beginning your training.</div>
                    </div>
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/subnav/star.png')}}" alt="image">
                        </div>
                        <div class="bulkContent">- Advance & Complete - Engage with the course, take the exam, and then download your certificate of completion.</div>
                    </div>
                    <div class="bulkItem">
                        <div class="bulkImg">
                            <img src="{{asset('images/subnav/star.png')}}" alt="image">
                        </div>
                        <div class="bulkContent">- For any help or guidance, just email us at info@Irish-ManualHandling.com.</div>
                    </div>
                </div>
            </div>
            <div class="bulkRightSide">
                <img src="{{asset('images/landingBulk.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="cpdContainer">
        <div class="cpdInner">
            <div class="paddingCpd">
                <h2 class="cpdTitle">Complete this CPD and ROSPA Accredited Course to obtain your Official Certificate!</h2>
                <div class="cpdFlex">
                    <div class="cpdLeft">
                        <div class="cpdItems">
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/star.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle">Complete this CPD and ROSPA </div>
                                    <div class="cpdItemContent">Accredited Course to obtain your Official Certificate!</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/star.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle">Certify Your Skills</div>
                                    <div class="cpdItemContent">An Irish Manual Handling Diploma/Certificate, accredited by CPD and ROSPA, validates the skills you have acquired.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/star.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle">Stand Out From the Crowd</div>
                                    <div class="cpdItemContent">Include your Irish Manual Handling Certification on your resume to outshine competitors.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/star.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle">Advance in Your Career</div>
                                    <div class="cpdItemContent">Showcase your Irish Manual Handling Certification to prospective employers, highlighting your skills and capabilities.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cpdRight">
                        <img src="{{asset('images/certExample.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up">
        <div class="titleText">What Our Customers Say</div>
        <div class="borderTitle"></div>
    </div>

    <div id="customersReviews">
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-452ee68c-8e4c-4329-bf9d-d5f4175f5d0e"></div>
    </div>
    <div id="customerReviewsMob">
        <div class="customerReviewsMobWrap">
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-6a3ccd9b-896b-4195-946e-7cba27a27218"></div>
        </div>
    </div>


    <div class="title" data-aos="fade-up">
        <div class="titleText">About Us</div>
        <div class="borderTitle"></div>
    </div>

    <div class="aboutUs" data-aos="fade-up">
        <div class="aboutWrapper">
            <div>
                www.skillcourses.ie was established to provide effective, accessible, and convenient safety training for Irish workers wherever they are located. All courses can be done online.<br>

                www.skillcourses.ie takes great pride in the quality and integrity of its products and services.<br>

                Appropriate safety training can mean the difference between life and death and it is with this belief that we approach our safety training course development and delivery.<br>

                Our certifications are recognized across Ireland, UK and EU<br>

                Our instructors members of:<br>

                - CMIOSH - Chartered Member of IOSH (Institution of Occupational Safety and Health)
                <hr>
                Our instructors are qualified by IOSH, QQI.

                We have a reputation for reliability, quality, and convenience with our products and services.

                For general inquiries, student support, sales, or technical assistance please call us at 019682644

                Alternatively, you may use our chat based support system or email us at {{config('app.email')}}
            </div>
        </div>
    </div>

    <div class="title">
        <div class="titleText">Get your Certificate</div>
        <div class="borderTitle"></div>
        <a href="{{route('register')}}"><div class="pulse-button" data-aos="fade-up">Pay / Register Here</div></a>
    </div>

    <div class="benefitsSection">
        <div class="benefitsWrapper">
            <div class="benefitsLeft" data-aos="fade-up">
                <div class="benefit">
                    <div class="benefitLeft">
                        <div class="benefitTitle">STUDY AT A TIME THAT SUITS YOU</div>
                        <div class="benefitDescription">You can complete your course online at a time and a place that fits in with your other commitments</div>
                    </div>
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #e60b31;">
                            <img src="{{asset("images/logo/home.svg")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitLeft">
                        <div class="benefitTitle">SAVE TIME BY STUDYING ONLINE</div>
                        <div class="benefitDescription">Cut out traveling time, waiting for an open-course to start, and delegates that work at different speeds</div>
                    </div>
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #c3d600;">
                            <img src="{{asset("images/logo/clock.svg")}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitLeft">
                        <div class="benefitTitle">SAVE MONEY BY STUDYING ONLINE</div>
                        <div class="benefitDescription">Studying online cuts out the overheads associated with traditional classroom based training</div>
                    </div>
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #345cb3;">
                            <img src="{{asset("images/logo/wallet.svg")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefitsCenter" data-aos="fade-up">
                <div class="benefitTop">
                    <img src="{{asset("images/banners/laptop1.webp")}}" alt="">
                </div>
                <div class="benefitBottom">
                    <img src="{{asset("images/banners/lap_bottom.png")}}" alt="">
                </div>
            </div>
            <div class="benefitsRight" data-aos="fade-up">
                <div class="benefit">
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #f49c12;">
                            <img src="{{asset("images/logo/download.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="benefitLeftRight">
                        <div class="benefitTitle">STUDY AT A TIME THAT SUITS YOU</div>
                        <div class="benefitDescription">You can complete your course online at a time and a place that fits in with your other commitments</div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #356ce6;">
                            <img src="{{asset("images/logo/internet.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="benefitLeftRight">
                        <div class="benefitTitle">SAVE TIME BY STUDYING ONLINE</div>
                        <div class="benefitDescription">Cut out traveling time, waiting for an open-course to start, and delegates that work at different speeds</div>
                    </div>
                </div>
                <div class="benefit">
                    <div class="benefitRight">
                        <div class="benefitImg" style="border-color: #f91819;">
                            <img src="{{asset("images/logo/high-quality.svg")}}" alt="">
                        </div>
                    </div>
                    <div class="benefitLeftRight">
                        <div class="benefitTitle">SAVE MONEY BY STUDYING ONLINE</div>
                        <div class="benefitDescription">Studying online cuts out the overheads associated with traditional classroom based training</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset("js/counter.js")}}"></script>
@endsection
