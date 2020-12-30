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
                        <h3 class="card-title pl-2">Add Video</h3>
                        {{Form::open(['method'=>'post','route'=>'video.store','enctype'=>'multipart/form-data'])}}
                  <div class="card-body">
                      <div class="form-group">
                          <label>Add Video Link</label>
                          <input type="text" class="form-control form-control-sm" name="video" required>
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
                                <th>Video Link</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($videos as $video)
                                  <tr>
                                      <th>
                                          <iframe width="300" height="100" src="{{$video->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                          </th>

                                      <th>

                                          <a href="{{route('video.delete',$video->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

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