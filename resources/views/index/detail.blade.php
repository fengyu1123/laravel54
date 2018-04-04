<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>资讯详情</title>
    <link rel="stylesheet" href="{{URL::asset('static/Home/src/css/swiper-3.4.1.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('static/Home/src/css/main.css')}}">
</head>
<body>
    <header>
        <div class="top bg-gray">
            <div class="container clearfix">
                <div class="fl">新闻发布系统</div>
                <div class="fr">欢迎您！<if condition="$Think.session.userinfo.id neq null">{$Think.session.userinfo.name}&nbsp;&nbsp;<a href="{:U('Login/outlogin')}">退出</a><else/><a href="{:U('Login/login')}">登录</a></if></div>
            </div>
        </div>
        <div class="container">
            <div class="logo">
                <a href="#">
                    <img src="{{URL::asset('static/src/img/logo.png')}}" >
                </a>
            </div>
        </div>
    </header>
    <nav class="container">
        <ul class="nav">
            <li class="nav_item"><a href="{{ route('index') }}" class="nav_link">首页</a></li>
            @foreach($type as $key => $n)
                <li class="nav_item">
                    <a href="{{url('index/index',array('type'=>$n['name']))}}" class="nav_link">{{$n['name']}}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    
    <main class="container clearfix">
        <div class="main">
            <div class="news">
                @if (Session::has('success'))
                    <span class="label label-important">
                                    {{Session::get('success')}}
                                </span>
                @else Static table with checkboxes @endif
                <h3 class="news_tt">{{$detail->title}}</h3>
                <div class="news_info">
                    <span>时间 ：{{$detail->addtime}}</span>
                    <!-- <span>来源：新华网</span> -->
                    <!-- <span>评论：123条</span> -->
                </div>
                <div class="news_ct">
                    <img src="__ROOT__/Uploads/{$detail['img']}" class="media_img" alt="">
                    {!! $detail->content!!}</div>
            </div>
            <form action="" method="post" class="form-comment">
                <textarea name="content"></textarea>
                <input type="hidden" name="title" value="{$detail['title']}">
                <input type="hidden" name="id" value="{$detail['id']}">
                <div class="form_action text-center">
                    <button type="submit" class="form_submit">发表评论</button>
                </div>
               
            </form>
            <div class="comment">
                {{--<volist name="comment" id="c">--}}
                {{--<div class="media">--}}
                    {{--<div class="media_sd">--}}
                        {{--<img src="{{URL::asset('static/src/img/tmp/media.png" class="media_img" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="media_mn">--}}
                        {{--<div class="media_tt">用户：{$c['uid']}---{$c['addtime']|date="Y-m-d H:i:s",###}</div>--}}
                        {{--<div class="media_ct">{$c['content']}</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--</volist>--}}
            </div>
        </div>
        <div class="aside">
            <div class="plate plate-side">
                <div class="plate_hd">
                    <a href="#">最新资讯</a>
                </div>
                <ul class="plate_bd">
                    {{--<volist name="list" id="vo" offset="0" length="8">--}}
                        {{--<li class="plate_item" data-num="{$i}"><a href="{:U('Index/news_detail',array('id'=>$vo['id']))}">{$vo['title']}</a></li>--}}
                    {{--</volist>--}}
                    
                </ul>
            </div>
        </div>
       
    </main>

    <footer class="footer">
        <div class="container">
        @ <br>
        计算机科学系
        </div>
    </footer>
    <script src="{{URL::asset('static/Home/src/js/lib/jquery-1.12.4.min.js')}}"></script>
    <script src="{{URL::asset('static//Home/src/js/lib/swiper-3.4.1.jquery.min.js')}}"></script>
    <script>
      
    </script>
</body>
</html>