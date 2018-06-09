<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">

        <form class="form-login" action="login" method="post">
            @csrf
            <h2 class="form-login-heading">登 陆</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="用户名" autofocus name="username">
                <br>
                <input type="password" class="form-control" placeholder="密码" name="password">
                <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> 忘记密码?</a>

		                </span>
                </label>
                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> 登 陆</button>
                <hr>

                <div class="login-social-link centered">
                    <p>或者你可以用第三方登陆</p>
                    <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> QQ</button>
                    <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Wechat</button>
                </div>
                <div class="registration">
                    没有账号?<br/>
                    <a class="" href="#">
                        立即注册
                    </a>
                </div>

            </div>

            <!-- Modal -->
            <!-- modal -->

        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.backstretch.min.js') }}"></script>
<script>
    $.backstretch("{{ URL::asset('assets/img/login-bg.jpg') }}", {speed: 500});
</script>


</body>
</html>
