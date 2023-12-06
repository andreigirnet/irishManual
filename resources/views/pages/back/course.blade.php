@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper" x-data="{
            containerWidth: 0,
            showModal: false,
            packageId: '{{ $packagesOwnedByUser[0]->id }}',
            status: '{{$packagesOwnedByUser[0]->status}}',
            showProgressBar: 'freeze',
            correctAnswers: [3,3,2,2,3,2,3,1,3,3],
            certificateButton: false,
            showNav: false,
            showEye: true,
            showSlider: true,
            submittedAnswers: [],
            showHideContent: true,
            showStartTest: true,
            message: '',
            testAnswers: 0,
            tryAgainButton: false,
            slideCounter: 0,
            selectedAnswer:'',
            language:'english',
            isActive:1,
            answer: false,
            stage: 1,
            courses:'',
            video: false,
            setShowProgressBar: function(){
                if(this.status === 'purchased'){
                    this.showProgressBar = 'freeze'
                }else{
                    this.showProgressBar = 'navigate'
                }
            },
            showNavButton: function(){
                if(this.stage === 1 || this.stage === 2 || this.stage === 3 || this.stage === 4){
                    this.showNav = true
                }else{
                     this.showNav = false
                }
            },
            showVideo: function(){
                axios.put(`/status/package/${this.packageId}`, {id: this.packageId})
                .then(response => {
                }).catch(error => {
                    console.error(error);
                });
                this.showSlider = false;
                this.showModal = false;
                this.showNav = false;
                this.showEye = false;
                this.video = true;
                let videoPractice = document.getElementById('practiceVideo');
                videoPractice.onended = (event) => {
                  console.log(
                    'Video stopped either because it has finished playing or no further data is available.');
                };
            },
            showHideSlide: function(){
                this.showHideContent = !this.showHideContent
            },
            setLanguage: function(lang)
            {
                this.language = lang
                this.getCourseItems()
            },
            startTest: function()
            {
               this.nextSlide();
               this.showStartTest = false;
            },
            resetTest: function()
            {
                this.setStage(5)
                this.submittedAnswers = [];
                let slider = document.getElementById('courseSlider');
                this.slideCounter = 0;
                slider.style.right = 0 + 'px';
                this.tryAgainButton = false;
                this.showStartTest = true;
            },
            submitAnswer: function()
            {
                if(this.selectedAnswer !== '')
                {
                    this.submittedAnswers.push(this.selectedAnswer)
                    this.nextSlide();
                    this.message = '';
                    this.selectedAnswer = '';
                }else
                {
                    this.message = 'Select an answer to go to next question';
                }
            },
            checkResult: function()
            {
               if(this.submittedAnswers.length === 10){
                  let match = 0;
                  for(let i = 0; i<= this.submittedAnswers.length; i++)
                  {
                    if(this.submittedAnswers[i] === this.correctAnswers[i])
                    {
                      match++;
                    }
                  }
                  if(match > 7)
                  {
                    this.tryAgainButton = false;
                    this.showModal = true;
                    match = 0
                  }
                  else
                  {
                    this.tryAgainButton = true;
                    match = 0;
                  }
               }
            },
            toggleAnswer: function(){
                this.answer = !this.answer
            },
            getLength: function(stage)
            {
                if(stage === 1)
                {
                    return Object.keys(this.courses.stage_1).length
                }else if(stage === 2)
                {
                       return Object.keys(this.courses.stage_2).length
                }else if(stage === 3)
                {
                    return Object.keys(this.courses.stage_3).length
                }else if(stage === 4)
                {
                    return Object.keys(this.courses.stage_4).length
                }else
                {
                    return Object.keys(this.courses.test).length
                }
            },
             nextSlide: function()
             {
                this.answer = false
                let slider = document.getElementById('courseSlider');
                this.slideCounter += this.containerWidth;
                let maxPosition = this.containerWidth * this.getLength(this.stage)-1;
                if(this.slideCounter <= maxPosition)
                {
                    slider.style.right = this.slideCounter + 'px';
                }else
                {
                    if(this.stage === 5)
                    {
                        this.checkResult()
                    }
                    if(this.stage <5){
                        this.stage++;
                    }
                    this.setStage(this.stage);
                    this.slideCounter = 0;
                    slider.style.right = 0 + 'px';
                }
            },
            prevSlide: function()
            {
                this.answer = false
                let slider = document.getElementById('courseSlider');
                this.slideCounter -= this.containerWidth;
                let minPosition = this.containerWidth;
                if(this.slideCounter >= minPosition){
                    slider.style.right = this.slideCounter + 'px';
                }else{
                    this.slideCounter = 0;
                    slider.style.right = 0 + 'px';

                }
            },
            setStage: function(stage)
            {
                this.stage = stage
                this.isActive = stage
                let slider = document.getElementById('courseSlider');
                slider.style.right = 0 + 'px';
                if(stage === 'test'){
                    this.showStartTest = true;
                    this.tryAgainButton = false;
                }
                 this.slideCounter = 0;
                 slider.style.right = 0 + 'px';
                 this.showNavButton();
            },
            setScreen: function(){
                 const courseContainer = document.getElementById('courseContainer');
                 const containerWidth = courseContainer.offsetWidth;
                this.containerWidth = containerWidth;
            },
            getCourseItems: function()
            {
                window.matchMedia('(orientation : landscape)').addEventListener('change', e=>{
                    this.setScreen();
                })

                this.setScreen();
                this.setShowProgressBar();
                this.showNavButton();
                if(this.language === 'english')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.english
                    }).catch(error => {
                        console.error(error);
                    });
                }else if(this.language === 'spanish')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.spanish

                    }).catch(error => {
                        console.error(error);
                    });
                }else if(this.language === 'russian')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.russian

                    }).catch(error => {
                        console.error(error);
                    });
                }else if(this.language === 'romanian')
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.romanian
                        console.log(this.courses)
                    }).catch(error => {
                        console.error(error);
                    });
                }else
                {
                    axios.get('../data/course.json').then(response => {
                        this.courses = response.data.polish
                    }).catch(error => {
                        console.error(error);
                    });
                }
            }
        }"
         x-init="getCourseItems">
        <div class="modalCourseComplete" x-cloak x-show="showModal">
            <div class="modalTitle" style="text-align: center">Congratulations you passed the test! </div>
            <div class="modalTitle">IMPORTANT</div>
            <div class="modalText">Please notice, you must complete your self assessment with our team as required, so you can get the full certificate straight away after that.  This training is covering the full theory and practical part as required by Irish Legislation and regarding that you can use your certificate for any jobs for 3 years after the full course is completed. The self assessment it’s delivered online.
                <br>

                <br>
                It is your responsibility to get in touch with our team as instructed (through WhatsApp chat on +353 {{config('app.telephone')}} texts only) to organise the practical part for your Manual Handling Training a.s.a.p ( within 24-48hrs ) and to have your full course done. After that you will receive your certificate via email straight away. Follow the information below regarding the self assessment.
                <br>
                <br>
                Kind Regards
            </div>
            <div class="modalTitle">Contact Us Via WhatsApp On this line</div>
            <div class="modalTitle">+353 {{config('app.telephone')}} texts only</div>
            <div class="modalTitle" style="text-align: center">Tap the WhatsApp ➤ <span><a href="https://wa.me/353894631967"><img src="{{asset('images/logo/whatsapp.png')}}" style="width: 35px; cursor: pointer" alt=""></a></span>  to switch to our chat instantly.</div>
            <div class="modalTitle" style="text-align: center">Press here 👇 to continue</div>
            <div class="confirmCourseButton" style="display: flex; align-items: center; justify-content: center; margin-top: 20px" @click="showVideo">UNDERSTOOD</div>
        </div>
        <div class="landscape">
            <img src="{{asset('images/banners/landscape.png')}}" alt="">
            <div class="landscapeText">Please rotate your phone</div>
        </div>
        <div class="coursePage">
            <div class="selectLang">
                <div class="langText">Pick a language: </div>
                <div class="langItem" @click="setLanguage('english')"><img src="{{asset('/images/flags/en.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('polish')"><img src="{{asset('/images/flags/pl.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('romanian')"><img src="{{asset('/images/flags/ro.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('russian')"><img src="{{asset('/images/flags/ru.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('spanish')"><img src="{{asset('/images/flags/sp.png')}}" alt=""></div>
                <div class="langItem" @click="setLanguage('spanish')"><img src="{{asset('/images/flags/ukr.png')}}" alt=""></div>
{{--                <div>|</div>--}}
{{--                <div class="langText" id="hideNav">Hide nav bar</div>--}}
{{--                <label class="switch" id="showHideNav">--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="slider round"></span>--}}
{{--                </label>--}}
            </div>
            <div class="progressBar" x-show="showProgressBar === 'freeze'">
                <div class="progresItem" x-bind:class="{ 'isActiveClass': isActive === 1 }">1</div>
                <div class="progresItem" x-bind:class="{ 'isActiveClass': isActive === 2 }">2</div>
                <div class="progresItem" x-bind:class="{ 'isActiveClass': isActive === 3 }">3</div>
                <div class="progresItem" x-bind:class="{ 'isActiveClass': isActive === 4 }">4</div>
                <div class="progresItem" x-bind:class="{ 'isActiveClass': isActive === 5 }">Test</div>
            </div>
            <div class="progressBar" x-show="showProgressBar === 'navigate'">
                <div class="progresItem" @click="setStage(1)" x-bind:class="{ 'isActiveClass': isActive === 1 }">1</div>
                <div class="progresItem" @click="setStage(2)" x-bind:class="{ 'isActiveClass': isActive === 2 }">2</div>
                <div class="progresItem" @click="setStage(3)" x-bind:class="{ 'isActiveClass': isActive === 3 }">3</div>
                <div class="progresItem" @click="setStage(4)" x-bind:class="{ 'isActiveClass': isActive === 4 }">4</div>
                <div class="progresItem" x-bind:class="{ 'isActiveClass': isActive === 5 }">Test</div>
            </div>
            <div class="videoContainer" x-show="video">
                <video autoplay muted controls class="practicalVideo" id="practiceVideo">
                    <source src="{{asset('video/practical.mp4')}}" type="video/mp4">
                </video>
                <div class="videoText">
                    <strong>Choose from two options to complete your self-assessment and receive a 3-year certificate for any job.</strong><br>
                    <br>
                     Watch the video demonstration attached to our website. Afterward, record a video demonstrating how to lift and carry a load safely. Send the video back to us through this chat, and our team will review it. There's no need to explain the steps if you're not confident, and it's not mandatory to wear special equipment (such as PPE).
                    <br><br>
                    You can record the video in any work environment or at home. Please assess the area, assess the load, get a stable base with feet flat on the floor in line with your shoulders, bend your knees, keep your back straight, take the load from the floor with a palm grip, hold it close to your body, and turn around with your feet without twisting your body.
                    <br>
                    Lift the load from the floor/ground, place it on a table (or any available surface), and then return it to the floor, following all the specified steps. Feel free to use any object as a load if you don't have a box. Make sure to watch the video demonstration on our website.
                    <br><br>

                    If you prefer, you can book a live video call with one of our instructors to complete the self-assessment. To do so, send a text message with your full name and the email address used for your training, along with your request. All certificates are emailed immediately after the full course is completed.
                    <br>

                    Send your video demonstration to our team via the WhatsApp chat at 0{{config('app.telephone')}}, (Or you can press on this icon) <span><a href="https://wa.me/353894631967"><img src="{{asset('images/logo/whatsapp.png')}}" style="width: 35px; cursor: pointer" alt=""></a></span> , and our instructors will promptly evaluate it. Our team provides assistance during working hours, and in some cases, outside these hours, ensuring a prompt response during our fixed hours.
                    <br>
                    <br>

                    I hope this helps! Let me know if you have any further questions or if there's anything else I can assist you with.
                </div>
            </div>
            <div class="courseContainer" id="courseContainer" x-on:landscape="setScreen">
                <img id="eyeIcon" @click="showHideSlide" x-show="showEye" src="{{asset('images/icons/eye.png')}}" alt="Show hide image">
                <div class="courseSlider" id="courseSlider" x-show="showSlider">
                    <div class="courseStage" x-show="stage === 1">
                        <template x-for="slide in courses.stage_1">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover; background-repeat: no-repeat; width: ' + containerWidth + 'px;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 2">
                        <template x-for="slide in courses.stage_2">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover; background-repeat: no-repeat; width: ' + containerWidth + 'px;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 3">
                        <template x-for="slide in courses.stage_3">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover; background-repeat: no-repeat; width: ' + containerWidth + 'px;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 4">
                        <template x-for="slide in courses.stage_4">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover; background-repeat: no-repeat; width: ' + containerWidth + 'px;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="bullet in slide.bullets">
                                        <div class="bulletPoint">
                                            <img src="{{asset('images/arrows/right-yellow-arrow.png')}}" alt="">
                                            <div class="bulletText" x-text="bullet"></div>
                                        </div>
                                    </template>
                                </div>
                                <div class="showAnswer" x-show="slide.answer" @click="toggleAnswer">Show Answer</div>
                            </div>
                        </template>
                    </div>
                    <div class="courseStage" x-show="stage === 5">
                        <template x-for="slide in courses.test">
                            <div class="slide" x-bind:style="'background-image: url(../..' + slide.img + '); background-size: cover; background-repeat: no-repeat; width: ' + containerWidth + 'px;'">
                                <div class="slideAnswer" x-show="answer" x-text="slide.answer"></div>
                                <div class="slideAnswer" x-show="message" x-text="message"></div>
                                <div class="slideContent" x-show="showHideContent">
                                    <div class="slideTitle" x-text="slide.title"></div>
                                    <div class="slideSubText" x-text="slide.content"></div>
                                    <template x-for="(bullet, index) in slide.bullets">
                                        <div class="bulletPoint">
                                            <input type="radio" name="answer" x-on:click="selectedAnswer = index + 1">
                                            <div class="bulletText" x-text="bullet" ></div>
                                        </div>
                                    </template>
                                    <div x-show="slide.answer" @click="submitAnswer()" class="submitTestQuesstion">Next</div>
                                    <div x-show="showStartTest" @click="startTest" class="submitTestQuesstion">Start Test</div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="navButtons">
                <div class="navButton" x-show="showNav" @click="prevSlide">Previous</div>
                <template x-if="tryAgainButton">
                    <div class="tryAgainDiv">
                        <div class="tryAgain">Please try Again you dit not pass:</div>
                        <div class="tryAgainButton" @click="resetTest">Try Again The Test</div>
                    </div>
                </template>
                <div class="navButton" x-show="showNav" @click="nextSlide">Next</div>
            </div>
        </div>
    </div>
    <script src="{{asset("js/course.js")}}" defer></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
