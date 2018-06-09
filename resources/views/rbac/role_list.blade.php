@extends('layouts.base')

@section('title', '题目类型列表')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>角色管理</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <a href="role_add"><button class="btn btn-round btn-primary" type="button">添加角色</button></a>
                        <hr>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th class="numeric">序号</th>
                                    <th class="numeric">角色名称</th>
                                    <th class="numeric">角色管理</th>
                                    <th class="numeric">状态</th>
                                    <th class="numeric">添加时间</th>
                                    <th class="numeric">操作</th>
                                </tr>
                                </thead>
                                @foreach ($data as $val)
                                    <tbody>
                                    <tr>
                                        <td class="numeric">{{ $val->role_id }}</td>
                                        <td class="numeric">{{ $val->role_name }}</td>
                                        <td class="numeric"><a href="user_role?role_id = {{ $val->role_id }}">用户赋角色</a><a href="role_node?role_id = {{ $val->role_id }}">角色赋权限</a></td>
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