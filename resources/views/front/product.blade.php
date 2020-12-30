@include('front.includes.header')
@include('front.includes.nav')

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
                                <p class="card-text">{{$product->name}}
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