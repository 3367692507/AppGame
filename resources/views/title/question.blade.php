@extends('layouts.base')

@section('title', '题目添加')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>题库管理</h3>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i>添加题目</h4>
                        <form class="form-horizontal style-form" method="post" action="question">
                            @csrf
                            <div id="one" style="display:block">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">题目名称：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" style="width: 250px" name="qcontent">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">题目类型：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <select class="form-control" style="width: 200px" name="tid">
                                                <option>请选择...</option>
                                                @foreach($type_data as $type_datum)
                                                <option value="{{ $type_datum->tid }}">
                                                    {{ $type_datum->tname }}
                                                </option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">题目级别：</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <select class="form-control" style="width: 200px" name="level">
                                                <option>请选择...</option>
                                                @for($i=1;$i<10;$i++)
                                                <option value="{{ $i }}级">
                                                    {{ $i }}级
                                                </option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">添加人：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" style="width: 250px" name="addperson">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                                添加
                            </button>
                            <a href="question_list"><button class="btn btn-round btn-primary" type="button">题目列表</button></a>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection