<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/eduhas-preview/eduhas/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 02:52:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 02 || Eduhas - Education Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
    
    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/material-design-iconic-font.min.css')}}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}">
    
    <!-- Modernizer JS -->
    <script src="{{asset('front/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>

</head>
<style type="text/css">
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #007bff;
    border-radius: 0px;
    border-right: 3px solid red;
}
  @media (max-width: 575.98px) { 
            .logo img{
                height:60px !important;
                }
            
         }
</style>

<body style="border-radius: 0px;">
<!-- Main Wrapper Start -->
<div class="main-wrapper">
   
     <header class="header-area">
        <!-- header-top-area -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                       
                        <!-- top-contact-info -->
                        <div class="top-contact-info">
                            <ul>
                                <li><a href="tel:012345676"><i class="zmdi zmdi-phone"></i>{{$footer->mobile}}</a></li>
                                <li><a href="mailto:education@ingo.com"><i class="zmdi zmdi-email"></i>{{$footer->email}} </a></li>
                            </ul>
                        </div><!--// top-contact-info -->
                        
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="top-info-right">
                           
                            <!-- top-social -->
                            <div class="top-social">
                                <ul>
                                    <li><a href="{{$footer->facebook}}"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="{{$footer->twitter}}"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="{{$footer->insta}}"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="{{$footer->youtube}}"><i class="zmdi zmdi-youtube"></i></a></li>
                                    
                                </ul>
                            </div><!--// top-social -->
                            
                            <!-- login-and-register -->
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// header-top-area -->
        
        <div class="header-bottom-area header-sticky header-sticky">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-3 col-md-5 col-6">
                        
                        <!-- logo-area -->
                        <div class="logo-area">
                            @if(!empty($logo))
                            <a href="index.html" class="logo">
                                <h5>Bristol</h5>
                            </a>
                            @endif
                        </div><!--// logo-area -->
                        
                    </div>
                    
                    <div class="col-lg-9 col-md-7 col-6">
                        
                        <div class="header-bottom-right">
                            <!-- main-menu -->
                            <div class="main-menu">
                                <nav class="main-navigation">
                                    <ul>
                                        <li class="active"><a href="{{route('home')}}"> HOME</a>
                                        
                                        </li>
                                        <?php 
                                          $aboutus = App\aboutus::all();
                                        ?>
                                          <li><a href="#">ABOUT</a>
                                            <ul class="sub-menu">
                                                @foreach($aboutus as $port)
                                                <li><a href="{{route('front.about',$port->id)}}">{{$port->heading}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>
                                       
                                       <li><a href="#">Study Abroad</a>
                                            <ul class="sub-menu">
                                                @foreach($portfollio as $port)
                                                <li><a href="{{route('front.abroad',$port->id)}}">{{$port->heading}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>
                                        <li><a href="{{route('classes')}}">Classes</a>
                                        </li>
                                        
                                       
                                           <li><a href="#">Services</a>
                                            <ul class="sub-menu">
                                                @foreach($services as $service)
                                                <li><a href="{{route('front.services',$service->id)}}">{{$service->heading}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>
                                        <li><a href="{{route('front.testimonials')}}">Testimonials</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('front.contact')}}">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div><!--// main-menu -->

                        
                            
                        </div>
                    </div>
                    
                     <div class="col">
                        <!-- mobile-menu start -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                        <!-- mobile-menu end -->
                    </div>
                    
                </div>
            </div>
        </div>
        
    </header>