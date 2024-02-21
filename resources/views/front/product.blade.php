@extends('front.app')
@section('content')
    <div class="title" data-aos="fade-up">
        <div class="titleText">Online Manual Handling Course</div>
        <div class="borderTitle"></div>
    </div>

    <div class="productSection">
        <div class="productInner">
            <div class="productIcons">
                <div class="productItemIcon">
                <img src="{{asset('images/productIcons/clock.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.duration">Average Duration: 45 Minutes</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/printer.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.digital">Digital & Printable Certificate</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/mortarboard.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.exam">Unlimited Exam Attempts</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/map.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.acceptance">Accepted Across Ireland, UK and Europe</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/validation.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.certificateValid">Valid For 3 Years</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/calendar.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.available">Self-Paced. Available 24/7</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/smartphone.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.devices">Available On All Major Devices</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/messenger.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.student">Live Student Support</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/document.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.record">Permanent Record Of Training</div>
                </div>
                <div class="productItemIcon">
                    <img src="{{asset('images/productIcons/user.png')}}" alt="" data-aos="fade-right">
                    <div class="productItemText" data-aos="fade-left" x-text="product.tools">User Management Tools Available</div>
                </div>
            </div>

            <hr>

            <div class="productTitle" data-aos="fade-right" x-text="product.onlineTitle">Online Manual Handling Training Course</div>
            <div class="productDescription" data-aos="fade-right" x-html="product.description">
                This Manual Handling Training Course helps employers ensure that they and their employees are sufficiently trained in the principles and practices of safe manual handling.<br>

                This course provides the necessary information and training for organisations to understand more about the risks associated with manual handling, how to undergo a risk assessment and how to ensure appropriate control measures are put in place.<br>

                It follows the requirements of the Manual Handling Operations Regulations 1992 (MHOR) and provides a practical guide for managing and carrying out safe and healthy manual handling. The course also features videos, diagrams, and downloadable resources to use in your workplace.<br>
            </div>
            <ul class="productList" data-aos="fade-right">
                <li x-text="product.li1">Ensures compliance with Irish Health and Safety legislation</li>
                <li x-text="product.li2">Matches the CIEH Level 2 Syllabus</li>
                <li x-text="product.li3">Developed by FETAC Level  6 Instructor</li>
                <li x-text="product.li4">Approximate duration: 45 Minutes</li>
                <li x-text="product.li5">On completion, download and print your certificate</li>
            </ul>

            <hr>

            <div class="productTitle" data-aos="fade-right" x-text="product.courseContent">Course Content</div>
            <div class="productContent"data-aos="fade-right">
                <div class="productContentItem">
                    <div class="productContentId">1</div>
                    <div class="productContentTitle" x-text="product.content">Manual Handling Injuries</div>
                    <div class="productContentDescription" x-text="product.types">Types of injury, immediate injuries and musculoskeletal disorders.</div>
                </div>
                <div class="productContentItem">
                    <div class="productContentId">2</div>
                    <div class="productContentTitle" x-text="product.risk">Risk Assessments for Safe Manual Handling</div>
                    <div class="productContentDescription" x-text="product.riskContent">what is a risk assessment?, who should carry out a risk assessment?, identifying hazards, TILE, factors that increase the risk of harm, deciding who may be harmed and how, occupations most at risk, evaluating risks, recording the significant findings, reviewing and updating, results of your risk assessment.</div>
                </div>
                <div class="productContentItem">
                    <div class="productContentId">3</div>
                    <div class="productContentTitle" x-text="product.control">Avoiding and Controlling the Risks</div>
                    <div class="productContentDescription" x-text="product.controlTitle">employer duties, avoiding manual handling, reducing the risk, team handling, mechanical and automation precautions, personal protective equipment and TILE.</div>
                </div>
                <div class="productContentItem">
                    <div class="productContentId">4</div>
                    <div class="productContentTitle" x-text="product.safe">Safe Manual Handling Techniques</div>
                    <div class="productContentDescription" x-text="product.safeContent">lifting and lowering techniques, safe weights for lifting and lowering, carrying, risk assessments and HSE tools, pushing and pulling, and team handling.</div>
                </div>
            </div>

            <hr>

            <div class="productTitle" data-aos="fade-right" x-text="product.aims">Aims of the Manual Handling Training</div>
            <div class="productDescription" data-aos="fade-right" x-text="product.aimsSubTitle">Upon completion of this course, you will:<br>
            </div>
            <ul class="productList" data-aos="fade-right">
                <li x-text="product.aim1">Understand what is meant by manual handling.</li>
                <li x-text="product.aim2">Be able to explain the common causes of injury and potential long-term damages to health as a result of poor manual handling techniques.</li>
                <li x-text="product.aim3">Understand the legal responsibilities and the duties placed upon employers and employees.</li>
                <li x-text="product.aim4">Be able to identify manual handling hazards.</li>
                <li x-text="product.aim5">Understand how to carry out an effective manual handling risk assessment.</li>
                <li x-text="product.aim6">Understand the control measures that can be put in place to reduce the risk of harm.</li>
                <li x-text="product.aim7">Understand and practise the best way to handle loads to maintain a safe working environment.</li>
            </ul>

            <hr>

            <div class="productTitle" data-aos="fade-right" x-text="product.asses">Assessment</div>
            <div class="productDescription" data-aos="fade-right" x-text="product.assesText">The online assessment is taken on completion of the training material. You will be asked 10 multiple choice questions with a pass mark of 80%. The answers are marked automatically so that you’ll instantly know whether you passed. If you don't pass don't worry! You can take the test as many times as you need with no extra charge.<br>
            </div>
        </div>
    </div>
@endsection
