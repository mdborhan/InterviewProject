<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Interview Project</title>
    <base  />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Devs Palace" />
    <meta name="description" content="" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <link rel="stylesheet" href="{{asset('/')}}assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('/')}}assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">



    <link rel="stylesheet" href="{{asset('/')}}assets/adminlte/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="{{asset('/')}}assets/adminlte/plugins/iCheck/square/blue.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body class="hold-transition login-page">
<div class="login-box">


    <div class="login-logo" href="#">

    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="admin@gmail.com">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="admin@gmail.com">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <input type="hidden" name="csrf_test_name" value="9d1bac52bc970807ea7e33e3bd0bd7f3" />
                <div class="col-md-8">
                    <div class="checkbox icheck">

                    </div>
                </div>
                <div class="col-md-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
                </div>
            </div>
        </form>
        <div class="login-footer">
            <div class="forgot-hint pull-right">
                {{--                <a id="forget-password" class="" href="auth/forgot-password.html">Forgot Password?</a>--}}
            </div>
            <div class="forgot-hint pull-left">

            </div>
        </div>
    </div>
</div>

<script src="{{asset('/')}}assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>

<script src="{{asset('/')}}assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="{{asset('/')}}}assets/adminlte/plugins/iCheck/icheck.min.js"></script>





</body>


<!-- Mirrored from pos.devspalace.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 07:21:42 GMT -->
</html>
