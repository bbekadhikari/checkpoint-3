@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

@include('flash::message')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <h3 class="text-center">...........................Comments...........................</h3>
            <hr>
            <div class="row mt-5">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                <tr>
                                    <th>s.n</th>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($coments as $contact)
                                    <tr>
                                        <th>{{$i++}}</th>
                                        <th>{{$contact->name}}</th>
                                        <th><textarea rows="5" cols="100">{{$contact->comment}}</textarea></th>
                                        <th>
                                            <a href="{{route('coment.delete',$contact->id)}}"class="btn btn-danger"><i class="fa fa-trash"></i></a>
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