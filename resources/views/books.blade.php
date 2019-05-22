
@extends('layouts.frontend')
@section('content')
     
 
       
   	
<!-- Start Single Product -->

                	
<div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:white;">
<div class="row">
				  <section class="text-center">
<h1  id="G1" class="wow bounceInUp" >Our books</h1>    
<!--Gallery section-->
<ul class="ul">
<li class="li" data-filter=".all">All</li>
<li class="li" data-filter=".kids">kids</li>
<li class="li" data-filter=".Eslamic">Eslamic</li>
<li  class="li" data-filter=".action">action</li>
<li  class="li" data-filter=".History">History</li>
</ul>
        
            <div class="container">
			<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 mix kids all">
			<img src="{{asset('img/item-8.jpg')}}" class="img"/>
			</div>
            <div class="col-xl-4  col-lg-4  col-md-4 mix Eslamic all">
			<img src="{{asset('img/item-7.jpg')}}" class="img"/>
			</div>
            <div class="col-xl-4  col-lg-4  col-md-4 mix kids History all">
			<img src="{{asset('img/item-6.jpg')}}" class="img" />
			</div>
            <div class="col-xl-4   col-lg-4  col-md-4 mix Eslamic all">
			<img src="{{asset('img/item-5.jpg')}}"  class="img"/>
			</div>
			<div class="col-xl-4  col-lg-4  col-md-4 mix action History all">
			<img src="{{asset('img/item-4.jpg')}}" class="img" />
			</div>
            <div class="col-xl-4  col-lg-4  col-md-4 mix action all">
			<img src="{{asset('img/item-3.jpg')}}" class="img" />
			</div>
           
		</div>
		</div>
<!--/Gallery section-->
</section>

                        
                  
       
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
		</div>
        <!-- End Shop Page -->
	
<!-- //Footer Area -->
    




@endsection