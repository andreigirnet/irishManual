@extends('front.app')
@section('content')
    <div class="secondaryBannerContact">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle" x-text="data.contact">Contact Us</div>
    </div>
    <div class="trainTeamsSection">
        <div class="trainTeamsWrapper">
            <div class="teamTitle">
                <div class="modalTitle" style="text-align: center" >
                    <span x-text="data.contactTap">Tap the WhatsApp ➤</span> <span><a href="https://wa.me/353894631967"><img src="{{asset('images/logo/whatsapp.png')}}" style="width: 35px; cursor: pointer" alt=""></a></span>  <span x-text="data.contactSwitch">to switch to our chat instantly.</span>
                    <br> <span x-text="data.contactOr">Or contact us on</span> 0894631967
                </div>
            </div>
            <div class="teamDescription" x-text="data.contactOperating"> Our operating hours are from 10am to 7pm, Monday to Friday, and from 10am to 7pm on weekends and bank holidays. You can also reach us via email at info@irish-manualhandling.com</div>
        </div>
    </div>


@endsection
