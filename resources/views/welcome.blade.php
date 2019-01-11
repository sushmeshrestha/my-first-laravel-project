<!DOCTYPE html>
<html>
<head>
    <title>hello</title>
</head>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('css/skin-blue.min.css')}}">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Admin</b>LTE</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="#">I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new membership</a>



        </div>
    </div>

        <ul>
            <li class="active"><a href="{{ route('projects.index') }}"></a></li>
        </ul>



        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
        <script>
        $(function () {
        $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
        });
        });
        </script>

</body>
</html>
