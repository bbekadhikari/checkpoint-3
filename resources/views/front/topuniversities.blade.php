@include('front.includes.header')
   
     <div class="container-fluid" style="background-image: url('{{asset('public/front/assets/images/slider/background-image-4.jpg')}}'); background-attachment:scroll; background-repeat:no-repeat; background-position: center; background-size: cover; min-height: 200px; width: 100%;">
        <div class="container">
        <h3 class="p-5" style="font-weight:bold; color: white;">Top Universities</h3>
         </div> 
      </div>
      <div class="container">
      <div class="row">
      	<div class="col-lg-9" style="border-right: 2px solid blue;">
         <div class="row">
           <div class="col-lg-12">
             <div class="row">
                @foreach($universities as $university)
                <div class="col-lg-4  col-md-6 col-12">
                    <!-- single-courses -->
                    <div class="single-our-blog mt--30">
                        <div class="our-blog-image">
                            <a href="blog-details.html">
                                <img src="{{asset('public/uploads/'.$university->image)}}" alt="">
                                <span class="in-our-blog-icon">
                                    <img src="{{asset('public/front/assets/images/icon/our-blog-01.png')}}" alt="">
                                </span>
                            </a>
                        </div>
                        <div class="our-blog-contnet">
                            <h5><a href="blog-details.html">{{$university->heading}}</a></h5>
                            <div class="post_meta">
                               
                            </div>
                            <p>@php($descri=substr($university->description,0,100)){!! $descri !!}..</p>
                            <div class="button-block">
                                <a href="{{route('front.university',$university->id)}}" class="botton-border">Read more</a>
                            </div>
                        </div>
                    </div><!--// single-courses -->
                </div>
                 @endforeach
             </div>
           </div>
         </div> 
        </div>
      	<div class="col-lg-3">
      		@include('front.includes.sidenav')
      	</div>
      </div>
      </div>
 
  
    
 @include('front.includes.footer')