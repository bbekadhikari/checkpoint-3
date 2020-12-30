@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="container">
   @include('flash::message')
    <!-- Modal -->
       <div class="modal-dialog" role="document">
            {{Form::open(['method'=>'patch','route'=>['category.update',$category->id]])}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="name" class="form-control" required value="{{$category->name}}">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" required value="{{$category->slug}}">
                            </div>

                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        {{Form::close()}}
    </div>





</div>



@include('back.includes.footer')