@extends('front.app')

@section('content')
    <style>
        @keyframes scale {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .whatsapp-icon {
            animation: scale 1.5s ease-in-out infinite;
        }

        .contact-button {
            margin-bottom: 10px; /* Adăugăm spațiu între butoane */
        }

        .delimiter {
            margin: 20px auto; /* Ajustăm marginea pentru a centra linia de delimitare */
            border-top: 1px solid #ccc; /* Adăugăm o linie orizontală subțire */
            width: 50%; /* Specificăm lățimea liniei de delimitare */
        }
    </style>

    <div class="secondaryBannerContact">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle" x-text="data.contact">Contact Us</div>
    </div>
    <div class="trainTeamsSection">
        <div class="trainTeamsWrapper">
            <div class="teamTitle" style="text-align: center;">
                <div class="modalTitle contact-button">
                    <span>Click the WhatsApp icon ➤</span> 
                    <span><a href="https://wa.me/353894631967"><img class="whatsapp-icon" src="{{asset('images/logo/whatsapp.png')}}" style="width: 35px; cursor: pointer" alt=""></a></span>  
                    <span>to switch to our live chat instantly.</span>
                </div>
            </div>
            <div class="delimiter"></div> <!-- Linia de delimitare -->
            <div class="teamTitle" style="text-align: center;">
                <div class="modalTitle contact-button">
                    <span>Click the live chat icon on our website ➤</span> 
                    <span><img class="whatsapp-icon" src="{{asset('images/logo/replay.png')}}" style="width: 35px; cursor: pointer" alt=""></span>
                    <span>available in the bottom right corner whenever you need help; we're online.</span>
                </div>
            </div>
            <div class="delimiter"></div> <!-- Linia de delimitare -->
            <div class="teamDescription" > Our operating hours are from 10am to 7pm, Monday to Friday, and from 10am to 7pm on weekends and bank holidays. You can also reach us via email at info@irish-manualhandling.com or 0894631967. | 20 Foxborough Close, Balgaddy, Lucan, Co. Dublin, K78 AN24, Ireland </div>
        </div>
        
    </div>
@endsection
