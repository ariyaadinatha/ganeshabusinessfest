@extends("template.main")

@section('content')
<!-- ***** Welcome Area Start ***** -->
<section class="section">

    <!-- ***** Carousel Start ***** -->
    <div id="carouselExampleIndicators" class="carousel slide header-text" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item" id="carousel-item1">
            <img class="d-block vh-100 vw-100" src="{{ URL::asset('/images/carousel1.png')}}" alt="First slide">
            <div class="carousel-caption d-md-block">
              <h2 class="display-1">What is GBF?</h2>
              <a href="/about"><button type="button" class="btn btn-outline-carousel btn-lg"> Learn More </button> </a>
            </div>
          </div>
          <div class="carousel-item active" id="carousel-item2">
            <img class="d-block vh-100 vw-100 layer-carousel" src="{{ URL::asset('/images/carousel2.png')}}" alt="Second slide">
            <!--  <div class="carousel-caption d-md-block">
              <h2 class="display-1">The First-Ever <br> <span class="carousel-main"> Ganesha Business Festival </span> </h2>
              <p>...</p>
            </div> -->
          </div>
          <div class="carousel-item" id="carousel-item3">
            <img class="d-block vh-100 vw-100 layer-carousel" src="{{ URL::asset('/images/carousel3.png')}}" alt="Third slide">
            <!-- <div class="carousel-caption d-md-block">
                <h2 class="display-4"> Check Out This Article!</h2>
                <p>...</p>
            </div> -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" onclick="$('#carouselExampleIndicators').carousel('prev')" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" onclick="$('#carouselExampleIndicators').carousel('next')" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- ***** Carousel End ***** -->

</section>
<!-- ***** Welcome Area End ***** -->


<!-- ***** Features Big Item Start ***** -->
<a href="#events" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
<div id="events">
    <section class="section event-bg" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Events</h2>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="card">
                      <img class="card-img-top card-img" src="{{ URL::asset('/images/assets/event.png')}}" alt="Pre Event">
                      <div class="card-body">
                        <h5 class="card-title text-center"> <a href="/event/preevent">Pre-Event </a></h5>
                        <p class="card-text text-center">Chain of interactive events acting as a build-up to the main event.</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="card">
                      <img class="card-img-top card-img" src="{{ URL::asset('/images/assets/bcc.png')}}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title text-center"> <a href="/event/exhibition">Exhibition </a></h5>
                        <p class="card-text text-center">Showcase business ideas and developed businesses
                            from students and alumni from SBM.</p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="card">
                      <img class="card-img-top card-img" src="{{ URL::asset('/images/assets/awarding.png')}}" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title text-center"> <a href="/event/awarding">Awarding </a></h5>
                        <p class="card-text text-center"> Aimed to express the greatest gratitude to the winners and create a
                            night of significance and rewards for all viewers.</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section bcc-bg" id="bcc">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Business Case Competition</h2>
                    <hr>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <div class="card">
                  <img class="card-img-top card-img" src="{{ URL::asset('/images/assets/hs.png')}}" alt="Card image cap" >
                  <div class="card-body">
                    <h5 class="card-title text-center"><a href="/bcc/shs"> Highschool Competition </a></h5>
                    <p class="card-text"> Business competition to challenge high school students, have the chance to win a substantial amount of prize!</p>
                    <div class="d-flex flex-row text-center">
                        <a href="#" class="main-button "> <b> Register </b> </a>
                        <a href="#" class="main-button "> <b> Guideline </b> </a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <div class="card">
                  <img class="card-img-top card-img" src="{{ URL::asset('/images/assets/under.png')}}" alt="Card image cap" >
                  <div class="card-body">
                    <h5 class="card-title text-center"><a href="/bcc/undergraduate">Undergrad Student Competition</a></h5>
                    <p class="card-text">Business competition to challenge undergraduate students, have the chance to win a substantial amount of prize!</p>
                    <div class="d-flex flex-row text-center">
                        <a href="#" class="main-button "> <b> Register </b> </a>
                        <a href="#" class="main-button "> <b> Guideline </b> </a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <div class="card">
                  <img class="card-img-top card-img" src="{{ URL::asset('/images/assets/bootcamp.png')}}" alt="Card image cap" >
                  <div class="card-body">
                    <h5 class="card-title text-center"><a href="#">Bootcamp</a></h5>
                    <p class="card-text text-center">
                    <br>
                        Coming Soon ! 
                    <br>
                    <br>
                    <br>
                    </p>
                    <div class="d-flex flex-row text-center">
                        <a href="#" class="main-button "> <b> Closed </b> </a>
                        <a href="#" class="main-button "> <b> Guideline </b> </a>
                    </div>
                  </div>
                </div>
            </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Timeline Start ***** -->
<section class="section timeline-bg" id="timeline">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
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
                            <h2 class="timeline-title">Febuary 2021</h2>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Febuary 15 - 11 April, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Highschool Competition (Business Plan) <br> & <br> Undergraduate (Business Case)</h5>
                        </div>
                    </li>
                    <li class="timeline-item period">
                        <div class="timeline-info"></div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h2 class="timeline-title">March 2021</h2>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 20, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Pre-Event 1 (Live Instagram)</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 23, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Pre-Event 2 (Live Instagram)</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 27, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Pre-Event 3 (Webinar)</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 28, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Pre-Event 4 (Workshop)</h5>
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
                            <span>April 10, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Exhibition Day 1</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 11, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Exhibition Day 2</h5>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 11, 2021</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="timeline-title">Awarding Night</h5>
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
                            <span>Was there a Ganesha Business Festival last year too?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>This is the first GBF to ever be held.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>What are Ganesha Business Festival’s circumstances?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ganesha Business Festival consists of Pre-Event, Exhibition, and Awarding Night.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Who can participate in the competition?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>For those of you who are a high school student, you can participate in the Business Plan competition, 
                                and for those of you who are an undergraduate student, you can participate in the Business Case competition.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>When will Ganesha Business Festival 2021 be held?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ganesha Business Festival 2021 will be held from March to April 2021.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>How much does Ganesha Business Festival cost?</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>For the Pre-Event’s series, Instagram live will be free. However, the webinars are charged at a very reasonable price. 
                                The exhibition is free to visit, but the Awarding Night is charged as we are going to bring famous and happening artists to the stage, stay tuned!</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Frequently Question End ***** -->



@endsection
    
@section('script')
<!-- jQuery -->
<script src="{{ URL::asset('js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{ URL::asset('js/popper.js')}}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{ URL::asset('js/owl-carousel.js')}}"></script>
<script src="{{ URL::asset('js/scrollreveal.min.js')}}"></script>
<script src="{{ URL::asset('js/waypoints.min.js')}}"></script>
<script src="{{ URL::asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ URL::asset('js/imgfix.min.js')}}"></script> 
    
<!-- Global Init -->
<script src="{{ URL::asset('js/custom.js')}}"></script>


@endsection