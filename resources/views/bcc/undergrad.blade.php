@extends("template.section")

@section('jumbotronImage', '../images/section-bg.png')
@section('title', 'Undergraduate Competition')
@section('subtitle', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis molestias deleniti explicabo dicta quod, animi assumenda distinctio aliquid labore mollitia, repellat sint voluptatibus numquam culpa incidunt velit! Optio, quibusdam nisi!')


@section('content')
<a href="#timeline" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

<!-- ***** Timeline Start ***** -->
<section class="section timeline-bg" id="timeline">
    <div class="container">
        <div class="col-lg-12">
            <div class="section-heading">
                <h2>Topic</h2>
                <hr>
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad consequatur impedit quia porro vero. Perferendis adipisci, illo dignissimos esse suscipit officia facere nesciunt fugiat, distinctio blanditiis non inventore hic! Nisi! </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Case Collaborator</h2>
                    <hr>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mobile-bottom-fix d-flex align-items-stretch" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
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
            </div>
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
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 12, 2016</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Event Title</h3>
                            <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                eu pede mollis pretium. Pellentesque ut neque.</p>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>March 23, 2016</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Event Title</h3>
                            <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                eu pede mollis pretium. Pellentesque ut neque. </p>
                        </div>
                    </li>
                    <li class="timeline-item period">
                        <div class="timeline-info"></div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h2 class="timeline-title">April 2016</h2>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 02, 2016</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Event Title</h3>
                            <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                eu pede mollis pretium. Pellentesque ut neque. </p>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 28, 2016</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Event Title</h3>
                            <p>Nullam vel sem. Nullam vel sem. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Donec vitae sapien ut libero venenatis faucibus. ullam dictum felis
                                eu pede mollis pretium. Pellentesque ut neque. </p>
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
                            <span>First Common Question</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Duis vulputate porttitor urna sit amet pretium. Phasellus sed pulvinar eros, condimentum consequat ex. Suspendisse potenti.
                                <br><br>
                                Pellentesque maximus lorem sed elit imperdiet mattis. Duis posuere mauris ut eros rutrum sodales. Aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Second Question Answer</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Sed odio elit, cursus sed consequat at, rutrum eget augue. Cras ac eros iaculis, tempor quam sit amet, scelerisque mi. Quisque eu risus eget nunc porttitor vestibulum at a ante.
                                <br><br>
                                Praesent ut placerat turpis, vel pellentesque dolor. Sed rutrum eleifend tortor, eu luctus orci sagittis in. In blandit fringilla mollis.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>Third Answer for you</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-down"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Proin feugiat ante ut vulputate rutrum. Nam quis erat turpis. Nullam maximus pharetra lorem, eu condimentum est iaculis ut. Pellentesque mattis ultrices dignissim. 
                                <br><br>
                                Etiam et enim finibus, feugiat massa efficitur, finibus sapien. Sed cursus lacus quis arcu scelerisque, eget ornare risus maximus. Aenean non lectus id odio rhoncus pharetra.</p>
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

<!-- ***** Register Start***** -->
<section class="section register-bg" id="services">
        <div class="container" id="sponsor">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="#" class="section-button">Register</a>
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