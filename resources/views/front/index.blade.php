@include('front.includes.header')
   
    
    
    <!-- Hero Slider start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        @if(!empty($banner))
      <img src="{{asset('uploads/'.$banner->image)}}" class="d-block w-100" alt="...">
      @endif
    </div>
    @foreach($banners as $banner)
    <div class="carousel-item">
      <img src="{{asset('uploads/'.$banner->image)}}" class="d-block w-100" alt="...">
    </div>
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Hero Slider end -->
    
    <!-- Our Course Categories Two -->
    <div class="our-course-categories-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course-categories-two-wrap">
                       
                        <div class="coustom-col-3">
                            <!-- single-course-categories -->
                            <div class="single-course-categories-two malachite wow fadeInBottom" data-wow-duration="0.4s">
                                <div class="item-inner">
                                    <div class="cours-icon">
                                        <span class="coure-icon-inner">
                                            <img src="{{asset('front/assets/images/icon/cat-01.png')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="cours-title">
                                        <h4>{{$shortnotice->heading1}}</h4>
                                        <p>{{$shortnotice->description1}}</p>
                                    </div>
                                </div>
                            </div><!--// single-course-categories -->
                        </div>
                        
                        <div class="coustom-col-3">
                            <!-- single-course-categories -->
                            <div class="single-course-categories-two sunglow  wow fadeInBottom" data-wow-duration="0.8s">
                                <div class="item-inner">
                                    <div class="cours-icon">
                                        <span class="coure-icon-inner">
                                            <img src="{{asset('front/assets/images/icon/cat-02.png')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="cours-title">
                                        <h4>{{$shortnotice->heading2}}</h4>
                                        <p>{{$shortnotice->description2}}</p>
                                    </div>
                                </div>
                            </div><!--// single-course-categories -->
                        </div>
                        
                        
                        <div class="coustom-col-3">
                            <!-- single-course-categories -->
                            <div class="single-course-categories-two mariner  wow fadeInBottom" data-wow-duration="1.2s">
                                <div class="item-inner">
                                    <div class="cours-icon">
                                        <span class="coure-icon-inner">
                                            <img src="{{asset('front/assets/images/icon/cat-03.png')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="cours-title">
                                        <h4>{{$shortnotice->heading3}}</h4>
                                        <p>{{$shortnotice->description3}}</p>
                                    </div>
                                </div>
                            </div><!--// single-course-categories -->
                        </div>
                        
                        <div class="coustom-col-3">
                            <!-- single-course-categories -->
                            <div class="single-course-categories-two brilliantrose  wow fadeInBottom" data-wow-duration="1.6s">
                                <div class="item-inner">
                                    <div class="cours-icon">
                                        <span class="coure-icon-inner">
                                            <img src="{{asset('front/assets/images/icon/cat-04.png')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="cours-title">
                                        <h4>{{$shortnotice->heading4}}</h4>
                                        <p>{{$shortnotice->description4}}</p>
                                    </div>
                                </div>
                            </div><!--// single-course-categories -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Our Course Categories Two -->
    
    <!-- What we provide Area -->
    <div class="what-provide-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  ml-auto mr-auto">
                    <div class="section-title-three mb--80">
                        <h4>why choose us</h4>
                        <h3>What we provide</h3>
                        @if(!empty($weprovide))
                        <p>{{$weprovide->Shortdes}}</p>
                         @endif
                    </div>
                </div>
            </div>
           
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="provider-wrap">
                        <div class="row">
                          @foreach($services as $service)
                            <div class="col-lg-6 col-md-6">
                               <!-- single-provide -->
                               <div class="single-provide">
                                    <div class="single-provide-icons">
                                        <img src="assets/images/icon/provide-01.png" alt="">
                                    </div>
                                    <div class="single-provide-contented">
                                       <h4>{{$service->heading}}</h4>
                                       <p>@php($descri=substr($service->description,0,50)){!! $descri !!}..</p>
                                    </div>
                               </div><!--// single-provide -->
                            </div>
                            @endforeach


                       </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="provide-image text-right wow fadeInBottom" data-wow-duration="0.6s">
                        @if(!empty('weprovide'))
                        <img src="{{asset('uploads/'.$weprovide->image)}}" alt="">
                        @endif
                    </div>
                </div>
               
                
            </div>
        </div>
    </div>
    <!-- What we provide Area-->
    
    
    <!-- Welcome About Us -->
    <div class="welcome-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title-three section-inner-ptb text-left text-white">
                        <h4>WELCOME TO EDUCATION</h4>
                        <h3 class="text-white">WHY CHOOSE US</h3>
                        @if(!empty($choose))
                        <p>@php($descri=substr($choose->description,0,100)){!! $descri !!}..</p>
                        @endif
                        <div class="start-now">
                            <a href="{{route('whychoose',$choose->id)}}" class="start-btn">Start learn now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        
        <div class="welcome-video">
            <div class="video-inner" style="background-image: url('{{asset('uploads/'.$choose->submenu)}}'); background-position:scroll; background-repeat:no-repeat; background-size:cover;">
              
            </div>
        </div>
    </div>
    <!--// Welcome About Us -->
    
    <!-- Most Popular Courses List Area -->
    <div class="popular-courses-list-area section-ptb">
        <div class="container">
            
            <div class="row">
               
                <div class="col-lg-8  ml-auto mr-auto">
                    <div class="section-title-two">
                        <h4>why choose us</h4>
                        <h3>STUDY ABROAD DESTINATION</h3>
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <div class="courses-tab-wrapper">
            <div class="container">
               
                
                
                <!-- courses-wrapper start -->
                <div class="courses-wrapper-tab-panel">
                    <!-- tab-contnt start -->
                    <div class="tab-content">

                        <div class="tab-pane active" id="graphic">
                            <div class="row ">
                                <div class="courses-tab-active owl-carousel">
                                    @foreach($studyabroad as $abroad)
                                    <div class="col-lg-12">
                                        <!-- single-courses -->
                                        <div class="single-popular-courses mt--30">
                                            <div class="popular-courses-image">
                                                <a href="#"><img src="{{asset('uploads/'.$abroad->image)}}" alt=""></a>
                                            </div>
                                            <div class="popular-courses-contnet">
                                                <h5>{{ $abroad->heading }}</h5>
                                                
                                                <p>
                                                @php($descri=substr($abroad->description,0,100)){!! $descri !!}..</p>
                                                <div class="button-block">
                                                    <a href="{{route('front.abroad',$abroad->id)}}" class="botton-border">Read more</a>
                                                </div>
                                            </div>
                                        </div><!--// single-courses -->
                                    </div>
                                       @endforeach
                                   
                                </div>
                            </div>
                        </div>

                       

                    </div><!--// tab-contnt start -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-course-btn">
                                <a href="{{route('allabroad')}}" class="all-course">VIEW all</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--// courses-wrapper start -->
            </div>
        </div>
        
    </div>
    <!--// Most Popular Courses List Area -->
    
    <!-- Register Now Area -->
    <div class="register-now-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5 ">
                    <div class="register-wrap">
                        <div class="register-inner">
                            <div class="register-title text-center">
                                <h5>Get a free registration</h5>
                                <h3>REGISTER NOW</h3>
                            </div>
                            <div class="register-from-area">
                              {{Form::open(['method'=>'post','route'=>'register.store','enctype'=>'multipart/form-data'])}}
                                    <div class="input-box">
                                        <input type="text" placeholder="Name" name="name">
                                    </div>
                                    <div class="input-box">
                                        <input type="text" placeholder="E-mail" name="email">
                                    </div>
                                    <div class="input-box">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                    </div>
                                    <div class="submit-button">
                                        <button class ="btn btn-success btn-block" type="submit">Submit</button>
                                    </div>
                                {{Form::close()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="testimonial-two-wrap" data-secondary-overlay="8">
            
                <div class="testimonial-active owl-carousel">
                    @foreach($teams as $team)
                    <div class="col-lg-8 ml-auto mr-auto">
                        <!-- testimonial-wrap -->
                        <div class="testimonial-wrap text-center">
                            <div class="testimonial-image">
                                <img src="{{asset('uploads/'.$team->image)}}" alt="" style="height: 80px; width: 80px; border-radius:100%">
                            </div>
                            <div class="testimonial-info">
                                <div class="autor-info">
                                    <h4>{{$team->heading}}</h4>
                                    <h6>{{$team->designation}}</h6>
                                </div>
                                <p> @php($descri=substr($abroad->description,0,100)){!! $descri !!}..</p>
                            </div>
                        </div><!--// testimonial-wrap -->
                    </div>
                    @endforeach
                  
                </div>
        </div>
    </div>
    <!--// Register Now Area -->
     <!-- Our Blog Area -->
    <div class="our-blog-area section-ptb">
        <div class="container">
            <div class="col-lg-8  ml-auto mr-auto">
                <!-- section-title -->
                <div class="section-title-two">
                    
                    <h3>TOP UNIVERSITIES</h3>
                </div><!--// section-title -->
            </div>
            <div class="row">
                @foreach($universities as $university)
                <div class="col-lg-4  col-md-6 col-12">
                    <!-- single-courses -->
                    <div class="single-our-blog mt--30">
                        <div class="our-blog-image">
                            <a href="{{route('front.university',$university->id)}}">
                                <img src="{{asset('uploads/'.$university->image)}}" alt="">
                                <span class="in-our-blog-icon">
                                    <img src="{{asset('front/assets/images/icon/our-blog-01.png')}}" alt="">
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
                
                
                <div class="col-lg-12">
                    <div class="all-course-btn">
                        <a href="{{route('alluniversities')}}" class="all-course">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog End -->
  
    
    <!-- Project Count Area Start -->
    <div class="project-count-area section-ptb-160 project-count-bg">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-8  ml-auto mr-auto">
                    <!-- section-title -->
                    <div class="section-title">
                        <h4>about us</h4>
                        <h3 class="text-white">SOME IMPORTANT FACTS</h3>
                    </div><!--// section-title -->
                </div>
            </div>
            
            <div class="project-count-inner_one">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <!-- counter start -->
                                <div class="counter text-center">
                                    <?php 
                                     $abroad =App\Portfollio::count();
                                    ?>
                                    <h3 class="counter-active">{{$abroad}}</h3>
                                    <p>Countries</p>
                                </div>
                                <!-- counter end -->
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- counter start -->
                                <div class="counter text-center">
                                    <?php
                                     $universities =App\Research::count();
                                    ?>
                                    <h3 class="counter-active">{{$universities}}</h3>
                                    <p>Universities</p>
                                </div>
                                <!-- counter end -->
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <!-- counter start --> 
                                <div class="counter text-center">
                                     <?php
                                     $team =App\Team::count();
                                    ?>
                                    <h3 class="counter-active">{{$team}}</h3>
                                    <p>Success Stories</p>
                                </div>
                                <!-- counter end -->
                            </div>

                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Count Area End -->
    
   
    
 @include('front.includes.footer')