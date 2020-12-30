@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="container">
    @include('flash::message')
    <h3 class="text-center">List Of Product Categories</h3>
    <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModal">
        Add Product Category
    </button>


    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>slug</th>
                            <th>Status</th>
                            <th>Change Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->status}}</td>
                            <td>
                                 {{Form::open(['method'=>'patch','route'=>['status.category',$category->id]])}}

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                    <span><select class="form-control" id="exampleFormControlSelect1" name="status">
                                        <option value="enable">enable</option>
                                        <option value="disable">disable</option>
                                    </select></span>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-sm btn-warning" type="submit">update</button>
                                    </div>
                                </div>

                                {{Form::close()}}

                            </td>
                            <td>
                                <a href="{{route('productcat.edit',$category->id)}}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{route('productcat.delete',$category->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                      @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>








    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            {{Form::open(['method'=>'post','route'=>'productcategory.store'])}}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="name" class="form-control get-slug" required>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" id="slug" name="slug" class="form-control" required>
                            </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        {{Form::close()}}
    </div>





</div>



@include('back.includes.footer')