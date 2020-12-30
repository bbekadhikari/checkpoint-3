@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
   @include('flash::message')
         <span style="font-size:30px; font-weight: bolder;">Edit Products </span>

            <hr>
            <div class="row card" style="border-top:5px solid green ">
                <div class="col-lg-12 pt-5 pb-5 pr-5 pl-5">

                    {{Form::open(['method'=>'patch','route'=>['item.update',$item->id],'enctype'=>'multipart/form-data'])}}
                        <div class="form-row">
                            <div class="col">
                                <label>Select Category</label>
                                <select class="form-control form-control-sm" name="category">
                                    <option>{{$item->productcategory_name}}</option>
                                    @foreach($productcategories as $procat)
                                    <option>{{$procat->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label>Select Subcategory</label>
                                <select class="form-control form-control-sm" name="subcategory">
                                    <option value="{{$productsubcat->id}}">{{$productsubcat->name}}</option>
                                    @foreach($productsubcats as $procat)
                                        <option value="{{$procat->id}}">{{$procat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>Product Name</label>
                                <input type="text" class="form-control form-control-sm" name="product" required  placeholder="Product Name" value="{{$item->name}}">
                            </div>
                            <div class="col">
                                <label>Product Code</label>
                                <input type="text" class="form-control form-control-sm" name="product_code" required  placeholder="Product Code" value="{{$item->product_code}}">
                            </div>

                        </div>
                        <div class="form-row">
                                <div class="col">
                                    <label>Features</label>
                                    <textarea type="text" class="form-control form-control-sm ckeditor" name="feature" required>{{$item->features}}</textarea>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>Description</label>
                                <textarea type="text" class="form-control form-control-sm ckeditor" name="description" required>{{$item->description}}</textarea>
                            </div>
                        </div>
                    <div class="form-group">
                        <img src="{{asset('uploads/'.$item->image)}}" height="50">
                        <input type="hidden" class="form-control" name="oldimage" value="{{$item->image}}">
                    </div>
                    <div class="form-group">
                        <label>Upload png images (512*512 pixel)</label>
                        <input type="file" name="image"  class="form-control" >

                    </div>

                        <button class="btn btn-success btn-sm float-right" type="submit">Submit</button>

                    </form>

                </div>
            </div>



        </div>
    </div>
</div>






@include('back.includes.footer')