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
                        <h3 class="card-title pl-2">Edit Pages</h3>
                        {{Form::open(['method'=>'patch','route'=>['page.update',$page->id],'enctype'=>'multipart/form-data'])}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Category</label>
                               <input type="text" class="form-control form-control-sm" name="category" value="{{$page->category}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Sub Category (IF ANY)</label>

                                    <input type="text" class="form-control form-control-sm" name="subcat" value="{{$page->subcat}}" readonly>

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-group ckeditor" name="description" required>{{$page->page}}</textarea>
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