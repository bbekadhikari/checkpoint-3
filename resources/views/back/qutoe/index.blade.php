@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

@include('flash::message')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <h3 class="text-center">...........................Qutoe Messages...........................</h3>
            <hr>
            <div class="row mt-5">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered table-responsive-sm table-responsive" id="sampleTable">
                                <thead>
                                <tr>
                                    <th>s.n</th>
                                    <th>Product Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($qutoes as $qutoe)
                                    <tr>
                                        <th>{{$i++}}</th>
                                        <th>{{$qutoe->product_name}}</th>
                                        <th>{{$qutoe->name}}</th>
                                        <th>{{$qutoe->email}}</th>
                                        <th>{{$qutoe->city}}</th>
                                        <th>{{$qutoe->country}}</th>
                                        <th>{{$qutoe->phone_number}}</th>
                                        <th><textarea>{{$qutoe->message}}</textarea></th>
                                        <th>{{$qutoe->status}}</th>
                                        <th>
                                            <a href="{{route('qutoe.seen',[$qutoe->id,'seen'])}}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{route('qutoe.delete',$qutoe->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                        {{----}}
                                        </th>
                                    </tr>
                                    </thead>
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