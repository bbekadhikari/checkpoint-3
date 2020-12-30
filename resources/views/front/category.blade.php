@include('front.includes.header')
@include('front.includes.nav')

<div class="container-fluid">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        @foreach($productsubcat as $subcat)
        <li class="nav-item" role="presentation">
            <a class="nav-link  " id="home-tab" data-toggle="tab" href="#hello-{{$subcat->id}}" role="tab" aria-controls="home" aria-selected="true">{{$subcat->name}}</a>
        </li>
        @endforeach

    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="row pt-5">
                @php($productfirst =\App\Product::where('productsubcat_id',$subcate->id)->get())
                @foreach($productfirst as $product)
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; ">
                        <div class="pt-2 pb-2 pr-2 pl-2 ">
                            <div style="background-color:black;" class="image-box">
                                <img src="{{asset('uploads/'.$product->image)}}" class="card-img-top" alt="..." height="300">
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
        @foreach($productsubcat as $subcat)
        <div class="tab-pane fade" id="hello-{{$subcat->id}}" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row pt-5">
                @php($products = \App\Product::where('productsubcat_id',$subcat->id)->get())

                @foreach($products as $product)

                <div class="col-lg-4">
                    <div class="card" style="width: 18rem; ">
                        <div class="pt-2 pb-2 pr-2 pl-2 ">
                            <div style="background-color:black;" class="image-box">
                                <img src="{{asset('uploads/'.$product->image)}}" class="card-img-top" alt="..." height="300">
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
        @endforeach

    </div>
</div>




@include('front.includes.footer')
@include('front.includes.js')