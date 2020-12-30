@include('front.includes.header')
@include('front.includes.nav')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            @if(!empty($banner))
            <img src="{{asset('uploads/'.$banner->image)}}" class="d-block w-100" alt="...">
                @endif
        </div>
        @foreach($banners as $baner)
        <div class="carousel-item">
            <img src="{{asset('uploads/'.$baner->image)}}" class="d-block w-100" alt="...">
        </div>
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="icon-bar">
    <a href="{{route('contact')}}" style="color:white;" class="facebook">CONTACT</a>
</div>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-5">
                <h2 style="font-weight:bolder;" >PRODUCTS</h2>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; ">
                        <div class="pt-2 pb-2 pr-2 pl-2 ">
                            <div style="background-color:black;" class="image-box">
                                <img src="{{asset('uploads/'.$product->image)}}" class="card-img-top"  alt="..." height="300">
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-text">{!! $product->description !!}
                            </p>
                            <a href="{{route('product.detail',$product->id)}}" class="btn btn-link " style="text-align:center;font-weight:bolder; color:#277F53; text-decoration:none; font-size:16px;"><i class="fa fa-forward"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>






        </div>
    </div>
</div>







@include('front.includes.footer')
@include('front.includes.js')