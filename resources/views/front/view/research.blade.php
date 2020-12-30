@include('front.includes.header')
@include('front.includes.nav')
<div class="container-fluid" style="background-image:url('{{asset('front/images/12.jpg')}}'); background-repeat: no-repeat;background-position: center;background-size: cover; ">
    <div class="container text-center">
        <h2 class="pt-5 pb-5"><b>{{$page->heading}}</b> </h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <p>{!! $page->description !!}</p>
        </div>
    </div>
</div>
@include('front.includes.footer')
@include('front.includes.js')