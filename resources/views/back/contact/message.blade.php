@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

@include('flash::message')
<div class="container">
    <a href="{{route('message')}}" class="btn btn-warning btn-sm">Go Back To Message Page</a>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <h3 class="text-center">...........................Messages...........................</h3>
            <hr>
          <div class="row">
              <div class="col-lg-10 col-md-10 col-sm-12 mx-auto">
                  <h2>Name: {{$contact->name}}</h2>
                  <h2>Phone: {{$contact->Contact}}</h2>
                  <h2>Email: {{$contact->Email}}</h2>
                  <h2>Message: {{$contact->message}}</h2>
              </div>
          </div>
        </div>
    </div>
</div>
@include('back.includes.footer')