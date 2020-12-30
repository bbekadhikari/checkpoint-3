@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

@include('flash::message')
<div class="container">
    <a href="{{route('qutoe')}}" class="btn btn-warning btn-sm">Go Back To Message Page</a>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <h3 class="text-center">..........................Qutoe Messages...........................</h3>
            <hr>
          <div class="row">
              <div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
                  <h1 class="text-center">{{$qutoe->product_name}}</h1>
                  <h2>Name: {{$qutoe->name}}</h2>
                  <h2>Phone: {{$qutoe->phone_number}}</h2>
                  <h2>Email: {{$qutoe->email}}</h2>
                  <h2>City: {{$qutoe->city}}</h2>
                  <h2>Country: {{$qutoe->country}}</h2>
                  <h2>phone: {{$qutoe->phone_number}}</h2>
                  <h2>Message: {{$qutoe->message}}</h2>
              </div>
          </div>
        </div>
    </div>
</div>
@include('back.includes.footer')