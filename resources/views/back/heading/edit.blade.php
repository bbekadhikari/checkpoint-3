@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')
@include('back.includes.message')

<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="card">
            <h3 class="card-title ml-5">Edit Headings</h3>

            <div class="card-body">
                {{Form::open(['method'=>'patch','route'=>['heading.update',$heading->id]])}}
                <div class="form-group">
                    <label>Service</label>
                    <textarea type="text" class="form-control form-control-sm" name="service" >{{$heading->service}}</textarea>
                </div>
                <div class="form-group">
                    <label>Portfollio</label>
                    <textarea type="text" class="form-control form-control-sm" name="portfollio" >{{$heading->portfollio}}</textarea>
                </div>
                <div class="form-group">
                    <label>team</label>
                    <textarea type="email" class="form-control form-control-sm" name="team" >{{$heading->ourteam}}</textarea>
                </div>
                <div class="form-group">
                    <label>Research</label>
                    <textarea type="text" class="form-control form-control-sm" name="research">{{$heading->research}}</textarea>
                </div>
                <div class="form-group">
                    <label>Blog</label>
                    <textarea type="text" class="form-control form-control-sm" name="blog" >{{$heading->blog}}</textarea>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Save</button>
                {{Form::close()}}
            </div>

        </div>
    </div>
</div>


@include('back.includes.footer')