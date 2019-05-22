<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$setting->site_name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- favicon icon -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- color css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('switcher/switcher.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
     <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
 

  <!-- Demo styles -->
  <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
  </style>
    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="overflow: visible;">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- ===========================
                PRELOADER
    ============================= -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- End Preloader -->
    <!-- =========================
          page header START
      ============================== -->
    <header >
        <!--Nav Menu Starts-->
        <nav class="navbar default nav-mob">
            <div class="container mob-logo">
                 <a href="#slides" class="brand-logo">
                       <img src="{{asset('images/Untitled-1.png')}}" style="width:150px; height:150px;">
                    </a>
                <div class="navbar-header col-sm-2 tablet-logo">
                    <button type="button" class="navbar-toggle mob-menu" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li class="active">
                            <a href="#slides">Home</a>
                        </li>
                        <li>
                            <a href="#karbar-how-it-works-section">Gallary</a>
                        </li>
                        <li>
                            <a href="#karbar-service-section">author</a>
                        </li>
                        <li>
                            <a href="#karbar-why-choose-section">about</a>
                        </li>
                        <li>
                            <a href="{{route('pages.book')}}">books</a>
                        </li>
                        <li>
                            <a href="#testimonial-and-client">category</a>
                        </li>
                        <li>
                            <a href="#karbar-price-section">publisher</a>
                        </li>
                        <li>
                            <a href="#karbar-price-section">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->
    <!-- =========================
            home slider section
     ============================== -->
    <section id="slides" class="pb" >
        <div class="slides-container" >
            <div class="slide active">
                <div class="img"><img src="{{asset('images/499201901210127322732.jpg')}}" alt="slide" class="img-responsive"></div>
                <div class="overlay"></div>
                <div class="slide-caption">
                    <div class="container">
                        <div class="box">
                            
                            <h1>This is our<br>
                                BOOK fair</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slide1 -->
            <div class="slide">
                <div class="img"><img src="{{asset('images/LondonXBookXFair.jpg')}}" alt="slide" class="img-responsive"></div>
                <div class="overlay"></div>
                <div class="slide-caption">
                    <div class="container">
                        <div class="box">
                           <h1>This is our<br>
                                BOOK fair</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slide2 -->
             <div class="slide">
                <div class="img"><img src="{{asset('images/hero_1120x428_slider2.jpg')}}" alt="slide" class="img-responsive"></div>
                <div class="overlay"></div>
                <div class="slide-caption">
                    <div class="container">
                        <div class="box">
                            <h1>This is our<br>
                                BOOK fair</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end slides-container -->
        <div class="slides-navigation">
            <a class="prev sqaureIconSec" href="#"> <i class="fa fa-chevron-left"></i></a>
            <a class="next sqaureIconSec" href="#"> <i class="fa fa-chevron-right"></i></a>
        </div>
        <!-- end slides-navigation -->
        <div class="holder">
            <span class="scroll-btn">
            <a href="#karbar-how-it-works-section">
                <span class="mouse">
                    <span>
                    </span>
            </span>
            </a>
            </span>
            <i class="fa fa-chevron-down moreArrow moving"></i>
        </div>
    </section>
    <!-- end slider -->
     <!-- Start portfolio section -->
    
    
    <div style="background-color:white; height:150px;"></div>
    <section class="portfolio-section section-gap-full" style="background-color:white;">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Gallary</h2>
                <p class="text-center">Some of Our  Photo bookfair</p>
            </div>

          @include('index2')

        </div>
    </section>
    <!-- End portfolio section -->
    

   

    <section id="karbar-how-it-works-section" class="how-it-works section-bg-color">
        <div class="container">
            <div class="row">
                <!-- Section main title -->
                <div class="col-xs-12 section-title-padding">
                    <div class="sec-title-container text-center">
                        <div class="title-line"></div>
                        <h2 class="uppercase font-weight-7 less-mar-1"></h2>
                        <div class="clearfix"></div>
                        <br>
                      <h2>Most popular author</h2>
                        <br>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-11 center-block">
                    <!--step 1-->
                    <div class="row">
                        <div class="col-md-6 col-md-push-6 text-center"> <img src="{{$author1->featured}}" style="border-radius: 50%; height:250px; width:250px;" alt="step-1"> </div>
                        <div class="col-md-6 col-md-pull-6 reveal-left-fade" style="font-family: 'Raleway', sans-serif;    color: #666666;">
                            <div class="step-number"><span>1</span></div>
                            <h4>{{$author1->name}}</h4>
                            <p>{{$author1->about}}</p>
                        </div>
                    </div>
                    <!--step 1 end-->
                    <!--step 2-->
                    <div class="row">
                        <div class="col-md-6 text-center"><img src="{{$author2->featured}}" style="border-radius: 50%; height:200px; width:200px;" alt="step-1">  </div>
                        <div class="col-md-6 reveal-right-fade"style="font-family: 'Raleway', sans-serif;    color: #666666;">
                            <div class="step-number"><span>2</span></div>
                            <h4>{{$author2->name}}</h4>
                            <p>{{$author2->about}}</p>
                        </div>
                    </div>
                    <!--step 2 end-->
                    <!--step 3-->
                    <div class="row">
                        <div class="col-md-6 col-md-push-6 text-center"><img src="{{$author3->featured}}" style="border-radius: 50%; height:220px; width:220px;" alt="step-1"> </div>
                        <div class="col-md-6 col-md-pull-6 reveal-left-fade" style="font-family: 'Raleway', sans-serif;    color: #666666;">
                            <div class="step-number"><span>3</span></div>
                            <h4>{{$author3->name}}</h4>
                            <p>{{$author3->about}}</p>
                        </div>
                    </div>
                    <!--step 3 end-->
                    <!--step 4-->
                    <div class="row">
                        <div class="col-md-6 text-center"> <img src="{{$author4->featured}}" style="border-radius: 50%; border:1px solid gray; height:200px; width:200px;" alt="step-1"> </div>
                        <div class="col-md-6 reveal-right-fade" style="font-family: 'Raleway', sans-serif;    color: #666666;">
                            <div class="step-number"><span>4</span></div>
                            <h4>{{$author4->name}}</h4>
                            <p>{{$author4->about}}</p>
                        </div>
                    </div>
                    <!--step 4 end-->
                    <div class="row">
                        <div class="col-md-6 col-md-push-6 text-center"> <img src="{{$author5->featured}}" style="border-radius: 50%; border:1px solid gray; height:200px; width:200px;" alt="step-1"> </div>
                        <div class="col-md-6 col-md-pull-6 reveal-left-fade" style="font-family: 'Raleway', sans-serif;  color: #666666;">
                            <div class="step-number"><span>5</span></div>
                            <h4>{{$author5->name}}</h4>
                            <p>{{$author5->about}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--How it works end-->
    <!-- =========================
            service section
     ============================== -->
   
    <!-- =========================
            why choose section
     ============================== -->
    <section id="karbar-why-choose-section" class="section-dark why-choose-us" style="font-family: 'Raleway', sans-serif;  color: #666666;" >
    <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="k-why-choose-us-main">
                        <div class="k-why-choose-us dark-why-choose-us margin-bottom"> <img src="{{asset('images/69131-صور-معرض-الكتاب-(3).jpg')}}" style="height:500px; width:700px;" alt="" class="img-responsive"> </div>
                        <div class="border-box"></div>
                    </div>
                </div>
                <!--end item-->
                <div class="col-md-5 padding-left-4">
                    <div class="col-xs-12 nopadding">
                        <div class="sec-title-container text-center">
                            <div class="title-line less-mar wtc-bg"></div>
                            <h2 class=" font-weight-7 nopadding ce-title"><span style="color: #1967c3">About International BookFair</span></h2>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                   
                            <p style="padding: 3px; font-size:16px;">
   The Cairo International Book Fair is the largest and oldest book fair in the Arab world, held every year in the last week of January in Cairo, Egypt, at the Cairo International Fair Grounds in Madinat Nasr, near Al-Azhar University, it is organized by the General Egyptian Book Organization. The Fair is considered the most important event in the Arabic publishing world. 
    The Cairo International Book Fair is one of the biggest book fairs in the world, drawing hundreds of book sellers from around the world and about 2 million visitors each year. It is the largest book fair in the Arab world, as well as the oldest. In 2006, it was the second largest book fair in the world after the Frankfurt Book Fair. 
</p>
                        
                    
                </div>
                <!--end item-->
            </div>
        </div>
    </section>
    <!-- end why choose -->
    
  <section id="karbar-service-section" style="font-family: 'Raleway', sans-serif;  color: #666666; background-color:white;">
        <div class="container">
            <div class="row">
                <!-- Section main title -->
                <div class="col-xs-12 section-title-padding">
                    <div class="sec-title-container text-center">
                        <div class="title-line"></div>
                        <h2 class="uppercase font-weight-7 less-mar-1">Our Category</h2>
                        <div class="clearfix"></div>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <!--end title-->
                <div class="item">
                    <div class="col-md-6">
                        <div class="service-left-side active reveal-right-delay">
                            <div class="circle"><h3 style="margin-top:20px">action</h3> </div>
                            <div class="text-box">
                                <h5 class="title">Action Category</h5>
                                <p>Action Books has been filling a gap in American publishing by translating works that are considered </p>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                    <div class="col-md-6">
                        <div class="service-right-side reveal-right-delay">
                            <div class="circle"><h3 style="margin-top:20px">ISLAMIC</h3> </div>
                            <div class="text-box">
                                <h5 class="title">Islamic category</h5>
                                <p>The islamicbook is a website that facilitates access to islamic books that are freely readable over the Internet.</p>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                    <div class="clearfix"></div>
                    <div class="col-divider-margin-3"></div>
                    <div class="col-md-6">
                        <div class="service-left-side reveal-right-delay">
                            <div class="circle">  <h3 style="margin-top:20px">Kids</h3></div>
                            <div class="text-box">
                                <h5 class="title">Kids category</h5>
                                <p>We’re living in a golden age of young-adult literature, when books ostensibly written for teens are equally adored </p>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                    <div class="col-md-6">
                        <div class="service-right-side reveal-right-delay">
                            <div class="circle"><h3 style="margin-top:20px">History</h3> </div>
                            <div class="text-box">
                                <h5 class="title">History category</h5>
                                <p>the Five Books history section contains recommendations of all the great works. Listed are some of the best history,</p>
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                </div>
            </div>
        </div>
       
    </section>
   

    <!-- end services -->
    <section id="karbar-team-section" style="font-family: 'Raleway', sans-serif;  color: #666666; background-color:white; font-size:17px;">
        <div class="awesome-team-members">
            <div class="container">
                <div class="row">
                    <!-- Section main title -->
                    <div class="col-xs-12 section-title-padding">
                        <div class="sec-title-container text-center">
                            <div class="title-line"></div>
                            <h2 class="uppercase font-weight-7 less-mar-1">Aditional information</h2>
                            <div class="clearfix"></div>
                          
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!--end title-->
                    <div class="col-md-4 col-sm-6 col-xs-12 padding">
                        <div class="item-holder margin-bottom">
                            <img src= "{{asset('images/b1.jpg')}}" style="height: 200px; width: 100%" alt="" class="img-responsive">
                            <div class="clearfix"></div>
                            <div class="text-box text-center">
                                <br>
                                
                                <p class="text-sm">The new venue covers 45,000 square metres, housing 748 publishers and 525 publishing agents, and will comprise of 723 sections</p>
                                <br>
                                
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 padding">
                        <div class="item-holder margin-bottom">
                            <div class="text-box text-center more-height white"style="height: 200px">
                                
                                <p>The fiftieth annual Cairo International Book Fair opens on Wednesday and will run until 5 February, featuring 1,273 publishers from 35 countries, and for the first time is taking place in the outer suburbs of the city</p>
                                <br>
                                
                            </div>
                            <img src= "{{asset('images/b2.jpg')}}" alt="" class="img-responsive">
                        </div>
                    </div>
                    <!--end item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 padding">
                        <div class="item-holder margin-bottom">
                            <img src= "{{asset('images/b3.jpg')}}" alt="" class="img-responsive" style="height: 200px;  width:100%">
                            <div class="clearfix"></div>
                            <div class="text-box text-center">
                                <h4 class="text-white font-weight-5">Ierin Sultana</h4>
                                <p class="text-sm">The fair has moved from the fairground in Nasr City to the Egypt International Exhibition Center in the Tagamoa El-Khamis, in the suburb of New Cairo.</p>
                                <br>
                               
                            </div>
                        </div>
                    </div>
                    <!--end item-->
                </div>
            </div>
        </div>
    </section>
   
    <!-- end team section -->
    <div class="col-xs-12 section-title-padding"style=" background-color:white;">
                    <div class="sec-title-container text-center">
                        <div class="title-line"></div>
                        <h2 class="uppercase font-weight-7 less-mar-1"></h2>
                        <div class="clearfix"></div>
                        <br>
                      <h2>Most popular books</h2>
                        <br>
                    </div>
                </div>
    <div class="swiper-container"style=" background-color:white;">

    <div class="swiper-wrapper">
        @foreach($gallary as $gallary)
      <div class="swiper-slide" style="background-image:url({{$gallary->featured}});background-size:100% 100%"></div>
      @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
   
            
            <div class="row sec-padding sponsors"style=" background-color:white;">
                <ul class="clients-list grid-cols-6 hover-6">
                    <li>
                        <a href="#"><img src="{{asset('images/publisher.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher1.jpeg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher10.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher11.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher9.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher5.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher2.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher3.jpeg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher4.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher6.png')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher7.jpg')}}" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="{{asset('images/publisher15.jpg')}}" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end client testimonial -->
    <!-- =========================
           swipper section
     ============================== -->
    
    <!-- =========================
            Gmap, ContactForm section
     ============================== -->
    <!--  -->
   
    <section id="karbar-footer-section">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="map">
                   <img src="{{asset('images/map5.jpg')}}" style=" width: 100%;
    height: 450px;">
                </div>
                
                <div class="contact-info">
                    <ul class="clearfix">
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            <p>+1 123 654 5421
                                <br>+1 684 548 3645</p>
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>Book Fair@hotmail.com
                                <br>info@hotmaill.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscribe-content">
                        <!-- Newsletter title -->
                        <div class="subscribe-content-inner">
                            <h2>SUBSCRIBE TO OUR Book Fair</h2>
                            <p>The most important thing is to think that we do not live alone and that the technology is 
                                <br>constantly evolving day by day .</p>
                        </div>
                    </div>
                    <div class="subscribe-form">
                        <div class="subscribe-form-inner">
                            <!-- Newsletter form -->
                            <form class="form-inline dv-form" id="mc-form">
                                <div class="form-group">
                                    <input id="mc-email" type="email" name="EMAIL" placeholder="Enter Your Email Address" class="form-control">
                                    <button class="btn btn-24" name="Subscribe" id="subscribe-btn" type="submit">Subscribe</button>
                                </div>
                                <br>
                                <label for="mc-email"></label>
                                <div id="subscribe-result"></div>
                            </form>
                        </div>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                    <div class="copyright">
                        <p class="copyright">© 2019 All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- end Gmap ContactForm -->
    <!-- 
           Color Switcher
     ============================== -->
    <div id="custumize-style">
        <a href="#" class="switcher open"> <span class="icon-switcher"><i class="fa fa-cogs"></i></span></a>
        <div>
            <h3 class="color-option-title">Colors</h3>
            <ul class="colors-style" id="custom-color">
                <li>
                    <a href="#" class="blue"></a>
                </li>
                <li>
                    <a href="#" class="yellow"></a>
                </li>
                <li>
                    <a href="#" class="red"></a>
                </li>
                <li>
                    <a href="#" class="green"></a>
                </li>
                <li>
                    <a href="#" class="purple"></a>
                </li>
                <li>
                    <a href="#" class="pink"></a>
                </li>
            </ul>
        </div>
    </div>
  
    <!-- End Color Switcher -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="{{asset("js/vendor/jquery-1.11.2.min.js")}}"></script>')
    </script>
    <!-- plugin js -->
    <script src="js/plugins.js"></script>

    <!-- super slider -->
    <script type="text/javascript" src="{{asset('js/jquery.superslides.min.js')}}"></script>
    <!-- contact js -->
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery-contact.js')}}"></script>
    <!-- retina js -->
    <script src="{{asset('js/retina.min.js')}}"></script>
    <!-- mailchimp -->
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- scroll animatin JS -->
    
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB963i1T-nnKpiJjHmBfZq1zX9nEsgklhQ&callback=initMap" async defer></script>
    <!-- color js -->
    <script src="{{asset('switcher/switcher.js')}}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/jquery.gridster.min.js')}}"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate:20,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
    <script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
    </script>
</body>

</html>
