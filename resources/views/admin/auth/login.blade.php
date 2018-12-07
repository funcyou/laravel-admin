<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link href="{{asset('hplus/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('hplus/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('hplus/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('hplus/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('hplus/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <meta name="_token" content="{{csrf_token()}}">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html"/>
    <![endif]-->
    <script>
      if (window.top !== window.self) {
        window.top.location = window.location;
      }
    </script>
</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">Hi</h1>

        </div>
        <h3>欢迎使用Laravel-admin</h3>
        <form class="m-t" role="form" id="base_form">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码" required="">
            </div>
            <button type="button" onclick="ajaxSub();" class="btn btn-primary block full-width m-b">登 录</button>
        </form>
    </div>
</div>
<script src="{{asset('hplus/js/jquery.min.js')}}"></script>
<script src="{{asset('hplus/js/bootstrap.min.js')}}"></script>
<script src="{{asset('hplus/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script>
  var clk = true;

  function ajaxSub() {
    if (clk) {
      clk = false;
      $.ajax({
        type: 'POST',
        url: '',
        data: $('#base_form').serialize(),
        dataType: 'json',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        success: function (data) {
          clk = true;
          if (data.status != 1) {
            swal("登录失败！", data.message, "error");
          } else {
            window.location.href = "{{ route('admin.index.index') }}";
          }
        },
        error: function (xhr, type) {
          clk = true;
          if (xhr.status == 422) {
            var msg = '';
            $.each(xhr.responseJSON.errors, function (key, value) {
              msg += value + '\n';
            });
            swal("登录失败！", msg, "error");
          } else {
            swal("登录失败！", '系统错误', "error");
          }
        },
      });
    }
  }
</script>
</body>

</html>
