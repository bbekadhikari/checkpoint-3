@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')
@include('back.includes.message')
@include('flash::message')
<div class="row">

    <div class="col-lg-8 col-sm-12 col-md-8">
        <div class="card">
            <h3 class="card-title ml-5">Add Company Details</h3>

        <div class="card-body">
            {{Form::open(['method'=>'post','route'=>'footer.store'])}}
            <div class="form-group">
               <label>Mobile</label>
                <input type="text" class="form-control form-control-sm" name="mobile">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control form-control-sm" name="phone">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control form-control-sm" name="email">
            </div>
            <div class="form-group">
                <label>Facebook Link</label>
                <input type="text" class="form-control form-control-sm" name="facebook">
            </div>
            <div class="form-group">
                <label>Twitter Link</label>
                <input type="text" class="form-control form-control-sm" name="twitter">
            </div>
            <div class="form-group">
                <label>Insta</label>
                <input type="text" class="form-control form-control-sm" name="insta">
            </div>
            <div class="form-group">
                <label>Youtube</label>
                <input type="text" class="form-control form-control-sm" name="youtube">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea type="text" class="form-control form-control-sm" name="address"></textarea>
            </div>
            <div class="form-group">
                <label>Short Description of company for footer</label>
                <textarea name="phone" class="form-control"></textarea> 
            </div>
            <button type="submit" class="btn btn-success btn-sm">Save</button>
        {{Form::close()}}
        </div>

    </div>
    </div>
</div>

<div class="row mt-5">
    <
    <div class="col-lg-8 col-sm-12 col-md-8">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>mobile</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>facebook</th>
                        <th>twitter</th>
                        <th>insta</th>
                        <th>youtube</th>
                        <th>address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($footers as $footer)
                        <tr>
                            <th>{{$footer->mobile}}</th>
                            <th>{{$footer->phone}}</th>
                            <th>{{$footer->email}}</th>
                            <th>{{$footer->facebook}}</th>
                            <th>{{$footer->twitter}}</th>
                            <th>{{$footer->insta}}</th>
                            <th>{{$footer->youtube}}</th>
                            <th><textarea>{{$footer->address}}</textarea></th>
                            <td>
                                <a href="{{route('footer.edit',$footer->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('footer.delete',$footer->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('back.includes.footer')