@extends('layouts.base')

@section('title', '答案添加')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>题库管理</h3>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i>添加答案</h4>
                        <form class="form-horizontal style-form" method="post" action="answer">
                            @csrf
                            <div id="one" style="display:block">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">问题名称：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <select class="form-control" style="width: 200px" name="qid">
                                                <option>请选择...</option>
                                                @foreach($qname as $value)
                                                    <option value="{{ $value->qid }}">
                                                        {{ $value->qcontent }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">答案A：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" style="width: 250px" name="acontent[]">
                                        </div>
                                            <input name="is_true[]" type="checkbox" value="1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">答案B：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" style="width: 250px" name="acontent[]">
                                        </div>
                                        <input name="is_true[]" type="checkbox" value="2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">答案C：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" style="width: 250px" name="acontent[]">
                                        </div>
                                        <input name="is_true[]" type="checkbox" value="3">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">答案D：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" style="width: 250px" name="acontent[]">
                                        </div>
                                        <input name="is_true[]" type="checkbox" value="4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">添加人：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" style="width: 250px" name="addperson">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                                添加
                            </button>
                            <a href="answer_list"><button class="btn btn-round btn-primary" type="button">答案列表</button></a>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection