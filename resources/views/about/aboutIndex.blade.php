@extends("template.main")

@section('content')

<!-- ***** Features Big Item Start ***** -->
<section class="section event-bg" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="/images/gbf.png" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="right-text col-lg-6 col-md-12 col-sm-12 mobile-top-fix">
                <div class="left-heading">
                    <h2>What is Ganesha Business Festival ?</h2>
                </div>
                <div class="left-text text-justify">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates error ratione illo voluptatem rerum, eius aperiam ut nihil odio debitis neque delectus hic autem. Rem sit officiis laborum similique vitae!</p>
                    <a href="#about2" class="main-button">Discover More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Features Big Item Start ***** -->
<div id="events">
    <section class="section bcc-bg" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix ">
                    <div class="left-heading">
                        <h2>Tujuan</h2>
                    </div>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae reprehenderit dolorem, iure unde maxime cum nihil optio. Minus molestiae, hic, praesentium et, laudantium distinctio quis facere doloribus sint asperiores eveniet.</p>
                    <ul>
                        <li>
                            <img src="/images/about-icon-01.png" alt="">
                            <div class="text">
                                <a href="/event/preevent"> <h6>Value 1</h6> </a>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae reprehenderit dolorem, adipisicing elit.</p>
                            </div>
                        </li>
                        <li>
                            <img src="/images/about-icon-02.png" alt="">
                            <div class="text">
                                <a href="/event/exhibition"> <h6>Value 2</h6> </a>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae reprehenderit dolorem, adipisicing elit.</p>
                            </div>
                        </li>
                        <li>
                            <img src="/images/about-icon-03.png" alt="">
                            <div class="text">
                                <a href="/event/awarding"> <h6>Value 3</h6> </a>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae reprehenderit dolorem, adipisicing elit.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section timeline-bg" id="bcc">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                <div class="left-heading">
                    <h2>Visi dan Misi</h2>
                </div>
                <div class="left-text text-justify">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates error ratione illo voluptatem rerum, eius aperiam ut nihil odio debitis neque delectus hic autem. Rem sit officiis laborum similique vitae!</p>
                    <!-- <a href="#about2" class="main-button">Discover More</a> -->
                </div>
            </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->





@endsection
    
@section('script')
    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script> 

    <!-- Global Init -->
    <script src="js/custom.js"></script>
@endsection