<div id="frontNav">
    <a href="{{route('frontHome')}}" class="logoMainLink">
        <div id="mainLogo">
            <img src="{{asset("images/logo/logomain.png")}}" alt="">
        </div>
    </a>
    <div id="navMenu">
        <a href="{{route('frontHome')}}"><div class="navItem">Home</div></a>
        <a href="{{route('front.faq')}}"><div class="navItem" id="attentionItem">Please Read Faq's</div></a>
{{--        <div class="navItem"><a href="{{route('front.products')}}">Online Courses</a></div>--}}
        <a href="{{route('front.team')}}"><div class="navItem">Team Training</div></a>
        <a href="{{route('front.consulting')}}"><div class="navItem">Consulting</div></a>
        <a href="{{route('front.contact')}}"><div class="navItem">Contact Us</div></a>
        <a href="{{route('front.blog')}}"><div class="navItem">Blog</div></a>
    </div>
    <div id="loginMenu">
        <div id="googleIcon">
            <img src="{{asset("images/logo/cpdMember.png")}}" alt="" id="cpd">
            <img src="{{asset("images/logo/rospa.png")}}" alt="" id="rospa">
            <a href=""><img src="{{asset("images/logo/google-icon.webp")}}" alt=""></a>
        </div>
        <a href="/login"><div class="navItem" id="attentionItem">Login</div></a>
    </div>
</div>
