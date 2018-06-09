@extends('layouts.base')

@section('title', '答案列表')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>题库管理</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i>答案管理</h4>
                        <a href="answer"><button class="btn btn-round btn-primary" type="button">添加答案</button></a>
                        <hr>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th class="numeric">答案ID</th>
                                    <th class="numeric">问题</th>
                                    <th class="numeric">A</th>
                                    <th class="numeric">B</th>
                                    <th class="numeric">C</th>
                                    <th class="numeric">D</th>
                                    <th class="numeric">正确选项</th>
                                    <th class="numeric">添加人</th>
                                    <th class="numeric">添加时间</th>
                                    <th class="numeric">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $val)
                                    <tr>
                                        <td class="numeric">{{ $val->aid }}</td>
                                        <td class="numeric">{{ $val->qcontent }}</td>
                                        <td class="numeric">{{ $val->acontent['0'] }}</td>
                                        <td class="numeric">{{ $val->acontent['1'] }}</td>
                                        <td class="numeric">{{ $val->acontent['2'] }}</td>
                                        <td class="numeric">{{ $val->acontent['3'] }}</td>
                                        <td class="numeric">{{ \App\Models\Answer::abcd($val->is_true) }}</td>
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