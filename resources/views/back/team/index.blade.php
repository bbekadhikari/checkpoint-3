@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        @include('back.includes.message')
        @include('flash::message')
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="card-title pl-2">Add Testimonials</h3>
                        {{Form::open(['method'=>'post','route'=>'team.store','enctype'=>'multipart/form-data'])}}
                  <div class="card-body">
                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" class="form-control form-control-sm" name="banner" required>
                      </div>
                      <div class="form-group">
                          <label>Designation</label>
                          <input type="text" class="form-control form-control-sm" name="designation" required>
                      </div>
                      <div class="form-group">
                          <label>Description</label>
                          <textarea type="text" class="form-control form-control-sm ckeditor" name="description" required></textarea>
                      </div>
                      <div class="form-group">
                          <label>Banner Image</label>
                          <input type="file" class="form-group" name="image">
                      </div>
                      <button class="btn btn-sm btn-success" type="submit">save</button>
                  </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($teams as $teams)
                                  <tr>
                                      <th>{{$teams->heading}}</th>
                                      <th><textarea>{{$teams->description}}</textarea></th>
                                      <th><img src="{{asset('uploads/'.$teams->image)}}" height="50" width="80"></th>
                                      <th>
                                          <a href="{{route('teams.edit',$teams->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                          <a href="{{route('teams.delete',$teams->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                      </th>
                                  </tr>
                                  @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>






@include('back.includes.footer')