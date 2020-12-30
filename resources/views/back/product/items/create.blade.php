@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
   @include('flash::message')
         <span style="font-size:30px; font-weight: bolder;">Add Products </span>

            <hr>
            <div class="row card" style="border-top:5px solid green ">
                <div class="col-lg-12 pt-5 pb-5 pr-5 pl-5">

                    {{Form::open(['method'=>'post','route'=>'item.store','enctype'=>'multipart/form-data'])}}
                        <div class="form-row">
                            <div class="col">
                                <label>Select Category</label>
                                <select class="form-control form-control-sm" name="category">
                                    <option>Small select</option>
                                    @foreach($procats as $procat)
                                    <option>{{$procat->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label>Select Subcategory</label>
                                <select class="form-control form-control-sm" name="subcategory">
                                    <option>Small select</option>
                                    @foreach($prosubcats as $procat)
                                        <option value="{{$procat->id}}">{{$procat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>Product Name</label>
                                <input type="text" class="form-control form-control-sm" name="product" required  placeholder="Product Name">
                            </div>
                            <div class="col">
                                <label>Product Code</label>
                                <input type="text" class="form-control form-control-sm" name="product_code" required  placeholder="Product Code">
                            </div>

                        </div>
                        <div class="form-row">
                                <div class="col">
                                    <label>Features</label>
                                    <textarea type="text" class="form-control form-control-sm ckeditor" name="feature" required></textarea>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label>Description</label>
                                <textarea type="text" class="form-control form-control-sm ckeditor" name="description" required></textarea>
                            </div>
                        </div>
                         <div class="row">
                        <div class="col">
                            <label>Upload Thumbnail Image</label>
                            <input type="file" class=" form-control-file" name="image" >
                        </div>
                         </div>

                        <button class="btn btn-success btn-sm float-right" type="submit">Submit</button>

                    </form>

                </div>
            </div>



        </div>
    </div>
</div>






@include('back.includes.footer')