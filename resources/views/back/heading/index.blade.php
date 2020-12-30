@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')
@include('back.includes.message')
@include('flash::message')
<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="card">
            <h3 class="card-title ml-5">Add Headings</h3>

        <div class="card-body">
            {{Form::open(['method'=>'post','route'=>'heading.store'])}}
            <div class="form-group">
               <label>Our Services</label>
                <textarea type="text" class="form-control form-control-sm" name="service"></textarea>
            </div>
            <div class="form-group">
                <label>Project Portfollio</label>
                <textarea type="text" class="form-control form-control-sm" name="portfollio"></textarea>
            </div>
            <div class="form-group">
                <label>Research</label>
                <textarea type="email" class="form-control form-control-sm" name="research"></textarea>
            </div>
            <div class="form-group">
                <label>Our Team</label>
                <textarea type="text" class="form-control form-control-sm" name="team"></textarea>
            </div>
            <div class="form-group">
                <label>Latest Blog</label>
                <textarea type="text" class="form-control form-control-sm" name="blog"></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-sm">Save</button>
        {{Form::close()}}
        </div>

    </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="tile">
            <div class="tile-body">
                <table class="table table-hover table-bordered table-sm"  id="sampleTable">
                    <thead>
                    <tr>
                        <th>service</th>
                        <th>portfollio</th>
                        <th>research</th>
                        <th>team</th>
                        <th>blog</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($headings as $heading)
                        <tr>
                            <th><textarea>{{$heading->service}}</textarea></th>
                            <th><textarea>{{$heading->portfollio}}</textarea></th>
                            <th><textarea>{{$heading->research}}</textarea></th>
                            <th><textarea>{{$heading->ourteam}}</textarea></th>
                            <th><textarea>{{$heading->blog}}</textarea></th>

                            <td>
                                <a href="{{route('heading.edit',$heading->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('heading.delete',$heading->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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