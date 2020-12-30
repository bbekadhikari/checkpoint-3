@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="container">
<div class="row container ">
  <div class="col-lg-12 card">
    <div class="p-2">
      <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success rounded-0">Add Univercitities</button>

       <h3 class="text-center">Top Univercities</h3>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Univercities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        
                       {{Form::open(['method'=>'post','route'=>'research.store','enctype'=>'multipart/form-data'])}}
                  <div class="card-body">
                      <div class="form-group">
                          <label>Heading</label>
                          <input type="text" class="form-control form-control-sm" name="banner" required>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</div>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        @include('back.includes.message')
        @include('flash::message')
        <div class="container">
           


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
                              @foreach($researches as $research)
                                  <tr>
                                      <th>{{$research->heading}}</th>
                                      <th><textarea>{{$research->description}}</textarea></th>
                                      <th><img src="{{asset('public/uploads/'.$research->image)}}" height="50" width="80"></th>
                                      <th>
                                          <a href="{{route('research.edit',$research->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                          <a href="{{route('research.delete',$research->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

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