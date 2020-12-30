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
                        <h3 class="card-title pl-2">Add Pages</h3>
                        {{Form::open(['method'=>'post','route'=>'page.store','enctype'=>'multipart/form-data'])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control form-control-sm" name="category" required>
                                    <option>Small select</option>
                                    @foreach($categories as $category)
                                        <option>{{$category->name}}</option>
                                        @endforeach
                                </select>
                        </div>
                            <div class="form-group">
                                <label>Sub Category (IF ANY)</label>
                                <select class="form-control form-control-sm" name="subcat">
                                    <option>Small select</option>
                                    @foreach($subcats as $sub)
                                        <option>{{$sub->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-group ckeditor" name="description" required></textarea>
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
                                <th>S.N</th>
                                <th>Category</th>
                                <th>Subcat</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                           @php($i=1)
                            @foreach($pages as $page)
                               <tr>
                                   <td>{{$i++}}</td>
                                   <td>{{$page->category}}</td>
                                   <td>{{$page->subcat}}</td>
                                   <td><textarea>{{$page->page}}</textarea></td>
                                   <td>
                                       <a href="{{route('page.edit',$page->id)}}" class="btn btn-success btn-sm">Edit</a>
                                       <a href="{{route('page.delete',$page->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                   </td>
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