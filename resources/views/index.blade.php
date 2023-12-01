@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
@include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
<div class="homePageAdminContent">
    @if (session('created'))
        <div class="modalRegisterComplete" id="modalRegisterEmployer">
            <div class="modalTitle">Hi there</div>
            <p>Its <a href="{{route('home')}}">irish-safetytraining.com</a> Training Centre here.</p>
            <div class="modalText">
                <div>
                    If you need any additional information or help pls feel free to contact us anytime through the chat on our website.
                    <br><br>
                    You can take the course by following the steps from our website if you are logged in or come back later anytime through your email that was sent to you right now from our system using your login details ( password & email).Check your spam/junk mail just in case.
                    <br><br>
                    You can choose the language you need for taking your training after the payment it’s processed successfully (English/Polish/Spanish/Russian/Romanian)
                    <br><br>
                    We are assisting our customers from 10am till 7-8pm every single day including weekends.
                </div>
            </div>
            <div class="modalText">
                Kind regards
            </div>
            <div class="adminButton" style="display: flex; align-items: center; justify-content: center; margin-top: 20px" id="understoodButton">UNDERSTOOD</div>
        </div>
    @endif
    <div class="adminHomePageTitle">EFFECTIVE AND ACCESIBLE</div>
    <div class="adminHomePageInformation">
        <b class="textColorTitle">{{env('APP_NAME')}}</b>
        stands as one of Ireland's premier providers of straightforward, efficient, and easily accessible training materials for occupational health and safety. Our primary focus lies in delivering exceptional customer service and ensuring regulatory compliance for our extensive clientele in Ireland and internationally. Through our user-friendly online learning platform, we facilitate seamless training experiences, whether for individuals or large groups of staff members.
    </div>
    @if($userPackageId)
        <div class="notice">
            <div class="noticeTitle">Notice:</div>
            <div class="noticeText">
                Please Notice : You have received the course / courses, either after your own purchase or from employer.
                <br>
                To be able to start training, you need to activate it first by pressing the following link and after that press on the Study button to get started.
                <br><br>
                Follow the link bellow
                <br>
            </div>
            <a class="homeDownloadButton" href="{{route('package.index')}}">Link</a>
        </div>
    @endif
    <div class="homeActionButtons">
        @if($userPackageId)
            <a href="{{route('course.index', $userPackageId[0]->id)}}" class="homeStartCourseButton">Start Course</a>
        @else
            <form action="{{route('basket.add')}}" method="POST">
                @csrf
                <input type="hidden" value="1" name="productId">
                <button type="submit" class="homeStartCourseButton">Buy a course</button>
            </form>
        @endif
        @if($certificateId)
            <a href="{{route('certificate.download', $certificateId[0]->id)}}" class="homeDownloadButton">Downloand Certificate</a>
        @endif
    </div>
    <div class="productSection">
        <div class="productWrapper">
            <div class="product-img" id="productDashImg">
                <img src="{{asset("images/products/3.png")}}" id="overImgDash" alt="">
                <img src="{{asset("images/products/productSmall.png")}}" height="420" width="327">
            </div>
            <div class="product-info">
                <div class="product-text">
                    <h1 style="color: #014a22">Manual Handling</h1>
                    <h2>By {{env("app_name")}}</h2>
                    <div class="product-info-icons">
                        <div class="product-icons">
                            <img src="images/icons/back-in-time.png" alt="">
                            <div>Duration: 1-2 hours</div>
                        </div>
                        <div class="product-icons">
                            <img src="images/icons/certificate.png" alt="">
                            <div>Certificate Validity: 3 Years</div>
                        </div>
                        <div class="product-icons">
                            <img src="images/icons/money.png" alt="">
                            <div style="font-weight: bold; font-size: 20px; color: #014a22">Only 25€</div>
                        </div>
                    </div>
                </div>
                <div class="product-price-btn">
                    <a href="{{route('front.product',1)}}"><button type="button" class="buttonInfo" style="background: white;   border: 1px solid var(--yellowColor);color: black;">info</button></a>
                    <form action="{{route('basket.add')}}" method="POST">
                        @csrf
                        <input type="hidden" value="1" name="productId">
                        <button type="submit">Add To Basket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="langTitle">
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
</div>
<script src="{{asset('js/showModalRegisterEmployee.js')}}"></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
