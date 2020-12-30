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
                        <h3 class="card-title pl-2">Add SubCategory</h3>
                        {{Form::open(['method'=>'post','route'=>'productsubcategory.store'])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Choose Category</label>
                                <select class="form-control form-control-sm" name="cat_id">
                                    <option>Small select</option>
                                    @foreach($categories as $category)
                                    <option>{{$category->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Add Subcategory</label>
                                <input type="text" class="form-control form-control-sm get-slug" name="name">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control form-control-sm" id="slug" name="slug">
                            </div>
                            <button type="submit" class="btn btn-info btn-sm">Save</button>
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
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($subcats as $sub)
                                  <tr>
                                      <td>{{$sub->productcategory_name}}</td>
                                      <td>{{$sub->name}}</td>
                                      <td>{{$sub->slug}}</td>
                                      <td>
                                          <a href="{{route('productsubcat.edit',$sub->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                          <a href="{{route('productsubcat.delete',$sub->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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