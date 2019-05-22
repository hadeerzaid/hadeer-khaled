<!DOCTYPE HTML>
<html lang="en">   
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>


<body>
     <!--<div class="gridster">
    <ul>
      @foreach($gallary as $gallary)
        <li data-row="1" data-col="1" data-sizex="1" data-sizey="1" style="background-image: url({{asset($gallary->featured)}});"></li>
    @endforeach 
    </ul>
    
    
    
    </div> --> 
     <!-- Swiper -->
     <section class="portfolio-section section-gap-full">
        <div class="container">
          
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 cl">
                            <div class="single-portfolio">
                                <img class="img-fluid" style="width:570px; height: 250px;" src="{{$first_product->featured}}" alt="">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title"></h5>
                                    </a>
                                    <span class="post">{{$first_product->title}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 cl">
                            <div class="single-portfolio">
                                <img class="img-fluid" style="width:530px; height: 300px;"  src="{{$second_product->featured}}" alt="">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Project Title</h5>
                                    </a>
                                    <span class="post">{{$second_product->title}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-portfolio">
                                <img class="img-fluid" style="width: 530px; height:200px;" src="{{$third_product->featured}}" alt="">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Project Title</h5>
                                    </a>
                                    <span class="post">{{$third_product->title}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-portfolio">
                                <img class="img-fluid"  style=" width: 530px; height:300px;" src="{{$fourth_product->featured}}" alt="">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Project Title</h5>
                                    </a>
                                    <span class="post">{{$fourth_product->title}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-portfolio">
                                <img class="img-fluid" style=" width: 530px; height:200px;" src="{{$fifth_product->featured}}" alt="">
                                <div class="box-content">
                                    <a href="single-portfolio.html">
                                        <h5 class="title">Project Title</h5>
                                    </a>
                                    <span class="post">{{$fifth_product->title}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio section -->
    <!-- End portfolio section -->

   
  <!-- Swiper JS -->
  <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/mine.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.gridster.min.js')}}"></script>
    <script>
    $(function(){
        $(".gridster ul").gridster({
            widget_margins :[10,10],
            widget_base_dimensions:[140,140],
            min_cols:6,
            resize:{
                enabled:true,
                max_size:[2,2],
                min_size:[1,1]
            }
        })  
    })
      
      
    
    
    </script>
  <!-- Initialize Swiper -->
  
    
    
    </body>
</html>