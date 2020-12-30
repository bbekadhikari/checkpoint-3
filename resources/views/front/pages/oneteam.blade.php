@include('front.includes.header')
@include('front.includes.nav')
<div class="container-fluid" style="background-image:url('{{asset('front/images/12.jpg')}}'); background-repeat: no-repeat;background-position: center;background-size: cover; ">
    <div class="container text-center">
        <h2 class="pt-5 pb-5"><b>About Team Member</b> </h2>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-md-5">
                <img src="{{asset('uploads/'.$page->image)}}">
            </div>
            <div class="col-lg-7 col-sm-12 col-md-7">
                <h3>{{$page->heading}}</h3>
                <p>{!! $page->description !!}</p>
            </div>
        </div>
    </div>
</div>


@include('front.includes.footer')
@include('front.includes.js')