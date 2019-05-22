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
    <style>
  
    .ul{
        height:auto;
        overflow:hidden;
        width:960px;
        list-style:none;
        background:#2c3e50;
        margin:15px auto 45px;
        color:#ffffff;
        

    }
    .ul li{
        padding:15px 20px;
        width:auto;
        height:auto;
        float:left;
        cursor:pointer;
    }
    .img{
        width:100%;
        margin-bottom:30px;

    }
    </style>
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
    <link rel="stylesheet" href="{{asset('switcher/switcher.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    
	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="{{asset('css/plugins1.css')}}">
	<link rel="stylesheet" href="{{asset('css/book_style1.css')}}">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
<!--/animate-->

<!--FW-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!--/FW-->
<!--GF-->
<link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">

<!--Hover.css-->
<link href="{{asset('css/hover-min.css')}}" rel="stylesheet" />


<!--My Styles-->
<link href="{{asset('css/myStyle.css')}}" rel="stylesheet" />
	<!-- Cusom css -->
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">

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
    <header>
        <!--Nav Menu Starts-->
        <div class="wrapper" id="wrapper">
		
		<!-- Header -->    

    <!-- end header -->
    <!-- =========================
            home slider section
     ============================== -->
   
@yield('content')
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
    <!-- =========================
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB963i1T-nnKpiJjHmBfZq1zX9nEsgklhQ&callback=initMap" async defer></script>
    <!-- color js -->
    <script src="{{asset('switcher/switcher.js')}}"></script>
       <!-- JS Files -->
	<script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/plugins.js')}}"></script>
	<script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    

<!--Count up-->
<script src="{{asset('script/countUp.min.js')}}"></script>
<!--/Count up-->


<!--MyScripts-->
<script src="{{asset('js/myScript.js')}}"></script>
<!--/MyScripts-->
<!--/Mixitup-->
<script src="{{asset('js/mixitup.min.js')}}"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
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
    <script>
    var mixer = mixitup('.container');
    var mixer = mixitup(containerEl);
    var mixer = mixitup(containerEl, {
    selectors: {
        target: '.blog-item'
    },
    animation: {
        duration: 300
    }
});
    
    
    </script>
</body>

</html>
