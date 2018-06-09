<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/js/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/lineicons/style.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('assets/js/chart-master/Chart.js') }}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="收起/打开"></div>
        </div>
        <!--logo start-->
        <a href="index" class="logo"><b>头脑王者后台管理系统</b></a>
        <!--logo end-->
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login">登陆</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="index"><img src="{{ URL::asset('assets/img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
                <h5 class="centered">首页</h5>

                <li class="mt">
                    <a class="active" href="index">
                        <i class="fa fa-"></i>
                        <span></span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="active">
                        <i class="fa fa-desktop"></i>
                        <span>题库管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="question">题目添加</a></li>
                        <li><a  href="answer">答案添加</a></li>
                        <li><a  href="type">题目类型</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="active">
                        <i class="fa fa-th"></i>
                        <span>题目审核</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="audit">题目审核</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="active">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>用户权限管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="user_add">用户管理</a></li>
                        <li><a  href="role_add">角色管理</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    @yield('content')
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ URL::asset('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/jquery.sparkline.js') }}"></script>


<!--common script for all pages-->
<script src="{{ URL::asset('assets/js/common-scripts.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('assets/js/gritter/js/jquery.gritter.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/gritter-conf.js') }}"></script>

<!--script for this page-->
<script src="{{ URL::asset('assets/js/sparkline-chart.js') }}"></script>
<script src="{{ URL::asset('assets/js/zabuto_calendar.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to MyAdmin!',
            // (string | mandatory) the text inside the notification
            text: '欢迎来到我的后台管理系统 <a href="" target="_blank" style="color:#ffd777"></a>.',
            // (string | optional) the image to display on the left
            image: '{{ URL::asset('assets/img/ui-sam.jpg') }}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
</body>
</html>
@yield('js')