@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')


<div class="container">
    @include('flash::message')
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 mt-5 mx-auto">
            <div class="card">
                <div class="card-header d-flex align-items-center">

                </div>


                <div class="card-body">



                    {{Form::open(['method'=>'post','route'=>'gallerystore','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <label>Images</label><br>
                        <input type="file" name="image[]"  accept="image/*" multiple>
                    </div>



                    <div class="form-group">
                        <input type="submit" value="Upload Image" name='submit'class="btn btn-primary">
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>

    </div>
    <hr>

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">

            @if(!$gallery->isEmpty())


                <table id="myTable" class="display table table-responsive-sm">
                    <thead class="thead-dark" >
                    <tr>


                        <th>Image</th>
                        <th>Updated At</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($gallery as $gall)
                        <tr>


                            <td><img src="{{asset('images/'.$gall->image)}}" height="50"></td>
                            <td>{{$gall->created_at}}</td>
                            <td>{{$gall->updated_at}}</td>
                            <td>


                                <a class="btn btn-danger btn-sm" href="{{route('gallerydestroy',$gall->id)}}"><i class="fa fa-trash"></i> </a>


                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            @else
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <h5>No Recoard Added</h5>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

</div>





@include('back.includes.footer')