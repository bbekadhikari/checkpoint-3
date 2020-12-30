@include('front.includes.header')
 <div class="container-fluid" style="background-image: url('{{asset('front/assets/images/slider/background-image-4.jpg')}}'); background-attachment:scroll; background-repeat:no-repeat; background-position: center; background-size: cover; min-height: 200px; width: 100%;">
        <div class="container">
        <h3 class="p-5" style="font-weight:bold; color: white;">Classes</h3>
         </div> 
      </div>
<div class="container">
          <div class="row mt-5">
              <div class="col-lg-3">
                  <h5 style="font-weight:bold;">Classes</h5>
                  <hr>
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach($grades as $class)

                  <a class="nav-link rounded-0 active"  href="" >{{$class->heading}}</a>
                  @endforeach
                 
               <h5 style="font-weight:bold;" class="mt-2">Opening Hours</h5>
                  <hr>
                  <!-- <div class="row">
                      <div class="col-lg-6">Sunday-friday</div>
                      <div class="col-lg-6">10:00 AM - 6:00 PM</div>
                      <div class="col-lg-6">Saturday</div>
                      <div class="col-lg-6">Close</div>
                  </div> -->
                  {!!$shortnotice->status!!}

              </div>
            </div>
              <div class="col-lg-9">

                  <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          
                          <p>sklfjdlkgjlskfjsld</p>

                      </div>
                     
                    </div>
              </div>
          </div>
      </div>

@include('front.includes.footer')