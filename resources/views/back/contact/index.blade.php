@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

@include('flash::message')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">
            <h3 class="text-center">...........................Messages...........................</h3>
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
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($contacts as $contact)
                                    <tr>
                                        <th>{{$i++}}</th>
                                        <th>{{$contact->name}}</th>
                                        <th>{{$contact->Contact}}</th>
                                        <th>{{$contact->email}}</th>
                                        <th><textarea>{{$contact->message}}</textarea></th>
                                        <th>{{$contact->status}}</th>
                                        <th>
                                            <a href="{{route('contact.seen',[$contact->id,'seen'])}}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{route('contact.delete',$contact->id)}}" class="btn btn-danger btn-sm">Delete</a>
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