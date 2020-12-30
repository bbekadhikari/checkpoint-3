@include('front.includes.header')
@include('front.includes.nav')
<div class="container-fluid" style="background-image:url('{{asset('front/images/12.jpg')}}'); background-repeat: no-repeat;background-position: center;background-size: cover; ">
    <div class="container text-center">
        <h2 class="pt-5 pb-5"><b>{{$page->heading}}</b> </h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <p>{!! $page->description !!}</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="row mt-2">
                <div class="col ">
                    <div class="text-center card">
                        <h5 style="font-weight:bold; background-color:lightskyblue" class="pt-2 pb-2">Services</h5>

                        @foreach($services as $service)
                            <a href="{{route('page.service',$service->id)}}" style="color:black; font-weight:bold" class="btn btn-info">{{$service->heading}}</a><br>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <div class="text-center card">
                        <h5 style="font-weight:bold; background-color:lightskyblue" class="pt-2 pb-2">Projects</h5>

                        @foreach($projects as $project)
                            <a href="{{route('page.project',$project->id)}}" style="color:black; font-weight:bold" class="btn btn-info">{{$project->heading}}</a><br>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <div class="text-center card">
                        <h5 style="font-weight:bold; background-color:lightskyblue" class="pt-2 pb-2">Research</h5>

                        @foreach($researches as $research)
                            <a href="{{route('page.research',$research->id)}}" style="color:black; font-weight:bold" class="btn btn-info">{{$research->heading}}</a><br>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('front.includes.footer')
@include('front.includes.js')