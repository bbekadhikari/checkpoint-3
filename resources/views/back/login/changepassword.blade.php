@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')



    @include('flash::message')



    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 mx-auto mt-5">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Change Password</h4>
                </div>
                <div class="card-body">



                    {{Form::open(['route'=>'admin.updatepassword','method'=>'patch'])}}

                    <div class="form-group">
                        {{Form::label('old_password','Old Password')}}
                        {{Form::password('old_password',['class'=>'form-control','required'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('password','New Password')}}
                        {{Form::password('password',['class'=>'form-control','required'])}}
                    </div>

                    <div class="form-group">


                        {{Form::label('password_confirmation','Confirm Password')}}
                        {{Form::password('password_confirmation',['class'=>'form-control','required'])}}
                    </div>



                    <div class="form-group">
                        <input type="submit" value="Update Password" class="btn btn-primary">
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>




<!-- Essential javascripts for application to work-->
@include('back.includes.footer')