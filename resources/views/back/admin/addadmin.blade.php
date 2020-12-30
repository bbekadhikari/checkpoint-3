@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

    @include('flash::message')

    <hr>

    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 mx-auto mt-5">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Add Admins</h4>
                </div>
                <div class="card-body">



                    {{Form::open(['method'=>'post','route'=>'admins.store','enctype'=>'multipart/form-data'])}}

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <label>Choose Admin Type:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="admin" checked>
                        <label class="form-check-label" for="exampleRadios1">
                           Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="editor">
                        <label class="form-check-label" for="exampleRadios2">
                         Editor
                        </label>
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Add admins" class="btn btn-primary">
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>



<!-- Essential javascripts for application to work-->
@include('back.includes.footer')