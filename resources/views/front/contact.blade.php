@include('front.includes.header')

<!--banner-->

<!--banner ends-->
@include('flash::message')
<!--about us-->

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-8">
            <h5>Feedback Form Contact with us</h5>
            <p>If you’d like a free consultation, please start by completing the form:</p>

            <div class="row card" >
                <div class="col-lg-12 card" >
                    <h4 style="background-color:#277F53; color:white;" class="pt-2 pb-2 pl-2">Contact Us</h4>

                    <div class="container">
                        {{Form::open(['method'=>"post","route"=>"contact.store"])}}
                            <div class="form-row">
                                <div class="col">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control form-control-sm" placeholder="" required="">
                                </div>
                                <div class="col">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control form-control-sm" placeholder="" required="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label>Tel:</label>
                                    <input type="number" name="phone" class="form-control form-control-sm" placeholder="" required="">
                                </div>
                                <div class="col">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control form-control-sm" placeholder="" required="" value="Nepal" readonly="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <label>Message:</label><br>
                                    <textarea placeholder="message" name="message" class="form-control form-control-sm" required=""></textarea>
                                </div>

                            </div>
                            <div class="row mt-5">
                                <div class="col text-center">
                                    <button class="btn btn-success btn-sm" type="submit">submit</button>
                                </div>
                            </div>

                       {{Form::close()}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 p-5">
            <h5>Contact With US</h5>
            <hr>
            <p>We will contact you within 24 hours</p>

            <div class="container">
                <span></span><i class="fa fa-phone"></i>{{$footer->phone}}</a></span> <br>
                <span class="mt-3"></span><i class="fa fa-envelope"> &nbsp </i>{{$footer->email}}</span> <br>
                <span class="mt-3"></span><i class="fa fa-map-marker"></i>  {{$footer->address}}</a></span> <br>
            </div>
        </div>
    </div>
</div>

 @include('front.includes.footer')