@include('front.includes.header')
 <div class="container-fluid" style="background-image: url('{{asset('front/assets/images/slider/background-image-4.jpg')}}'); background-attachment:scroll; background-repeat:no-repeat; background-position: center; background-size: cover; min-height: 200px; width: 100%;">
        <div class="container">
        <h3 class="p-5" style="font-weight:bold; color: white;">Testimonials</h3>
         </div> 
      </div>

<div class="container">
    <div class="row mt-3 p-3">
        @foreach($testimonials as $testimonial)
        <div class="col-lg-6 ">
            <div class="p-3 card">
                <div class="row">
                    <div class="col-lg-3">
                <img src="{{asset('uploads/'.$testimonial->image)}}" style="border-radius: 100px; height: 100px; width: 100px">
                 </div>
                 <div class="col-lg-9">
                     <h5 style="font-weight:bold;">{{$testimonial->heading}}</h5>
                     <p style="font-weight:bold;">{{$testimonial->designation}}</p>
                     <p>{!! $testimonial->description !!}</p>
                 </div>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>



    
 @include('front.includes.footer')