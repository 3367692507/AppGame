@extends('layouts.base')

@section('title', '题目审核')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>题目审核</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i>题目审核</h4>
                        <hr>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th class="numeric">题目ID</th>
                                    <th class="numeric">问题</th>
                                    <th class="numeric">问题类型</th>
                                    <th class="numeric">A</th>
                                    <th class="numeric">B</th>
                                    <th class="numeric">C</th>
                                    <th class="numeric">D</th>
                                    <th class="numeric">正确选项</th>
                                    <th class="numeric">添加人</th>
                                    <th class="numeric">添加时间</th>
                                    <th class="numeric">状态</th>
                                    <th class="numeric">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $val)
                                    <tr qid="{{ $val->qid }}">
                                        <td class="numeric">{{ $val->qid }}</td>
                                        <td class="numeric">{{ $val->qcontent }}</td>
                                        <td class="numeric">{{ $val->tname }}</td>
                                        <td class="numeric">{{ $val->acontent['0'] }}</td>
                                        <td class="numeric">{{ $val->acontent['1'] }}</td>
                                        <td class="numeric">{{ $val->acontent['2'] }}</td>
                                        <td class="numeric">{{ $val->acontent['3'] }}</td>
                                        <td class="numeric">{{ \App\Models\Audit::is_true($val->is_true) }}</td>
                                        <td class="numeric">{{ $val->addperson }}</td>
                                        <td class="numeric">{{ date("Y-m-d H:i:s",$val->addtime) }}</td>
                                        <td class="numeric status">{{ \App\Models\Audit::is_audit($val->status) }}</td>
                                        <td class="numeric">
                                            <button class="btn btn-success btn-xs" id="yes">审核</button>
                                            <button class="btn btn-success btn-xs" id="no">拒绝</button>
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
@section('js')
    <script>
        //审核
        $(document).on('click','#yes',function(){
            var qid = $(this).parent().parent().attr('qid');
            var _this = $(this);
            //ajax
            $.ajax({
                url:'auditDo',
                type:'post',
                data:{"qid":qid},
                dataType:'json',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success:function($data){
                    if($data.code == "1"){
                        _this.parent().prev().html('<td class="numeric status">'+'已审核'+'</td>');
                    }else{
                        alert($data.msg);
                    }
                }
            })
        })
        //拒绝
        $(document).on('click','#no',function(){
            var qid = $(this).parent().parent().attr('qid');
            var _this = $(this);
            //ajax
            $.ajax({
                url:'ju',
                type:'post',
                data:{"qid":qid},
                dataType:'json',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success:function($data){
                    if($data.code == "1"){
                        _this.parent().prev().html('<td class="numeric status">'+'已拒绝'+'</td>');
                    }else{
                        alert($data.msg);
                    }
                }
            })
        })
    </script>
@endsection