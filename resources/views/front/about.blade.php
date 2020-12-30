@include('front.includes.header')
   
     <div class="container-fluid" style="background-image: url('{{asset('front/assets/images/slider/background-image-4.jpg')}}'); background-attachment:scroll; background-repeat:no-repeat; background-position: center; background-size: cover; min-height: 200px; width: 100%;">
        <div class="container">
        <h3 class="p-5" style="font-weight:bold; color: white;">{{$aboutus->heading}}</h3>
         </div> 
      </div>
      <div class="container">
      <div class="row">
        <div class="col-lg-9" style="border-right: 2px solid blue;">
         <div class="row">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-12">
                   {!! $aboutus->description !!}
               </div>
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