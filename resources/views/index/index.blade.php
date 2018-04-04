<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::asset('static/Home/src/css/swiper-3.4.1.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('static/Home/src/css/main.css')}}">
    <script type="text/javascript" src="{{URL::asset('static/Home/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('static/Home/js/swiper.jquery.min.js')}}"></script>
    @section('style')

    @show
</head>
<body>
    <header>
        <div class="top bg-gray">
            <div class="container clearfix">
                <div class="fl">新闻发布系统</div>
                {{--<div class="fr">欢迎您！<if condition="$Think.session.userinfo.id neq null">{$Think.session.userinfo.name}&nbsp;&nbsp;<a href="{{url('Login/outlogin')}}">退出</a><else/><a href="{{url('Login/login')}}">登录</a></if></div>--}}
            </div>
        </div>
        <div class="container">
            <div class="logo">
                <a href="{{url('index/index')}}">
                    <img src="{{URL::asset('static//Home/src/img/logo.png')}}" >
                </a>
            </div>
        </div>
    </header>
    <nav class="container">
        <ul class="nav">
            <li class="nav_item"><a href="{{url('Index/index')}}" class="nav_link">首页</a></li>
            @foreach($type as $key => $n)
                <li class="nav_item">
                    <a href="{{url('index/index',array('type'=>$n['name']))}}" class="nav_link">{{$n['name']}}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- href="{{url('Index/index',array('type'=>''))}}" -->
    <main class="container clearfix">
            <div class="row">
                <div class="plate carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    {{--<a href="{{url('Index/news_detail',array('id'=>$vo['id']))}}"><img src="" alt="" width="350" ></a>--}}
                                </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="plate palte-hot">
                    <div class="plate_hd">
                        最新资讯
                    </div>
                    <ul class="plate_bd">
                        @foreach($yw as $i=>$vo)
                            <li class="plate_item" data-num="{{$i+1}}">
                                <a href="{{url('news_detail',array('id'=>$vo->id))}}">{{$vo->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row" style="width:100%">
                    <div class="plate_hd" style="margin:5px">
                        <a href="">{$_GET['type']}</a>
                    </div>
                    <ul class="plate_bd" style="margin:10px;">
                            <li class="plate_item" style="margin:10px; border-bottom:1px dashed #000; ">
                                <div class="media" style="margin:5px">
                                    <div class="media_sd">
{{--                                        <a href="{{url('Index/news_detail',array('id'=>$vo['id']))}}">--}}
                                            <img src="__ROOT__/Uploads/{$vo['img']}" class="media_img" alt="" style="width:270px; height:187px; " ></a>
                                    </div>
                                    <div class="media_mn">
                                        {{--<div class="media_tt"><a href="{{url('Index/news_detail',array('id'=>$vo['id']))}}">{$vo.title}</a></div>--}}
                                        {{--<div class="media_ct"><php> echo my_substr(strip_tags($vo['content']),0,770);</php>...<a href="{{url('Index/news_detail',array('id'=>$vo['id']))}}">更多</a></div>--}}
                                    </div>
                                </div>
                            </li>   
                    </ul>
            </div>

        <div class="row">
            <ul class="plate_bd" >
                    <li class="plate_item" style="float:left;">
                        <div class="media">
                            <div class="media_sd">
                                <a target="_blank" href=""> <img src="" class="media_img" alt="" width="180px;" height="100px;"></a>
                            </div>
                        </div>
                    </li>
            </ul>
        </div>
        <div class="row">
            <ul class="plate_bd" >
                    <li class="plate_item" style="float:left;">
                        友情链接：
                    </li>
                    <li class="plate_item" style="float:left; margin:0 10px;">
                        <a href="" target="_blank">{$l.name}</a>
                    </li>

                
            </ul>            
        </div>
    </main>
    <footer class="footer">
        <div class="container">
        @ <br>
        计算机科学系
        </div>
    </footer>
    <script src="{{URL::asset('static/Home/src/js/lib/jquery-1.12.4.min.js')}}"></script>
    <script src="{{URL::asset('static/Home/src/js/lib/swiper-3.4.1.jquery.min.js')}}"></script>
    <script>
        
            $(function() {
                var headerSwiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    nextButton: '.swiper-button-next',
                    prevButton: '.swiper-button-prev',
                    slidesPerView: 1,
                    paginationClickable: true,
                    spaceBetween: 30,
                    autoplay: 2000,
                    speed:1000,
                    // autoplayDisableOnInteraction: false,
                    loop: true
                });
            })
    </script>

</body>
</html>
