<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <link rel="stylesheet" href="https://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="asset('static/')/bootstrap/3.2.0/css/bootstrap.min.css">--}}

    <title>轻松学会larave-@yield('title')</title>
    @section('show')
    @show
</head>

<body>
<!-- 头部 -->
@section('header')
    <div class="jumbotron">
        <div class="container">
            <h2>轻松学会Laravel</h2>
            <p>玩转Laravel表单</p>
        </div>
    </div>
@show

<!-- 中间内容区域 -->
<div class="container">
    <div class="row">
        <!-- 左侧菜单区域 -->
        <div class="col-md-3">
            @section('leftmenu')
                <div class="list-group">
                    <a href="#" class="list-group-item active">学生列表</a>
                    <a href="#" class="list-group-item">新增学生</a>
                </div>
            @show
        </div>
        <!-- 右侧内容区域 -->
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>

</div>




<!-- 尾部 -->
@section('footer')
    <div class="jumbotron" style="margin:0,">
        <div class="container">
            <span> @2016 jery</span>
        </div>

    </div>
@show

<!-- JavaScript 放置在文档最后面可以使页面加载速度更快 -->
<!-- 可选: 包含 jQuery 库 -->
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<!-- 可选: 合并了 Bootstrap JavaScript 插件 -->
<script src="https://apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@section('javascript')
@show

</body>
</html>