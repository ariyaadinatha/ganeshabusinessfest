@extends("template.section")

@section('jumbotronImage', '../images/section-bg.png')
@section('title', 'Pre-Event')
@section('subtitle', '
Pre-event is a chain of interactive events acting as a build-up to the main event. Pre-events will offer you several options to the table, i
n the form of Instagram live, webinar and networking event. It will entertain several topics that relate heavily to college students 
concerns and business interests. Participating in this event will not only be an insightful experience but also give an overview of what’s coming in the main Ganesha Business Festival’s event. 
Provided with relevant topics of today, with the purpose to prepare participants soon entering into the business world.
')


@section('content')

<!-- ***** Features Big Item Start ***** -->
<a href="#bcc" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
<div id="events">
    <section class="section bcc-bg" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Pre-Event Detail</h2>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="d-flex justify-content-center event-select">
                        <button type="button" class="btn btn-outline-event btn-lg" onclick="showEvent('event1')" id="button1"> Pre-Event 1 </button>
                        <button type="button" class="btn btn-outline-event btn-lg" onclick="showEvent('event2')" id="button2"> Pre-Event 2 </button>
                        <button type="button" class="btn btn-outline-event btn-lg" onclick="showEvent('event3')" id="button3"> Pre-Event 3 </button>
                        <button type="button" class="btn btn-outline-event btn-lg" onclick="showEvent('event4')" id="button4"> Pre-Event 4 </button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <select class="custom-select">
                            <option onclick="showEvent('event1')" id="button1">Pre-Event 1 </option>
                            <option onclick="showEvent('event2')" id="button2">Pre-Event 2 </option>
                            <option onclick="showEvent('event3')" id="button3">Pre-Event 3 </option>
                            <option onclick="showEvent('event4')" id="button4">Pre-Event 4 </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix" class="event-desc" id="event1">
                    <div class="section-heading pt-5">
                        <h2> <u> Pre-Event 1 </u> </h2>
                    </div>
                    <p class="lead text-center ">
                        <h3 class="text-center"> <b> "How To Be Your Own Boss" </b> </h3>
                    </p>
                    <p class="lead text-center">
                        <h3 class="text-center"> Activity </h3>
                        <br>  
                        <div class="event-desc">
                            <b> Experience Sharing from the Speaker </b>
                            <p>
                                Unfolding on how someone can become their own boss. A concept, which is to build one's 
                                ability to use and understand one's own emotions, and to use this to become our own boss.
                            </p>
                            <b> Q&A Session </b>
                        </div>
                    </p>

                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Speaker</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="card" style="width: 30rem;">
                          <img class="card" src="/images/event/speaker/mrsy.png" alt="Card image cap">
                            <div class="card-body text-center">
                                <h2>Kanya Retno</h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix" class="event-desc" id="event2">
                    <div class="section-heading pt-5">
                        <h2> <u> Pre-Event 2 </u> </h2>
                    </div>
                    <p class="lead text-center">
                        <h3 class="text-center"> <b> “Finding Passion in Your Future Occupation” (Instagram Live) </b> </h3>
                    </p>
                    <p class="lead text-center">
                        <h3 class="text-center"> Activity </h3>
                        <br>  
                        <div class="event-desc">
                        <b> Experience Sharing from the Speaker </b>
                        <p>
                            Mainly focused on discussing what is “passion” and the implementation 
                            of it in determining the career that a person may choose.
                        </p>
                        <b> Q&A Session </b>
                        </div>
                    </p>

                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Speaker</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="card" style="width: 30rem;">
                          <img class="card" src="/images/event/speaker/mrx.png" alt="Card image cap">
                            <div class="card-body text-center">
                                <h2>Ari Respati</h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix" class="event-desc" id="event3">
                    <div class="section-heading pt-5">
                        <h2> <u> Pre-Event 3 </u> </h2>
                    </div>
                    <p class="lead text-center">
                        <h3 class="text-center"> <b> “Followership: The Other Side of Leadership” (Webinar) </b> </h3>
                    </p>
                    <p class="lead text-center">
                        <h3 class="text-center"> Activity </h3>
                        <br>  
                        <div class="event-desc">
                            <b> Topic Presentation </b>
                            <p>
                                Discussing what has been too often overlooked, but an essential skill through one’s career journey.
                            </p>
                            <b> Q&A Session </b>
                        </div>
                    </p>

                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Speaker</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="card" style="width: 30rem;">
                          <img class="card" src="/images/event/speaker/mrx.png" alt="Card image cap">
                            <div class="card-body text-center">
                                <h2>Dedi Irawan</h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix" class="event-desc" id="event4">
                    <div class="section-heading pt-5">
                        <h2> <u> Pre-Event 4 </u> </h2>
                    </div>
                    <p class="lead text-center">
                        <h3 class="text-center event-desc"> <b> “Empowering Social and Environmental Awareness Through Green Business Concepting” (Networking Event) </b> </h3>
                    </p>
                    <p class="lead text-center">
                        <h3 class="text-center event-desc"> Activity </h3>
                        <br>  
                        <div class="event-desc">
                        <b> Topic Presentation </b>
                        <p > Cultivating the audience understanding of the green business itself and components that follow through. </p>
                        <b> Interactive Games & Ice Breaking </b>
                        <br> <b> Focus Group Discussion </b>
                        <br> <b> Pitching Session </b>
                        </div>
                    </p>

                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Speaker</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="card" style="width: 30rem;">
                          <img class="card" src="/images/event/speaker/mrx.png" alt="Card image cap">
                            <div class="card-body text-center">
                                <h2>Tommy Tjiptadjaja</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Features Big Item Start ***** 


<section class="section event-bg" id="bcc">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Speaker</h2>
                    <hr>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <div class="card" style="width: 30rem;">
                  <img class="card" src="/images/event/speaker/mrsy.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h2>Speaker Name</h2>
                    </div>
                </div>
            </div>


    </div>
</section>

-->
<!-- ***** Timeline Start ***** -->
<section class="section timeline-bg" id="timeline">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row" id="timeline-heading">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Timeline</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row pt-5">
            <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <ul class="timeline timeline-centered">
                    <li class="timeline-item period">
                        <div class="timeline-info"></div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h2 class="timeline-title">March 2021</h2>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 31, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Open Registration Webinar 1</h3>
                        </div>
                    </li>
                    <li class="timeline-item period">
                        <div class="timeline-info"></div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h2 class="timeline-title">April 2021</h2>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 03, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Pre-event 1: Instagram Live 1</h3>
                            <h3 class="timeline-title">Open Registration Networking Event</h3>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 6, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Pre-event 2: Instagram Live 2</h3>
                        </div>
                    </li>                    
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 9, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Close Registration Webinar 1</h3>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 10, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Close Registration Networking Event</h3>
                            <h3 class="timeline-title">Pre-event 3: Webinar</h3>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 11, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Pre-event 4: Networking Event</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ***** Timeline End ***** -->


<!-- ***** Frequently Question Start ***** -->
<section class="section faq-bg" id="frequently-question">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Frequently Asked Questions</h2>
                    <hr>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>What benefit can I obtain from participating? </span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>You will get valuable insights from industry experts that correlate with the topic and can interact directly with them. Not only that, 
                                for some activities, an e-certificate will be given to the participants and also games with interesting gifts.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Are there any fees?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Both of the first two Instagram lives are free, you just have to follow @ganeshabusinessfest 
                                Instagram and stay tuned for the Instagram live. 
                                But, we will charge for the third and the fourth pre-event at a very reasonable price.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>What is the platform of the events?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Instagram live and Zoom will be utilized as the platforms.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Fourth Question Asked</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Phasellus eu purus ornare, eleifend orci nec, egestas nulla. Sed sed aliquet sapien. Proin placerat, ipsum eu posuere blandit, tellus quam consectetur nisi, id sollicitudin diam ex at nisi.
                                <br><br>
                                Aenean fermentum eget turpis egestas semper. Sed finibus mollis venenatis. Praesent at sem in massa iaculis pharetra.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Fifth Ever Question</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Quisque aliquet ipsum ut magna rhoncus, euismod lacinia elit rhoncus. Sed sapien elit, mollis ut ultricies quis, fermentum nec ante.
                                <br><br>
                                Sed nec ex nec tortor fermentum sollicitudin id ut ligula. Ut sagittis rutrum lectus, non sagittis ante euismod eu. </p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Sixth Sense Question</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Suspendisse potenti. Ut dapibus leo ut massa vulputate semper. Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum sodales. Aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Frequently Question End ***** -->
<section class="section register-bg" id="services">
        <div class="container" id="sponsor">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="#" class="section-button">Coming Soon</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ***** Register End ***** -->

@endsection

@section('script')
    <!-- jQuery -->
    <script src="../js/jquery-2.1.0.min.js"></script>
    
    <script>
        function showEvent(param)
        {
            document.getElementById('event1').style.display="none";
            document.getElementById('event2').style.display="none";
            document.getElementById('event3').style.display="none";
            document.getElementById('event4').style.display="none";
            document.getElementById(param).style.display="inline";

            document.getElementById('button1').style.color="#171a47";
            document.getElementById('button2').style.color="#171a47";
            document.getElementById('button3').style.color="#171a47";
            document.getElementById('button4').style.color="#171a47";
            document.getElementById('button1').style.backgroundColor="#ead4a0";
            document.getElementById('button2').style.backgroundColor="#ead4a0";
            document.getElementById('button3').style.backgroundColor="#ead4a0";
            document.getElementById('button4').style.backgroundColor="#ead4a0";

            if (param == 'event1')
            {
                document.getElementById('button1').style.color="#ead4a0";
                document.getElementById('button1').style.backgroundColor="#171a47";
            }
            else if (param == 'event2')
            {
                document.getElementById('button2').style.color="#ead4a0";
                document.getElementById('button2').style.backgroundColor="#171a47";
            }
            else if (param == 'event3')
            {
                document.getElementById('button3').style.color="#ead4a0";
                document.getElementById('button3').style.backgroundColor="#171a47";
            }
            else if (param == 'event4')
            {
                document.getElementById('button4').style.color="#ead4a0";
                document.getElementById('button4').style.backgroundColor="#171a47";
            }
        }
    </script>

    <!-- Bootstrap -->
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    <!-- Plugins -->
    <script src="../js/owl-carousel.js"></script>
    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imgfix.min.js"></script> 
        
    <!-- Global Init -->
    <script src="../js/custom.js"></script>
@endsection