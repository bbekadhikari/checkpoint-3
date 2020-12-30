@include('front.includes.header')

@include('front.includes.topnav')

@include('flash::message')


<div class="container " style="margin-top:100px; margin-bottom: 100px;">
    <div class="row ">
        <div class="col-lg-6 sol-md-6 col-sm-12 mx-auto card text-center pb-5 ">
            <h2 class="text-center" style="color: purple">login</h2>
            {{Form::open(['method'=>'post','action'=>'Auth\LoginController@login'])}}
            <div class="form-group">
                <label> Email <span style="color: red">*</span></label>
                <input type="text" name="email" class="form-control" required placeholder="email">
            </div>
            <div class="form-group">
                <label>Passwords <span style="color: red">*</span></label>
                <input type="password" name="password" class="form-control" required placeholder="password">
            </div>
            <div class="login_submit">
                <a href="#" style="margin-right: 200px;">Lost your password?</a>
                <label for="remember">
                    <input id="remember" type="checkbox" name="remember" value="yes">
                    Remember me
                </label> <br>
                <button type="submit" class="btn btn-sm btn-info btncolor">login</button>

            </div>
            {{Form::close()}}
        </div>
    </div>
</div>



@include('front.includes.footer')
)