@include('front.includes.header')
 <div class="container-fluid" style="background-image: url('{{asset('front/assets/images/slider/background-image-4.jpg')}}'); background-attachment:scroll; background-repeat:no-repeat; background-position: center; background-size: cover; min-height: 200px; width: 100%;">
        <div class="container">
        <h3 class="p-5" style="font-weight:bold; color: white;">{{$port->heading}}</h3>
         </div> 
      </div>
<div class="container">
          <div class="row mt-5">
              <div class="col-lg-3">
                  <h5 style="font-weight:bold;">Study Abroad</h5>
                  <hr>
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach($portfollio as $ports)

                  <a class="nav-link rounded-0 <?php if($ports->id == $port->id) echo "active" ?>"  href="{{route('front.abroad',$ports->id)}}" >{{$ports->heading}}</a>
                  @endforeach
                 
               <h5 style="font-weight:bold;" class="mt-2">Opening Hours</h5>
                  <hr>
                 {!!$shortnotice->status!!}

              </div>
            </div>
              <div class="col-lg-9">

                  <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          
                          <img src="{{asset('uploads/'.$port->image)}}">

                          <p>{!!$port->description!!}</p>

                      </div>
                     
                    </div>
              </div>
          </div>
      </div>

@include('front.includes.footer')