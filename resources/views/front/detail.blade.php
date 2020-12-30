@include('front.includes.header')
@include('front.includes.nav')

<div class="container mt-5">
    <h3 class="text-center">{{$product->name}}</h3>
    <hr>
</div>
@include('flash::message')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-3 ">
            <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Product Overview </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Features</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-download" role="tab" aria-controls="v-pills-download" aria-selected="false">Downloads</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-multimedia" role="tab" aria-controls="v-pills-multimedia" aria-selected="false">Multimedia</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-quote" role="tab" aria-controls="v-pills-quote" aria-selected="false">Request a Quote</a>

            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                            <div class="card" style="width: 18rem; ">
                                <div class="pt-2 pb-2 pr-2 pl-2 ">
                                    <div style="background-color:black;" class="image-box">
                                        <img src="{{asset('uploads/'.$product->image)}}" class="card-img-top" alt="..." height="300">
                                    </div>
                                </div>

                            </div>

                        </div>
                        @foreach($attributes as $attribute)
                        <div class="tab-pane fade" id="pills-{{$attribute->id}}" role="tabpanel" aria-labelledby="pills-profile-tab">

                            <div class="card" style="width: 18rem; ">
                                <div class="pt-2 pb-2 pr-2 pl-2 ">
                                    <div style="background-color:black;" class="image-box">
                                        <img src="{{asset('uploads/'.$attribute->image)}}" class="card-img-top" alt="..." height="300">
                                    </div>
                                </div>

                            </div>

                        </div>
                        @endforeach

                    </div>

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="{{asset('uploads/'.$product->image)}}" height="30"></a>
                        </li>
                        @foreach($attributes as $attribute)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-{{$attribute->id}}" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="{{asset('uploads/'.$attribute->image)}}" height="30"></a>
                        </li>
                        @endforeach

                    </ul>

                    <p>{!! $product->description !!}</p>



                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                {!! $product->features !!}
                </div>
                <div class="tab-pane fade" id="v-pills-download" role="tabpanel" aria-labelledby="v-pills-download-tab">

                    <h5>Brochures</h5>
                    <a href="#">hello.pdf</a>


                </div>
                <div class="tab-pane fade" id="v-pills-multimedia" role="tabpanel" aria-labelledby="v-pills-multimedia-tab">
                    <h5>Multimedia</h5>
                </div>
                <div class="tab-pane fade" id="v-pills-quote" role="tabpanel" aria-labelledby="v-pills-quote-tab">
                    <h5>Request a Quote</h5>
                    <p>Please fill out the form below to request a quote. We will be in contact with you shortly.</p>
                    <hr>
                    {{Form::open(['method'=>'post','route'=>'qutoe.store'])}}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Product Name</label>
                            <input type="text" class="form-control form-control-sm" name="product_name" id="exampleFormControlInput1" placeholder="" value="{{$product->name}}" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name (<span style="color:red">*</span>)</label>
                            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="Name" name="name" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email (<span style="color:red">*</span>)</label>
                            <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1" name="email" placeholder="abc@email.com"  required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">City (<span style="color:red">*</span>)</label>
                            <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" name="city" placeholder="City"  required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Country (<span style="color:red">*</span>)</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="country">
                                <option>NEPAL</option>
                                <option>US</option>
                                <option>INDIA</option>
                                <option>BANGLADESH</option>
                                <option>BHUTAN</option>
                                <option>CHINA</option>
                                <option>JAPAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone no:(<span style="color:red">*</span>)</label>
                            <input type="text" class="form-control form-control-sm" name="phone" id="exampleFormControlInput1" placeholder="+00-00000000"  required="">
                        </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Message(<span style="color:red">*</span>)</label>
                        <textarea class="form-control form-control-sm" name="message" id="exampleFormControlInput1" required=""></textarea>
                    </div>

                        <button class="btn btn-success btn-sm" type="submit">Submit</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">

    <h3 class="text-center">Related Products</h3>
    <hr>


    <div class="container mt-5">
        <div class="row">
            @php($productitem = \App\Product::where('id','!=',$product->id)->orderBy('created_at','desc')->get())
            @foreach($productitem as $product)
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