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
                                <form class="form-horizontal style-form" method="post" action="role_add_do">
                                <select name="user_id" id="">
                                    <option value="0">请选择</option>
                                    @foreach($username as $val)
                                        <option value="{{ $val->user_id }}">{{ $val->username }}</option>
                                    @endforeach
                                </select>
                                    <input type="hidden" name="role_id" value="{{$role_id}}"/>
                                    {{ csrf_field() }}
                                    <input type="submit" value="添加用户"/>
                                </form>
  <br><br><br>
                                <thead>
                                <tr>
                                    <th class="numeric">序号</th>
                                    <th class="numeric">用户名称</th>
                                    <th class="numeric">角色名称</th>
                                    <th class="numeric">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $val)
                                    <tr>
                                        <td class="numeric">{{ $val->user_role_id }}</td>
                                        <td class="numeric">{{ $val->username }}</td>
                                        <td class="numeric">{{ $val->role_name }}</td>
                                        <td class="numeric">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs" id="del"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </section>
                    </div><!-- /content-panel -->
                </div><!-- /col-lg-4 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection