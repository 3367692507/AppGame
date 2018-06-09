@extends('layouts.base')

@section('title', '题目列表')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>题库管理</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> 题目添加</h4>
                        <a href="question"><button class="btn btn-round btn-primary" type="button">添加题目</button></a>
                        <hr>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th class="numeric">题目ID</th>
                                    <th class="numeric">题目名称</th>
                                    <th class="numeric">题目类型</th>
                                    <th class="numeric">题目等级</th>
                                    <th class="numeric">录入方式</th>
                                    <th class="numeric">审核状态</th>
                                    <th class="numeric">添加人</th>
                                    <th class="numeric">添加时间</th>
                                    <th class="numeric">操作</th>
                                </tr>
                                </thead>
                                    <tbody>
                                    @foreach($data as $val)
                                    <tr>
                                        <td class="numeric">{{ $val->qid }}</td>
                                        <td class="numeric">{{ $val->qcontent }}</td>
                                        <td class="numeric">{{ $val->tname }}</td>
                                        <td class="numeric">{{ $val->level }}</td>
                                        <td class="numeric">{{ \App\Models\Quertions::is_admin($val->origin) }}</td>
                                        <td class="numeric">{{ \App\Models\Quertions::status($val->status) }}</td>
                                        <td class="numeric">{{ $val->addperson }}</td>
                                        <td class="numeric">{{ date('Y-m-d H:i:s',$val->addtime) }}</td>
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