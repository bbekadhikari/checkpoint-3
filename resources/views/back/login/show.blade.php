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
    <!-- <section class="material-half-bg">
      <div class="cover"></div>
    </section> -->
    @include('flash::message')
    <section class="login-content">
      <div class="logo">
        <h1>{{config('app.name')}}</h1>
      </div>

      <div class="login-box">
        {{Form::open(['class'=>'login-form','route'=>'admin.logincheck','method'=>'post'])}}

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" name="email" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
<button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          <!-- <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal" class="float-right">Forgot password?</button> -->
          </div>
          <div class="form-group btn-container">
            
          </div>
        {{Form::close()}}
        
      </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Password Recover</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{Form::open(['method'=>'post','route'=>'email.verify'])}}
                        <label>Enter E-mail</label>
                        <input type="email" class="form-control" name="email" required>
                        <br>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        {{Form::close()}}
                    </div>

                </div>
            </div>
        </div>

    </section>
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