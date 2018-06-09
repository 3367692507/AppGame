@extends('layouts.base')

@section('title', '题目类型列表')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>题库管理</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> 题目类型</h4>
                        <a href="type"><button class="btn btn-round btn-primary" type="button">添加类型</button></a>
                        <hr>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th class="numeric">类型ID</th>
                                    <th class="numeric">类型名称</th>
                                    <th class="numeric">操作</th>
                                </tr>
                                </thead>
                                @foreach ($data as $val)
                                <tbody>
                                <tr>
                                    <td class="numeric">{{ $val->tid }}</td>
                                    <td class="numeric">{{ $val->tname }}</td>
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