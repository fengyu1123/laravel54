@include('common/base',['title'=> '后台系统管理'])
@include('common/sidebar')

<!--main-container-part-->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>新闻类型</h1>
    </div>
    <div class="container-fluid">
        <a class="btn tip-top" data-original-title="添加" href="{{url('admin/addType')}}">添加</a>
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
                        </span>
                        <h5>
                            @if (Session::has('success'))
                                <span class="label label-important">
                                    {{Session::get('success')}}
                                </span>
                            @else Static table with checkboxes @endif </h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped with-check">
                            <thead>
                            <tr>
                                <th><i class="icon-resize-vertical"></i></th>
                                <th>名字</th>
                                <th>添加时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($typeList as $k=>$v)
                                <tr>
                                    <td><input type="checkbox" />{{--$typeList->currentPage()*($k+1)--}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->addtime}}</td>
                                    <td class="center">
                                        <a class="btn tip-top" data-original-title="删除" href="{{url('admin/delType',['id'=>$v->id])}}">删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination pull-right">
                            {{$typeList->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end-main-container-part-->
@include('common/foot')

