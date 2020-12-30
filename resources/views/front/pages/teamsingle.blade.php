@include('front.includes.header')
@include('front.includes.nav')

<div class="container-fluid" style="background-image:url('{{asset('front/images/12.jpg')}}'); background-repeat: no-repeat;background-position: center;background-size: cover; ">
    <div class="container text-center">
        <h2 class="pt-5 pb-5"><b>Researches</b> </h2>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($researches as $blog)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card" style="width: 17rem;">
                    <img src="{{asset('uploads/'.$blog->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$blog->heading}}</h5>
                        <p class="card-text"> {!! $result = substr($blog->description, 0, 100) !!}</p>
                        <a href="{{route('blogpage',$blog->id)}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@include('front.includes.footer')
@include('front.includes.js')