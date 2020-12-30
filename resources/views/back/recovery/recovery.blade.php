<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('back/style/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - {{config('app.name')}}</title>
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
@include('flash::message')

    <div class="row ">
        <div class="col-lg-6 sol-md-6 col-sm-12 mx-auto card text-center pb-5 ">



            <h2 class="text-center" style="color: purple">Password Recover</h2>
            {{Form::open(['method'=>'post','route'=>'update.recover'])}}
            <div class="form-group">
                <label> Enter Password <span style="color: red">*</span></label>
                <input type="password" name="password" class="form-control" required placeholder="password">
                <input type="hidden" name="id" class="form-control" required value="{{$id}}">
            </div>
            <button class="btn btn-danger btn-sm" type="submit">save</button>
            {{Form::close()}}
        </div>
    </div>

<!-- Essential javascripts for application to work-->
<script src="{{asset('back/stylejs/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('back/stylejs/popper.min.js')}}"></script>
<script src="{{asset('back/stylejs/bootstrap.min.js')}}"></script>
<script src="{{asset('back/stylejs/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('back/stylejs/plugins/pace.min.js')}}"></script>
<script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });
</script>
</body>
</html>