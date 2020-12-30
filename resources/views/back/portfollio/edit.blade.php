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
                        <h3 class="card-title pl-2">Update</h3>

                        {{Form::open(['method'=>'patch','route'=>['portfollio.update',$portfollio->id],'enctype'=>'multipart/form-data'])}}
                        <div class="card-body">

                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" name="banner" class="form-control"  value="{{$portfollio->heading}}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" name="description" class="form-control ckeditor">
                                    {{$portfollio->description}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <img src="{{asset('uploads/'.$portfollio->image)}}" height="50">
                            </div>
                            <div class="form-group">
                                <label>image</label><br>
                                <input type="file" name="image"  >
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="oldfile" value="{{$portfollio->image}}" >
                            </div>

                            <button class="btn btn-sm btn-success" type="submit">save</button>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>




    </div>
</div>






@include('back.includes.footer')