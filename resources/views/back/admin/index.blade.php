@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')


    @include('flash::message')
    <a class="btn btn-primary btn-sm" href="{{route('admin.addadmin')}}">Add Admin</a>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12">

            @if(!$admins->isEmpty())
                <table id="myTable" class="display table table-responsive-sm">
                    <thead class="thead-dark" >
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach($admins as $admin)
                        <tr>
                            @if($admin->id != 1)
                                <td>{{$i++}}</td>

                                <td>{{$admin->name}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->type}}</td>
                                <td>{{$admin->created_at}}</td>
                                <td>{{$admin->updated_at}}</td>
                                <td>
                                    {{Form::open(['method'=>'delete','route'=>['admins.destroy',$admin->id]])}}
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                    {{Form::close()}}
                                </td>
                            @endif

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @else
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <h5>No recoard added</h5>
                    </div>
                </div>
            @endif

        </div>
    </div>

<!-- Essential javascripts for application to work-->

@include('back.includes.footer')