
<div style="border: 1px solid #1a8cff">
    <h3 class="text-center"><b>Comment</b></h3>
</div>
@foreach($coments as $coment)

    <div class="row no-gutters">
        <div class="col-md-2 mt-4">
            <img src="{{asset('images/itimage.png')}}" class="card-img" alt="..." style="height:50px; width: 70px;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <label><b>{{$coment->name}}</b></label><br>
                <label>{{$coment->comment}}</label>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-lg-12"></div>
        </div>
    </div>
    <div>

    </div>
@endforeach


    <div style="border: 1px solid #1a8cff">

    <div style="background-color:#1a8cff">
        <h3 class="text-center"><b>Leave Your Comment</b></h3>
    </div>
        <div class="pl-1 pr-2">
        {{Form::open(['method'=>'post','route'=>'comment.store'])}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control form-group-sm" name="name">
        </div>
            <input type="hidden" name="blog_id" value="{{$blog->id}}">
        <div class="form-group">
            <label>Comment</label>
            <textarea type="text" class="form-control form-group-sm" name="comment"></textarea>
        </div>

    <div style="margin-right:15px;">
        <button class="btn btn-info btn-sm btn-block" type="submit">Share</button>
    </div>

        {{Form::close()}}

        </div>
    </div>