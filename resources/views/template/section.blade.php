<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Ganesha Business Festival</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/owl-carousel.css">

    <style>
        .section-jumbotron {
          background-image: url(@yield('jumbotronImage'));
        }
    </style>
          <!-- background-image: linear-gradient(to bottom, rgba(255,255,255,0.7), rgba(0,0,0,1)), url(@yield('jumbotronImage')); -->

</head>
    
<body>
    
    <!-- ***** Header Area Start ***** -->
    <!-- kalau mau buat transparant hilangin background-header -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav navbar">
                        <!-- ***** Logo Start ***** -->
                          <a class="navbar-brand" href="/landing">
                              <img src="{{ URL::asset('images/gbf.png') }}" width="100px" height="60px" alt="">
                          </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/landing">Home</a></li>
                            <li class="submenu submenu-events" id="#events">
                                <a href="javascript:;">Events</a>
                                <ul>
                                    <li><a href="/event/preevent">Pre-Event</a></li>
                                    <li><a href="/event/exhibition">Exhibition</a></li>
                                    <li><a href="/event/awarding">Awarding</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-bcc" id="#bcc">
                                <a href="javascript:;">BCC</a>
                                <ul>
                                    <li><a href="/bcc/shs">Highschool</a></li>
                                    <li><a href="/bcc/undergraduate">Undergraduate</a></li>
                                    <li><a href="#">Bootcamp</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#timeline">Timeline</a></li>
                            <li class="scroll-to-section"><a href="#frequently-question">FAQ</a></li>
                            <li class="scroll-to-section"><a href="/about">About</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <section class="section">
        <div class="jumbotron section-jumbotron">
            <div class="container">
                <h1 class="display-4">@yield('title')</h1>
                <p class="lead text-center">@yield('subtitle')</p>
            </div>
        </div>
    </section>
    @yield('content')

    <!-- ***** Features Small Start ***** 
    <section class="section sponsor-bg" id="services">
        <div class="container" id="sponsor">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Sponsor</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row sponsor">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                      <img class="card-img-top" src="/images/sponsor.jpg" alt="Card image cap" height=400px width=700px>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ***** Features Small End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 pb-3">
                    <ul class="social d-flex flex-column align-items-start">
                        <li>
                            <a href="#"><i class="fa fa-envelope align-middle"></i></a>
                            ganeshabusinessfest@sbm-itb.ac.id
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin align-middle"></i></a>
                            Ganesha Business Festival
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram align-middle"></i></a>
                            ganeshabusinessfest
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-line align-middle"> 
                                <img src="{{ URL::asset('images/icons/line-brands.svg') }}" width="25px"> 
                            </i></a>
                            @754xqrtm
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{ URL::asset('images/gbf.png') }}" width="350" alt="" class="justify-content-center align-self-center footer-logo">
                </div>
            </div>
        </div>
    </footer>

    @yield('script')
  </body>
</html>