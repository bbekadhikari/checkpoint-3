@include('front.includes.header')
@include('front.includes.nav')
<div class="container-fluid" style="background-image:url('{{asset('front/images/12.jpg')}}'); background-repeat: no-repeat;background-position: center;background-size: cover; ">
    @if(!empty($page))
    <div class="container text-center">
       <h2 class="pt-5 pb-5"><b>{{$page->name}}</b> </h2>
    </div>
        @endif
</div>

@foreach($pages as $page)
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
           <p>{!! $page->page!!}</p>
        </div>
    </div>
    <hr>
</div>
@endforeach
@include('front.includes.footer')
@include('front.includes.js')