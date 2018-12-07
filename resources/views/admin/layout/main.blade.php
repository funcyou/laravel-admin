<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>@section('title')主页@stop</title>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('hplus/favicon.ico')}}">
    <link href="{{asset('hplus/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('hplus/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('hplus/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('hplus/css/style.min.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body class="gray-bg">
@yield('content')
<script src="{{asset('hplus/js/jquery.min.js')}}"></script>
<script src="{{asset('hplus/js/bootstrap.min.js')}}"></script>
<script src="{{asset('hplus/js/content.min.js')}}"></script>
@yield('js')
</body>
</html>
