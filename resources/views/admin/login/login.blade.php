<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Blog Admin</title>

</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>MyBlog</h1>
    </div>
    <div class="login-box">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <div class="form-group">
                <label class="control-label">USER-EMAIL</label>
                <input class="form-control" type="email" name="email" placeholder="Email" autofocus>
                {{ $errors->has('email') ? $errors->first('email'):''}}
                {{--@if ($errors->has('email'))--}}
                {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('email') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            </div>
            <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
                {{ $errors->has('password') ? $errors->first('password'):''}}

            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label class="semibold-text">
                            <input type="checkbox"><span class="label-text">Stay Signed in</span>
                        </label>
                    </div>
                    <p class="semibold-text mb-0"><a data-toggle="flip">Forgot Password ?</a></p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            </div>
        </form>

    </div>
</section>
</body>
<script src="{{asset('/admin')}}/js/jquery-2.1.4.min.js"></script>
<script src="{{asset('/admin')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/admin')}}/js/plugins/pace.min.js"></script>
<script src="{{asset('/admin')}}/js/main.js"></script>
</html>