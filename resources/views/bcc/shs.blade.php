@extends("template.section")

@section('jumbotronImage', '../images/section-bg.png')
@section('title', 'Highschool Competition')
@section('subtitle', '
A national business competition to challenge high school students to make an innovative business idea related to our theme. Register your team (max 3 persons/team from the same or different institution) and have the chance to win a substantial amount of prize!
 ')


@section('content')
<a href="#timeline" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>


<!-- ***** Timeline Start ***** -->
<section class="section timeline-bg" id="timeline">
    <div class="container">
        <div class="col-lg-12">
            <div class="section-heading">
                <h2>Topic</h2>
                <hr>
                <p class="bcc-topic"> "Freedom of Creativity in a Zero Waste Business Movement to Realize Green Business" </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2> Incubator </h2>
                    <hr>
                    <p class="#"> For those of you who win the Highschool Business Plan Competition, will get a privilege for your plan to be incubated by The Greater Hub by SBM ITB. </p>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <div class="card">
                  <img class="card-img-top" src="/images/box.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Case 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <div class="card">
                  <img class="card-img-top" src="/images/box.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Case 2</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <div class="card">
                  <img class="card-img-top" src="/images/box.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Case 3</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                  </div>
                </div>
            </div> 
            <div class="col-lg-12 pt-5">
                <div class="text-center">
                    <a href="#" class="main-button">Guideline</a>
                </div>
            </div>-->
        </div>
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
                            <span>March 1-14, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Early Bird Registration</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 15 - April 3, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Regular Registration</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 1 - April 4, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Proposal Submission</h5>
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
                            <span>April 15, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Top 10 Announcement</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 16-22, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Exclusive Mentoring Session </h5>
                            <h5 class="timeline-title">PPT & Poster Submission </h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 22-24, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Poster Upload on Instagram</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 23, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Technical meeting</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 24, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Final Pitching</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 25, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Awarding Day</h5>
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
                            <span>Who can participate in this Undergraduate Business Case Competition?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Students from all of the high schools in Indonesia can participate in the competition.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>How much is the registration fee?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>The registration fee for Early bird (1 March 2021 - 14 March 2021) is Rp70.000/team. And the fee for Regular (15 March 2021 - 3 April 2021) is Rp100.000/team.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>What is the theme of the case?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>The theme of the case is <u> "Freedom of Creativity in a Zero Waste Business Movement to Realize Green Economy" </u>.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Where can I register for the business case competition?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>You can register your team at <a href="https://bit.ly/BPRegisGBF21" target="_blank">bit.ly/BPRegisGBF21</a>.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Frequently Question End ***** -->

<!-- ***** Register Start***** -->
<section class="section register-bg" id="services">
        <div class="container" id="sponsor">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="https://bit.ly/BPRegisGBF21" target="_blank" class="section-button">Register</a>
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