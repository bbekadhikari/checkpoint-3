@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

         <span style="font-size:30px; font-weight: bolder;"> Products </span>
            <span class="float-right"><a href="{{route('items.create')}}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i>&nbsp;Add Product</a></span>
            <hr>
            <div class="row mt-5">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered table-sm table-responsive-sm " id="sampleTable">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Product_category_name</th>
                                    <th>Uploaded_at</th>
                                    <th>Description</th>
                                    <th>Features</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->name}}</td>
                                        <td><img src="{{asset('public/uploads/'.$product->image)}}" height="30"></td>
                                        <td>{{$product->productcategory_name}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td><textarea>{!! $product->description !!}</textarea></td>
                                        <td><textarea>{!! $product->features !!}</textarea></td>
                                        <td>
                                            <a href="#"  data-toggle="modal" data-target="#staticBackdrop" ><i class="fa fa-plus"></i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Add more images of this product</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{Form::open(["method"=>"post","route"=>"image.store","enctype"=>"multipart/form-data"])}}
                                                            <label>Upload png images (512*512 pixel)</label>
                                                            <input type="file" name="image[]" class="form-control-file" multiple>
                                                            <input type="hidden" name="productid" class="form-control-file" value="{{$product->id}}">
                                                            <button type="submit" class="btn btn-info btn-sm float-right">Submit</button>
                                                            {{Form::close()}}
                                                        </div>
                                                        <div class="modal-footer">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <a href="#" data-toggle="modal" data-target="#view" ><i class="fa fa-eye"></i>

                                                <!-- Button trigger modal -->
                                                {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view">--}}
                                                    {{--Launch demo modal--}}
                                                {{--</button>--}}

                                                <!-- Modal -->
                                                <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">View Product</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               <div class="row">
                                                                   <div class="col-lg-12">
                                                                       <div class="row">
                                                                           <div class="col">
                                                                               <label class="font-weight-bold">Product Name :</label> {{$product->name}}
                                                                           </div>
                                                                           <div class="col">
                                                                               <label class="font-weight-bold">Product Code :</label> {{$product->product_code}}
                                                                           </div>
                                                                       </div>
                                                                       <div class="row">
                                                                           <div class="col">
                                                                               <label class="font-weight-bold">Description :</label>
                                                                               <textarea class="form-control">{!! $product->description !!}</textarea>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row">
                                                                           <div class="col">
                                                                               <label class="font-weight-bold">Features :</label><br>
                                                                               <textarea class="form-control">{!! $product->features !!}</textarea>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row">
                                                                           <div class="col">
                                                                               <label class="font-weight-bold">Thumbnail :</label><br>
                                                                               <img src="{{asset('public/uploads/'.$product->image)}}" height="50">
                                                                           </div>
                                                                       </div>
                                                                       <div class="row">
                                                                           <div class="col">
                                                                               <label class="font-weight-bold">Related Images :</label>
                                                                               @foreach($product->proimage as $image)
                                                                               <img src="{{asset('public/uploads/'.$image->image)}}" height="50">
                                                                                   @endforeach
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            <a href="{{route('item.edit',$product->id)}}" ><i class="fa fa-edit"></i></a>
                                                <a href="{{route('attribute.edit',$product->id)}}"><i >A</i></a>
                                            <a href="{{route('item.delete',$product->id)}}"><i class="fa fa-trash"></i></a>
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



</div>






@include('back.includes.footer')