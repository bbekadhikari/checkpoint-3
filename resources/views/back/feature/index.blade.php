
@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

@include('flash::message')
    <div class="row">
        <div class="col-md-6 mx-auto"><h3 class="text-center">Logo</h3></div>
    </div>

    <div class="row">

        <div class="col-lg-6 col-md-6 mx-auto card">

            {{Form::open(['method'=>'post','route'=>'featured.store','enctype'=>'multipart/form-data'])}}

            <div class="form-group">
                <label>Upload Feature Image(402*167)</label><br>
                <input type="file" name="image" class="form-control-file" accept="image/*" multiple required>
            </div>
            <button class="btn btn-info btn-sm">Upload</button>


            {{Form::close()}}
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
            <div class="tile">
                <div class="tile-body">

                    <table class="table table-sm table-hover table-bordered" id="sampleTable">

                        <thead>
                        <tr>
                            

                            <th>Images</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($featured as $slider)
                            <tr>
                                

                                <td><img src="{{asset('images/'.$slider->image)}}" height="50"></td>

                                <td>

                                    <a href="{{route('featured.delete',$slider->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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