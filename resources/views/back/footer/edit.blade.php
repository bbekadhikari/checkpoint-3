@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')
@include('back.includes.message')

<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="card">
            <h3 class="card-title ml-5">Edit Company Details</h3>

            <div class="card-body">
                {{Form::open(['method'=>'patch','route'=>['footer.update',$footer->id]])}}
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control form-control-sm" name="mobile" value="{{$footer->mobile}}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control form-control-sm" name="phone" value="{{$footer->phone}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control form-control-sm" name="email" value="{{$footer->email}}">
                </div>
                <div class="form-group">
                    <label>Facebook Link</label>
                    <input type="text" class="form-control form-control-sm" name="facebook"value="{{$footer->facebook}}">
                </div>
                <div class="form-group">
                    <label>Twitter Link</label>
                    <input type="text" class="form-control form-control-sm" name="twitter" value="{{$footer->twitter}}">
                </div>
                <div class="form-group">
                    <label>Insta</label>
                    <input type="text" class="form-control form-control-sm" name="insta" value="{{$footer->insta}}">
                </div>
                <div class="form-group">
                    <label>Youtube</label>
                    <input type="text" class="form-control form-control-sm" name="youtube" value="{{$footer->youtube}}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea type="text" class="form-control form-control-sm " name="address">{{$footer->address}}</textarea>
                </div>
                <div class="form-group">
                <label>Short Description of company for footer</label>
                <textarea name="phone" class="form-control">{{$footer->phone}}</textarea> 
            </div>
                <button type="submit" class="btn btn-success btn-sm">Save</button>
                {{Form::close()}}
            </div>

        </div>
    </div>
</div>


@include('back.includes.footer')