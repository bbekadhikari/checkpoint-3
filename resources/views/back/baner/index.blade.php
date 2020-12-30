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
                        <h3 class="card-title pl-2">Add Banner</h3>
                        {{Form::open(['method'=>'post','route'=>'banner.store','enctype'=>'multipart/form-data'])}}
                  <div class="card-body">
                      <div class="form-group">
                          <label>Heading</label>
                          <input type="text" class="form-control form-control-sm" name="banner" required>
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
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($banners as $banner)
                                <tr>
                                    <th>{{$banner->heading}}</th>
                                    <th><img src="{{asset('uploads/'.$banner->image)}}" height="50" width="80"></th>
                                    <th>
                                        <a href="{{route('banner.edit',$banner->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="{{route('banner.delete',$banner->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

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