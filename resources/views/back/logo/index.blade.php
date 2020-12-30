@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

@include('flash::message')
<div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto">
        {{Form::open()}}
        <div class="card">
            <img src="" height="150">
            <input type="file" name="image" class="form-control">
            <button class="btn btn-primary rounded-0" type="submit">Submit</button>
        </div>

        {{Form::close()}}
    </div>
    </div>
</div>
@include('back.includes.footer')