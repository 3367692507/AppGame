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
                        <h4 class="mb"><i class="fa fa-angle-right"></i>添加角色</h4>
                        <form class="form-horizontal style-form" method="post" action="role_add">
                            @csrf
                            <div id="one" style="display:block">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">角色名称：</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" style="width: 250px" name="role_name">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                                添加
                            </button>
                            <a href="role_list"><button class="btn btn-round btn-primary" type="button">角色列表</button></a>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection