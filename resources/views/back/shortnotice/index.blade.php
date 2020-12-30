@include('back.includes.header')
<!-- Navbar-->
@include('back.includes.topnav')
<!-- Sidebar menu-->
@include('back.includes.side')

<div class="container">
    @include('flash::message')
            
             <div class="row">
                 <div class="col-lg-8 col-md-8 mx-auto">
                     {{Form::open(['method'=>'patch','route'=>['notice.update',$shortnotice->id]])}}
                     <div class="form-group">
                         <label>Heading1</label>
                         <input type="text" name="heading1" class="form-control" value="{{$shortnotice->heading1}}" required="">
                     </div>
                     <div class="form-group">
                         <label>description1</label>
                         <textarea class="form-control" required name="description1">{{$shortnotice->description1}}</textarea>
                     </div>
                      <div class="form-group">
                         <label>Heading2</label>
                         <input type="text" name="heading2" class="form-control" value="{{$shortnotice->heading2}}" required="">
                     </div>
                     <div class="form-group">
                         <label>description2</label>
                         <textarea class="form-control" name="description2" required >{{$shortnotice->description2}}</textarea>
                     </div>
                      <div class="form-group">
                         <label>Heading3</label>
                         <input type="text" name="heading3" class="form-control" value="{{$shortnotice->heading3}}" required="">
                     </div>
                     <div class="form-group">
                         <label>description3</label>
                         <textarea class="form-control" name="description3" >{{$shortnotice->description3}}</textarea>
                     </div>
                      <div class="form-group">
                         <label>Heading4</label>
                         <input type="text" name="heading4" class="form-control" value="{{$shortnotice->heading4}}" required="">
                     </div>
                     <div class="form-group">
                         <label>description4</label>
                         <textarea class="form-control" name="description4"required >{{$shortnotice->description4}}</textarea>
                     </div>
                      <div class="form-group">
                         <label>Opening Hour</label>
                         <textarea class="form-control ckeditor" name="status"required >{{$shortnotice->status}}</textarea>
                     </div>
                      
                      <button class="btn btn-success btn-sm rounded-0" type="submit">submit</button>
                     {{Form::close()}}
                 </div>
             </div>

</div>



@include('back.includes.footer')