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
                        <h3 class="card-title pl-2">Update SubCategory</h3>
                        {{Form::open(['method'=>'patch','route'=>['subcategory.update',$subcategory->id]])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Choose Category</label>
                                <select class="form-control form-control-sm" name="cat_id">
                                    @if(!empty($subcategory))
                                    <option>{{$subcategory->cat_name}}</option>
                                    @endif
                                    @foreach($categories as $category)
                                        <option>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Add Subcategory</label>
                                <input type="text" class="form-control form-control-sm get-slug" name="name" value="{{$subcategory->name}}">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control form-control-sm" id="slug" name="slug" value="{{$subcategory->slug}}">
                            </div>
                            <button type="submit" class="btn btn-info btn-sm">Save</button>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>





    </div>
</div>






@include('back.includes.footer')