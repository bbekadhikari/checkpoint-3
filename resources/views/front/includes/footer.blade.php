   <!-- Footer Area -->
    <footer class="footer-area">
       
        <!-- Footer Top Area -->
        <div class="footer-top section-pb section-pt-60">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mt--60">
                        <div class="footer-single-block">    
                            <p class="footer-dec">{{$footer->phone}}</p>
                            <ul class="footer-social-link">
                                <li><a href="{{$footer->facebook}}"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="{{$footer->twitter}}"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="{{$footer->insta}}"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="{{$footer->youtube}}"><i class="zmdi zmdi-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6  mt--60">
                        <div class="footer-block">
                            <h5>Quick Links</h5>
                            <ul class="footer-list">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('front.testimonials')}}">Testimonial</a></li>
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                                <li><a href="{{route('front.contact')}}">Contact</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt--60">
                        <div class="footer-block">
                            <h5>Classes</h5>
                            <ul class="footer-list">
                                @foreach($classes as $class)
                                <li><a href="#">{{$class->heading}}</a></li>
                                @endforeach
                                
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt--60">
                        <div class="footer-block">
                            <h5>Get In Touch</h5>
                            <ul class="footer-list">
                                
                                <li><a href="#"><i class="zmdi zmdi-phone"></i> {{$footer->mobile}} </a></li>
                                <li><a href="#"><i class="zmdi zmdi-email"></i> {{$footer->email}} </a></li>
                                <li><a href="#">Address: {{$footer->address}} </a></li>
                                
                                
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!--// Footer Top Area -->
        </div><!--// Footer Top Area -->
        
        <!-- Footer-bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right pt--10 pb--10 text-center text-white">
                            <p>Copyright© 2020 <a href="#"></a>,Designed & Developed By <span>Bibek Yadav C7202827</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// Footer-botton Area -->
        
    </footer>
    <!--// Footer Area -->
    
    
    
    
</div>


<!-- jQuery JS -->
<script src="{{asset('front/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('front/assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('front/assets/js/plugins.js')}}"></script>
<!-- Ajax Mail -->
<script src="{{asset('front/assets/js/ajax-mail.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('front/assets/js/main.js')}}"></script>


</body>


</html>