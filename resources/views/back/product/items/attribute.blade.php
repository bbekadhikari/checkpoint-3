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

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Product_id</th>
                            <th>Attribute Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($proimages as $pro)
                            <tr>
                                <td>{{$pro->product_id}}</td>
                                <td><img src="{{asset('uploads/'.$pro->image)}}" height="60"></td>
                                <td><a href="{{route('attribute.delete',$pro->id)}}">Delete</a> </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>





                    <table class="teble table-responsive-sm table-bordered">


                    </table>
                </div>
            </div>



        </div>
    </div>
</div>






@include('back.includes.footer')