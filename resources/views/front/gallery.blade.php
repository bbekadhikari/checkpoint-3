@include('front.includes.header')
<div class="container-fluid" style="background-image: url('{{asset('front/assets/images/slider/background-image-4.jpg')}}'); background-attachment:scroll; background-repeat:no-repeat; background-position: center; background-size: cover; min-height: 200px; width: 100%;">
        <div class="container">
        <h3 class="p-5" style="font-weight:bold; color: white;">Gallery</h3>
         </div> 
      </div>
 <div class="gallery-area section-pt section-pb-90">
            <div class="container">
                <div class="row">
                    <!--Single Gallery Image Start-->
                    @foreach($galleries as $gallery)

                    <div class="col-md-4 col-sm-6">
                        <div class="single-gallery-img mb--30">
                            <a href="{{asset('images/'.$gallery->image)}}" data-fancybox="images"><img src="{{asset('images/'.$gallery->image)}}" alt="" ></a>
                        </div>
                    </div>
                    @endforeach
                    <!--Single Gallery Image End-->
                    <!--Single Gallery Image Start-->
                    
                    <!--Single Gallery Image End-->
                </div>
            </div>
        </div>
        <!--Gall
 @include('front.includes.footer')