@include('front.includes.header')


@include('front.includes.topnav')




<div class="container">
    <div class="row ">
        <div class="col-lg-6 sol-md-6 col-sm-12 mx-auto card  pb-5 ">

            <div class="account_form register">
                <h2 class="text-center">Register</h2>
                {{Form::open(['method'=>'post','action'=>'Auth\RegisterController@register'])}}
                <p>
                    <label>Name <span style="color: red;">*</span></label>
                    <input type="text" name="name" required class="form-control">
                </p>
                <p>
                    <label>Email address  <span style="color: red;">*</span></label>
                    <input type="text" name="email" required class="form-control">
                </p>
                <p>
                    <label>Passwords <span style="color: red;">*</span></label>
                    <input type="password" name="password" required class="form-control">
                </p>
                <p>
                    <label>Passwords <span style="color: red;">*</span></label>
                    <input type="password" name="password_confirmation" required class="form-control">
                </p>
                <div class="login_submit">
                    <button type="submit" class="btn btn-info">Register</button>
                </div>
                {{Form::close()}}
            </div>

        </div>
    </div>
</div>







@include('front.includes.footer')

