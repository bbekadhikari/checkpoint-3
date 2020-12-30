<div class="container-fluid">
<div class="row">
	<div class="col-lg-12 card mt-3 mb-3">
		<div class="">
			<h5 style="font-weight:bold;">Top Universities</h5>
			<hr>
			<ul>
				@foreach($universities as $research)
				<li class="mt-2"><a href="{{route('front.university',$research->id)}}" class="btn btn-link btn-block rounded-0" style="text-decoration: none; background-color:#007bff !important; border-left: 5px solid red;">
					<img src="{{asset('uploads/'.$research->image)}}" style="height: 20px;">
					{{$research->heading}}
				</a></li>
				@endforeach
			</ul>
             <hr>
		
			<h5 style="font-weight:bold;">Study Destination</h5>
			<hr>
			<ul>
				@foreach($studyabroad as $research)
				<li class="mt-2"><a href="{{route('front.abroad',$research->id)}}" class="btn btn-link btn-block rounded-0" style="text-decoration: none; background-color:#007bff !important; border-left: 5px solid red;">
					<img src="{{asset('uploads/'.$research->image)}}" style="height: 20px;">
					{{$research->heading}}
				</a></li>
				@endforeach
			</ul>
	</div>
</div>
</div>
</div>