@include('common/base',['title'=> '后台系统管理'])
@include('common/sidebar')

<!--main-container-part-->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>类型添加</h1>
    </div>
    <div class="container-fluid">
        <a class="btn tip-top" data-original-title="添加" href="{{ url()->previous() }}">返回</a>
        <hr>
        <div class="row-fluid">
            {{--<div class="span12">--}}
                {{--<div class="widget-box">--}}
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">名字</label>
                            <input type="text" class="form-control" name="type[name]" placeholder="类型">
                                @if(count($errors))
                                    <div class="admin-content-body">
                                        <span class="label label-important">
                                            {{$errors->first()}}
                                        </span>

                                    </div>
                                @endif
                        </div>


                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

<!--end-main-container-part-->
@include('common/foot')

