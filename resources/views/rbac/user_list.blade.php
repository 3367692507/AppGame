@extends('layouts.base')

@section('title', '题目类型列表')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>用户管理</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        {{--<h4><i class="fa fa-angle-right"></i> 题目类型</h4>--}}
                        <a href="user_add"><button class="btn btn-round btn-primary" type="button">添加用户</button></a>
                        <hr>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th class="numeric">序号</th>
                                    <th class="numeric">用户名称</th>
                                    <th class="numeric">状态</th>
                                    <th class="numeric">添加时间</th>
                                    <th class="numeric">操作</th>
                                </tr>
                                </thead>
                                @foreach ($data as $val)
                                    <tbody>
                                    <tr>
                                        <td class="numeric">{{ $val->user_id }}</td>
                                        <td class="numeric">{{ $val->username }}</td>
                                        <td class="numeric">{{ $val->status }}</td>
                                        <td class="numeric">{{ date('Y-m-d H:i:s',$val->add_time) }}</td>
                                        <td class="numeric">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs" id="del"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </section>
                    </div><!-- /content-panel -->
                </div><!-- /col-lg-4 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection